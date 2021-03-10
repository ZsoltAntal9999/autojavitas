<?php
    require_once "config.php";
    $szereloList="";
    $sql="SELECT szerelok.nev, sum(javitasok.javido) as 'ossz_javitasi_ido' from szerelok inner join javitasok on szerelok.szerelo_id=javitasok.szerelo_id GROUP by nev order BY sum(javitasok.javido) DESC";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        $szereloList.="<li>{$row["nev"]}"." - "."{$row["ossz_javitasi_ido"]}</li>";
    }
?>
<h1>Javítási idők:</h1>

<ul>
    <?=$szereloList?>
</ul>