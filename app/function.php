<?php

require_once "settings.php";


function dd($ar,$param = null){
       echo "<pre> Dump:"."<br>";
       print_r($ar);
       echo "</pre>";
       if($param!=null)exit();
}

function connect(){
    $params=get_param();
    $dsn="mysql:dbname=".$params["db_name"].";host=127.0.0.1";

    try{
        $link= new PDO($dsn,$params["login"],$params["password"]);
//        echo "success";
    }catch(PDOException $e){
//        echo "troubles";
    }

    return $link;
}


function check($login){
    $query="SELECT * from users WHERE name='".$login."'";
    $link=connect();
    $ar = $link->query($query)->fetchAll(2);
    return count($ar);
}