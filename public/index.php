<?php
require_once "../app/function.php";

$login=$_POST['log'];
$pas=$_POST['pas'];

$link=connect();
dd($link);
//$query="SELECT * from users WHERE name='".$login."'and password='".$pas."'";
$query="SELECT * from users WHERE name='".$login."'";

$ar = $link->query($query)->fetchAll(2);

if (count($ar)) {
    $query="SELECT * from users WHERE name='".$login."'and password='".$pas."'";dd($ar,23);
    $ar = $link->query($querry)->fetchAll(2);
    if($ar) echo "<script> window.location='CHAT.php'; </script>";else
        echo "<script> window.location='login.php?er=1';</script>";
}
 else
{
    $query="INSERT INTO users (`id`, `name`, `password`, `active`) VALUES (NULL,'".$login."','".$pas."',NULL);";
    $link->query($query);
    echo "<script> window.location='CHAT.php';</script>";
}
?>
INSERT INTO `users` (`id`, `name`, `password`, `active`) VALUES (NULL, 'user3', 'pas3', NULL);
qqqqqqqqqqqqq
//
//foreach ($ar as $item)
//{
//    dd($item);
//}



//
//
//
//
//
//$a=$_REQUEST['a'];
//$b=$_REQUEST['b'];
//$logins=[
//    [1,11],
//[2,22],
//[3,33]
//];
//$flag=1;
//for($i=0;$i<=2;$i++)
//{
//    if($logins[$i][0]==$a&&$logins[$i][1]==$b){echo("YES");$flag=0;break;}
//}
//if($flag==1)echo("NO");
//echo ($a+$b);