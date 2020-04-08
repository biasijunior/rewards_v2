<?php
class User extends Model
{
    private $db;
    public function __construct(){
        $this->db = $this->database() ;
    }

    public function hello(){
        echo "biasi<pre>";
        $query = "select * from affiliate_companies";

        $query = mysqli_query($this->db,$query);

        var_dump($query);
        // echo"<br>". $query;
       
    }
     
}