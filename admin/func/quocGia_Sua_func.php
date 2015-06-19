<meta charset="utf-8">
<?php
    include 'Lib/connect.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT idCountry, nameCountry
        FROM country
        WHERE idCountry = {$id}";
        if($result = $con->query($sql)){
            $row = $result->fetch_assoc();
        }else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='quocGia.php'</script>";
        }
        if(isset($_POST['submit'])){
            $coun_id = $_POST['idCountry'];
            $coun_name = $_POST['nameCountry'];
            $sql = "UPDATE country SET  nameCountry = N'{$coun_name}' WHERE idCountry={$id}";
            if ($result = $con->query($sql)){
                 echo "<script>alert(\"Sửa dữ liệu thành công\"); location.href='quocGia.php'</script>";
            } else{
                 echo "<script>alert(\"Có lỗi khi sửa dữ liệu".  mysqli_error($con)."\"); location.href='quocGia.php'</script>";
            }
        }
    }
?>