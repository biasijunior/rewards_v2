<?php

class Model
{
   
    private $enviroment = 3;

    public function database() 
    {

        switch ($this->enviroment) {
            case 1:
                
                //PRODUCTION


                break;
            case 2:

                //TEST SERVER
                $servername = "testdczambia.crwpdwfieesc.eu-west-1.rds.amazonaws.com";
                $username = "dotcom_lars";
                $password = "f1eRTall1";
                $database = "dotcomrewards";

                break;
            case 3:

                //LOCAL
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "dotcomrewards";
                break;
        }

        // new mysqli($servername, $username, $password, $database)
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

        return $conn ;
    }
}

/*
*when wish to use illuminate Database 
*run composer require illuminate/database on root folder(./app) in this case
 use Illuminate\Database\Capsule\Manager as Capsule;
 $capsule = new Capsule();
 $capsule->addConnection([
     'drive' => 'mysqli',
     'host' => 'localhost',
     'username' => 'root',
     'database' => 'rewards',
     'charset' => 'utf8',
     'collation' => 'utf8_unicode_ci',
     'prefix' => ''
 ]);
 $capsule->bootEloquent();
*/