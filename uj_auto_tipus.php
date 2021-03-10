<?php
$uzenet="";
require_once "config.php";

if(isset($_POST["gomb"])){
    extract($_POST);
    $sql="INSERT INTO tipusok values(null,'{$tipusnev}')";
    $stmt=$db->exec($sql);

if($stmt){
    $uzenet="Sikeres adatbeírás.";
}
else{ 
    $uzenet="Nem sikerült az adatbeírás!";
}
}
?>

<form method="post">
    <label>Új autó: </label> <input type="text" name="tipusnev">
    <br>
    <input type="submit" value="Beír" name="gomb">
</form>

<div>
    <?=$uzenet?>
</div>