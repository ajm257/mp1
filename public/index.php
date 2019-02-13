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


    }
}

class csv {     //reading of the file

    static public function getRecords($filename) {

        $file = fopen($filename,"r");

        $fieldNames = array();

        $count = 0;

        while(! feof($file))
        {
            $record = fgetcsv($file);

            if($count == 0) {

                $fieldNames = $record;  //store fieldnames so we can then use as property headers

            } else {

                $records[] = recordFactory::create($fieldNames, $record); //reads file to give you array of objects
            }

            $count++;   //to increment the counter to retrieve the rest of the records

        }

        fclose($file);
        return $records;
    }
}

class record { //is the object

    public function __construct(Array $fieldNames = null, $values = null) { //object is instantiated, so this function is performed


        $record = array_combine($fieldNames, $values);

        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);    //$this is the rep of the object, in this case record. all props stored in $this

        }


    }

    public function returnArray() {

        $array = (array) $this;

        return $array;
    }

    public function createProperty($name = 'first', $value = 'bob') {

        $this->{$name} = $value;    //name is the property first

    }
}




class recordFactory { //what actually makes the object/how the object is made

    public static function create(Array $fieldNames = null, Array $values = null) { //declaring what you are passing in to avoid mismatch error


        $record = new record($fieldNames, $values);

        return $record;
    }

}




class html {

   // static public function generateTable($records) {

    //    $table = $records;

    //    return $table;

}

