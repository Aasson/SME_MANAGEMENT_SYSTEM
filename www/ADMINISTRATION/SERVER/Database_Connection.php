<?php
    define('Host' , 'localhost') ;
    define('Database_Name' , 'sme_management_system_database') ;
    define('User' , 'root') ;
    define('Password' , '') ;
    try{
        $SME_Management_System_Database = new PDO('mysql:host=' . Host . ';dbname=' . Database_Name , User , Password) ;
        $SME_Management_System_Database->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ;
        //echo "The Database is connected ! :)" ;
    }catch(PDOException $Connection_Error){
        echo $Connection_Error ;
    }
?>