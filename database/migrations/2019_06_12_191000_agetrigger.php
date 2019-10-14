<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agetrigger extends Migration
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
        CREATE TRIGGER age_insert_trigger after INSERT ON people
        FOR EACH ROW
        BEGIN
        call cheakage(new.age,new.gender);
        END;

        -- Create the UPDATE trigger
        CREATE TRIGGER age_update_trigger after UPDATE ON people
        FOR EACH ROW
        BEGIN
        call cheakage(new.age,new.gender);
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
        Schema::dropIfExists('people');  
    }
}
