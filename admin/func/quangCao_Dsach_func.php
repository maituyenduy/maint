<meta charset="utf-8">
<?php

include 'Lib/connect.php';
$sql = "SELECT idAdv, nameAdv, linkImg, linkAdv, target, active
        FROM advertise ";
function Dsach_quangCao ($con, $sql){
    if($result = $con->query($sql)){
        $adv = array();
        $i =0;
        while ($row_fetch_assoc = $result->fetch_assoc()){
            $adv[$i]['idAdv'] = $row_fetch_assoc["idAdv"];
            $adv[$i]['nameAdv'] = $row_fetch_assoc["nameAdv"];
            $adv[$i]['linkAdv'] = $row_fetch_assoc["linkAdv"];
            $adv[$i]['target'] = $row_fetch_assoc["target"];
            $adv[$i]['active'] = $row_fetch_assoc["active"];
            $i ++;
        }
    }
    return $adv;
}
$adv = Dsach_quangCao($con, $sql);
?>



