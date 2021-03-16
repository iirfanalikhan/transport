<?php 
    class final_admin
    {
        function connection()
        {
           $query = mysqli_connect('localhost','root','','transport_db');
           return $query; 
        }



        


    }
$obj = new final_admin();
$obj->connection();






?>