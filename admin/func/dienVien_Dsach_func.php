<meta charset="utf-8">
<?php
include 'Lib/connect.php';
$sql = "SELECT idActor, nameActor, imgActor, dateOfBirth, sex, info
        FROM actor ";

function Dsach_dienVien($con, $sql) {
    if ($result = $con->query($sql)) {
        $act = array();
        $i = 0;
        while ($row_fetch_assoc = $result->fetch_assoc()) {
            $act[$i]['idActor'] = $row_fetch_assoc["idActor"];
            $act[$i]['nameActor'] = $row_fetch_assoc["nameActor"];
            $act[$i]['imgActor'] = $row_fetch_assoc["imgActor"];
            $act[$i]['dateOfBirth'] = $row_fetch_assoc["dateOfBirth"];
            $act[$i]['sex'] = $row_fetch_assoc["sex"];
            $act[$i]['info'] = $row_fetch_assoc["info"];
            $i ++;
        }
    }
    return $act;
}

$act = Dsach_dienVien($con, $sql);
?>



