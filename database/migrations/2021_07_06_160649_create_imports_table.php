<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('MATNR');

            $table->string('MAKTX');

            $table->string('texte_article')->nullable(); // Not found

            $table->string('MATKL');

            $table->string('WERKS');

            $table->string('PRCTR');

            $table->string('BESKZ');

            $table->string('SOBSL');

            $table->string('tcy');  // Not found

            $table->string('DZEIT');

            $table->string('PLIFZ');

            $table->string('FHORI');

            $table->string('mp');   // Not found

            $table->string('ATPKZ');

            $table->string('MTART');

            $table->string('ALTSL');

            $table->string('SBDKZ');

            $table->string('VSPVB');

            $table->string('LGFSB');

            $table->string('LGPRO');

            $table->string('DISLS');

            $table->string('BSTFE');

            $table->string('MEINS');

            $table->string('EISBE');

            $table->string('MEINS1');

            $table->string('WEBAZ');

            $table->string('DISPO');

            $table->string('MTVFP');

            $table->string('AUSSS');

            $table->string('EKGRP');

            $table->string('RWPRO');

            $table->string('SFCPF');

            $table->string('cree_par'); // Not found

            $table->string('langue'); // Not found

            $table->string('cree_le'); // Not found

            $table->string('LADGR');

            $table->string('STRGR');

            $table->string('VRMOD');

            $table->string('VINT1');

            $table->string('VINT2');

            $table->string('BSTMI');

            $table->string('MEINS2');

            $table->string('BSTRF');

            $table->string('MEINS3');

            $table->string('BSTMA');

            $table->string('MEINS4');

            $table->string('MABST');

            $table->string('MEINS5');

            $table->string('chant'); // Not found

            $table->string('DISMM');

            $table->string('SHZET');

            $table->string('SHZET1');

            $table->string('EXTWG');

            $table->string('NFMAT');

            $table->string('dv');   // Not found

            $table->string('LOGGR');

            $table->string('DISGR');

            $table->string('MAABC');

            $table->string('MEINS6');

            $table->string('ZPS_POSID');

            $table->string('grpa'); // Not found

            $table->string('STEUC');

            $table->string('PRDHA');

            $table->string('BRGEW');

            $table->string('FRTME');

            $table->string('NTGEW');

            $table->string('FRTME1');

            $table->string('NCOST');

            $table->string('LOSGR');

            $table->string('MEINS7');

            $table->integer('user_id');

            $table->integer('import_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imports');
    }
}
