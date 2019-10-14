<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Insertdpeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER insertdpeople AFTER DELETE ON `people` FOR EACH ROW
            BEGIN
                INSERT INTO `dpeople`(`f_name`, `marriage_no`, `nid`, `address`) 
                VALUES (OLD.f_name,OLD.marriage_no,OLD.nid,OLD.address);
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
// CREATE PROCEDURE check_age (age in INT,gender in varchar)
//         BEGIN
//         IF  (age < 18 and gender = "female") THEN
//         SIGNAL SQLSTATE '45000' SET message_text = 'age must be greater than 18';
//         END IF;
//         IF  (NEW.age < 21 and new.gender = "male") THEN
//         SIGNAL SQLSTATE '45000' SET message_text = 'age must be greater than 21';
//          END IF;
//         END;


        // BEGIN
        // IF  (NEW.age < 18 and new.gender = "female") THEN
        // SIGNAL SQLSTATE '45000' SET message_text = 'age must be greater than 18';
        // END IF;
        // IF  (NEW.age < 21 and new.gender = "male") THEN
        // SIGNAL SQLSTATE '45000' SET message_text = 'age must be greater than 21';
        //  END IF;
        // END