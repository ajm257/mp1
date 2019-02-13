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

        print_r($records);


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

class record {}

class recordFactory {}

class html {

   // static public function generateTable($records) {

    //    $table = $records;

    //    return $table;

}

