<?php
require_once "config.php";
$strLista="";
$sql="SELECT szerelok.nev, javitasok.datum, javitasok.javido, javitasok.iranyar, autosok.rendszam from szerelok inner join javitasok on szerelok.szerelo_id=javitasok.szerelo_id 
inner join autosok on javitasok.autos_id=autosok.autos_id order by datum";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
        $strLista.="<tr><td>{$row["nev"]}</td><td>{$row["datum"]}</td><td>{$row["javido"]}"." óra"."</td><td>{$row["iranyar"]}"." Ft."."</td><td>{$row["rendszam"]}</td></tr>";
    }
?>

<h1>Javítások-összes</h1>

<table>
    <thead>
        <th>Szerelő neve</th>
        <th>Javítás dátuma</th> 
        <th>Javítási idő</th> 
        <th>Irányár</th> 
        <th>Rendszám</th> 
    </thead>

    <tbody>
        <?=$strLista?>
    </tbody>

</table>