<meta charset="utf-8">
<?php
include 'Lib/connect.php';
$sql = "SELECT idCate, nameCate, imgCate, titleCate, desCate, keyCate, link, target, createDate, active
        FROM filmCategory ";

function Dsach_theLoai($con, $sql) {
    if ($result = $con->query($sql)) {
        $cate = array();
        $i = 0;
        while ($row_fetch_assoc = $result->fetch_assoc()) {
            $cate[$i]['idCate'] = $row_fetch_assoc["idCate"];
            $cate[$i]['nameCate'] = $row_fetch_assoc["nameCate"];
            $cate[$i]['imgCate'] = $row_fetch_assoc["imgCate"];
            $cate[$i]['titleCate'] = $row_fetch_assoc["titleCate"];
            $cate[$i]['desCate'] = $row_fetch_assoc["desCate"];
            $cate[$i]['keyCate'] = $row_fetch_assoc["keyCate"];
            $cate[$i]['link'] = $row_fetch_assoc["link"];
            $cate[$i]['target'] = $row_fetch_assoc["target"];
            $cate[$i]['createDate'] = $row_fetch_assoc["createDate"];
            $cate[$i]['active'] = $row_fetch_assoc["active"];
            $i ++;
        }
    }
    return $cate;
}

$cate = Dsach_theLoai($con, $sql);
?>





