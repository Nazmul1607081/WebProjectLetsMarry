<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Procedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("
        CREATE PROCEDURE cheakage(IN age int(11),in gender varchar(11))
        BEGIN
        IF  (age < 18 and gender ='female') THEN
        SIGNAL SQLSTATE '45000' SET message_text = 'Female age is not perfct'; 
        END IF;
        IF  (age < 21 and gender = 'male') THEN
       SIGNAL SQLSTATE '45000' SET message_text = 'male age is not perfct'; 
         END IF;
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
