<?php
/**
 * Created by PhpStorm.
 * User: ajm
 * Date: 2/11/19
 * Time: 8:22 PM
 */

main::start("example.csv");

class main {

    static public function start($filename) {

        $records = csv::getRecords($filename);

        $record = recordFactory::create();

        print_r($record);


    }
}

class csv {

    static public function getRecords($filename) {

        $file = fopen($filename,"r");

        while(! feof($file))
        {
            $record = fgetcsv($file);

            $records[] = $record;
        }

        fclose($file);
        return $records;
    }
}

class record {} //is the object




class recordFactory { //what actually makes the object/how the object is made

    public static function create(Array $array = null) { //declaring what you are passing in to avoid mismatch error

        $record = new record();

        return $record;
    }

}




class html {

   // static public function generateTable($records) {

    //    $table = $records;

    //    return $table;

}

