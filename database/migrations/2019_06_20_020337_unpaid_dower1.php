<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnpaidDower1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("




        

        -- Create the INSERT trigger
        CREATE TRIGGER unpaid_trigger BEFORE INSERT ON marriage
        FOR EACH ROW
        BEGIN
        INSERT INTO `marriage`(` marriage_no`,`marriage_date`,`spectator1_name`,`spectator1_nid`,
        `spectator2_name`,`spectator2_nid`,`dower`,`paid_dower`,`unpaid_dower`) 
        VALUES (	
            new.marriage_no,
            new.marriage_date,
            new.spectator1_name,
            new.spectator1_nid,
            new.spectator2_name,
            new.spectator2_nid,
            new.dower,
            new.paid_dower,
            unp(new.dower,new.paid_dower);
        END;

        -- Create the UPDATE trigger
        CREATE TRIGGER unpaid_trigger BEFORE update ON marriage
        FOR EACH ROW
        BEGIN
        INSERT INTO `marriage`(` marriage_no`,`marriage_date`,`spectator1_name`,`spectator1_nid`,
        `spectator2_name`,`spectator2_nid`,`dower`,`paid_dower`,`unpaid_dower`) 
        VALUES (	
            new.marriage_no,
            new.marriage_date,
            new.spectator1_name,
            new.spectator1_nid,
            new.spectator2_name,
            new.spectator2_nid,
            new.dower,
            new.paid_dower,
            unp(new.marriage_no);
        END;
    ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
