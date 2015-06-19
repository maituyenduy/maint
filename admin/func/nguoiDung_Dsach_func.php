<meta charset="utf-8">
<?php
include 'Lib/connect.php';
$sql = "select member.*, access.nameAccess
                from member, access
                where member.idAccess = access.idAccess ";

function Dsach_nguoiDung($con, $sql) {
    if ($result = $con->query($sql)) {
        $mem = array();
        $i = 0;
        while ($row_fetch_assoc = $result->fetch_assoc()) {
            $mem[$i]['idMem'] = $row_fetch_assoc["idMem"];
            $mem[$i]['userName'] = $row_fetch_assoc["userName"];
            $mem[$i]['email'] = $row_fetch_assoc["email"];
            $mem[$i]['passWord'] = $row_fetch_assoc["passWord"];
            $mem[$i]['nameAccess'] = $row_fetch_assoc["nameAccess"];
            $i ++;
        }
    }
    return $mem;
}

$mem = Dsach_nguoiDung($con, $sql);
?>



