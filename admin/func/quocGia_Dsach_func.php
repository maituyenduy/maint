<meta charset="utf-8">
<?php

include 'Lib/connect.php';
$sql = "SELECT idCountry, nameCountry
        FROM country ";
function Dsach_quocGia ($con, $sql){
    if($result = $con->query($sql)){
        $coun = array();
        $i =0;
        while ($row_fetch_assoc = $result->fetch_assoc()){
            $coun[$i]['idCountry'] = $row_fetch_assoc["idCountry"];
            $coun[$i]['nameCountry'] = $row_fetch_assoc["nameCountry"];
            $i ++;
        }
    }
    return $coun;
}
$coun = Dsach_quocGia($con, $sql);
?>



