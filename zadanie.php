<?php include_once('polaczenie.php');?>
<html>
<head>
    <meta charset="utf-8">
    <title>tak</title>
</head>
<body>
<style>
table,tr,td{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
}
</style>
    <div style="width:500px;margin:auto">
    <hr>
        <table>
        <tr>
            <td>
            ids
            </td>
            <td>
            marka
            </td>
            <td>
            silnik
            </td>
        </tr>
        <?php
            $zap = $polaczenie->query("SELECT ids,marka,silnik from samochody");
            while($wiersz = $zap->fetch_assoc()){
            echo("<tr><td>".$wiersz['ids']."</td><td>".$wiersz['marka']."</td><td>".$wiersz['silnik']."</td></tr>");
            }
        ?>
        </table>
            <hr>
    </div>
    <div style="width:500px;margin:auto">
    <hr>
        <table>
        <tr>
            <td>
            idk
            </td>
            <td>
            marka
            </td>
            <td>
            nazwa
            </td>
        </tr>
        <?php
            $zap = $polaczenie->query("SELECT idk,marka,nazwa from komputery");
            while($wiersz = $zap->fetch_assoc()){
                echo("<tr><td>".$wiersz['idk']."</td><td>".$wiersz['marka']."</td><td>".$wiersz['nazwa']."</td></tr>");
            }
        ?>
        </table>
            <hr>
    </div>
</body>

</html>