<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\SCHEMA;
use PDO;

class AppliedConditionsController extends Controller
{
    public function condtions_applied()

    {  // here we get our imports that conditions are verified
        $imports_with_conditions = [];
        //here we get our final result of true and false fields
        $finale_array = [];
        //here we get all our row where our condition are valide
        $finale_result = [];
        // here we get all our 
        $current_table2 = [];
        $results_applied = [];
        $current_result = [];
        $columns = SCHEMA::getColumnListing('imports');

        // here we get all our conditions
        $conditions = DB::table('conditions')->select('number', 'field', 'value')->get();

        // here we get all our data
        $imports = DB::table('imports')->get();

        $results = DB::table('results')->get();
        $x = 0;
        $default_value = 0;
        foreach ($imports as $key => $imported) {


            $res = get_object_vars($imported);

            foreach ($conditions as $value) {

                $array = get_object_vars($value);
                $result =  $this->test($columns, $array['field']); // the result of our test function

                if ($result == "ok") {

                    if ($res[$array['field']] == $array['value']) {


                        foreach ($results as $value_result) {

                            $res_resultat = get_object_vars($value_result);

                            $test_field = $this->test($columns, $res_resultat['field']);
                            // testing if the condtion numder match with the result number 
                            if (($res_resultat['condition_number'] == $array['number'])) {

                                if (($test_field == 'ok')) {



                                    if ($res['id'] != $default_value) {
                                        // here test if the difference between the id and the default value is different from the current id to insert 
                                        if (($res['id'] - $default_value) != $res['id']) {

                                            array_push($current_table2, $results_applied);
                                            array_push($finale_array, $current_table2);

                                            $current_table2 = [];
                                            $results_applied = [];
                                            $default_value = $res['id'];
                                        }
                                        $current_table2 = [$res, $res['id']];
                                    }

                                    $current_result = [$res_resultat['field'], $res[$res_resultat['field']]];

                                    if ($res_resultat['value'] == $res[$res_resultat['field']]) {

                                        $current_result[2] = 'true';
                                        $current_result[3] = $res_resultat['value'];
                                    } else {
                                        $current_result[2] = 'false';
                                        $current_result[3] = $res_resultat['value'];
                                    }
                                    $current_result[4] = $array['number'];
                                    array_push($results_applied, $current_result);
                                }
                            }
                        }
                    }
                }
            }
            $default_value = $res['id'];
        }


        array_push($current_table2, $results_applied);
        array_push($finale_array, $current_table2);

        //  dd($finale_array);


        return view('Appliedconditions', ['imports' => $finale_array, 'columns' => $columns]);
    }
    public function test($columns, $field)   // testig condition existance 
    {
        $check_field = 'not ok';
        foreach ($columns as $key => $value) {

            if ($value == $field) {
                $check_field = 'ok';
            }
        }
        return $check_field;
    }
}
