<?php
    require_once("config.php");
    $tipusList="";
    $autosList="";
    $kivalasztott="";
    $sql="SELECT tipusnev from tipusok";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $tipusList.="<option>{$tipusnev}</option>";
    }
    if(isset($_POST["gomb"])){
        $kivalasztott=$_POST["tipusok"];
        $sql="SELECT autosok.nev, autosok.rendszam from autosok inner join
        tipusok on autosok.tipuskod=tipusok.tipus_id where tipusok.tipusnev='{$kivalasztott}'";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $autosList.="<li>{$row["nev"]}"." - "."{$row["rendszam"]}</li>";
        }
    }
?>

<h1>Javított típusok</h1>

<form method="post">
    <select name="tipusok">
        <option value="0">Válassz egy autó típust</option>
        <?=$tipusList?>
    </select>

    <ol>
        <?=$autosList?>
    </ol>

    <input type="submit" value="Kilistáz" name="gomb">
</form>