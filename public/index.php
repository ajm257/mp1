<?php
/**
 * Created by PhpStorm.
 * User: ajm
 * Date: 2/11/19
 * Time: 8:22 PM
 */

main::start();

class main {

    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }
}

class csv {

    static public function getRecords() {
        $records = 'test hjsdfh';
        return $records;
    }

}

class html {

    static public function generateTable($records) {

        $table = $records;

        return $table;
    }
}

class system {

    static public function printPage($page){
        echo $page;
    }
}

