<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Insertdevorse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER insertdevorse AFTER INSERT ON `dpeople` FOR EACH ROW
            BEGIN
                INSERT INTO `devorse`(`devorse_no`, `marriage_no`, `devorse_date`, `nid`) 
                VALUES (NULL,NEW.marriage_no, NOW(),NEW.nid);
            END
        ');
        
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
