<?php
   // define("PDO_HOST", "sql112.epizy.com");
   // define("PDO_DBBASE", "epiz_29739588_autobonplan");
   // define("PDO_USER", "epiz_29739588");
   // define("PDO_PW", "QdADoVwcIt");

   define("PDO_HOST", "sql112.epizy.com");
   define("PDO_DBBASE", "epiz_29739588_autobonplan");
   define("PDO_USER", "epiz_29739588");
   define("PDO_PW", "QdADoVwcIt");
 
 try{
   $connection = new PDO(
   "mysql:host=" . PDO_HOST . ";".
   "dbname=" . PDO_DBBASE, PDO_USER, PDO_PW,
   array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
}
 catch (PDOException $e){
   print "Erreur !: " . $e->getMessage() . "<br/>";
   die();
}
?>