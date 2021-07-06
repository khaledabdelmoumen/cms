<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function import()
    {
        $file = "C:/Users/htc/Desktop/workspace stage/test/testproject/public/files/W15 Z_ART_MARA_MARC_GLOBAL.csv";
        $query = "LOAD DATA LOCAL INFILE '" . $file . "' INTO TABLE imports
            FIELDS TERMINATED BY ';' 
            ENCLOSED BY '\"'
            IGNORE 1 LINES 
                (MATNR,

                 MAKTX,

                 texte_article,

                 MATKL,

                 WERKS,

                 PRCTR,

                 BESKZ,

                 SOBSL,

                 tcy, 

                 DZEIT,

                 PLIFZ,

                 FHORI,

                 mp,  

                 ATPKZ,

                 MTART,

                 ALTSL,

                 SBDKZ,

                 VSPVB,

                 LGFSB,

                 LGPRO,

                 DISLS,

                 BSTFE,

                 MEINS,

                 EISBE,

                 MEINS1,

                 WEBAZ,

                 DISPO,

                 MTVFP,

                 AUSSS,

                 EKGRP,

                 RWPRO,

                 SFCPF,

                 cree_par,

                 langue,

                 cree_le,

                 LADGR,

                 STRGR,

                 VRMOD,

                 VINT1,

                 VINT2,

                 BSTMI,

                 MEINS2,

                 BSTRF,

                 MEINS3,

                 BSTMA,

                 MEINS4,

                 MABST,

                 MEINS5,

                 chant,

                 DISMM,

                 SHZET,

                 SHZET1,

                 EXTWG,

                 NFMAT, 

                 dv,  

                 LOGGR,

                 DISGR,

                 MAABC,

                 MEINS6,

                 ZPS_POSID,

                 grpa,

                 STEUC,

                 PRDHA,

                 BRGEW,

                 FRTME,

                 NTGEW,

                 FRTME1,

                 NCOST,

                 LOSGR,

                 MEINS7,

                 @import_id,

                 @created_at,

                 @updated_at)
                 
                 SET user_id=1,import_id=1,created_at=NOW(),updated_at=null";


        DB::connection()->getpdo()->exec($query);
        return 'ok';
    }
}
