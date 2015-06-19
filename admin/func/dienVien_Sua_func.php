<meta charset="utf-8">
<?php
    include 'Lib/connect.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT idActor, nameActor, imgActor, dateOfBirth, sex, info
        FROM actor
        WHERE idActor = {$id}";
        if($result = $con->query($sql)){
            $row = $result->fetch_assoc();
        }else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='dienVien.php'</script>";
        }
        if(isset($_POST['submit'])){
            $act_id = $_POST['idActor'];
            $act_name = $_POST['nameActor'];
            $act_img = $_POST['imgActor'];
            $act_date = $_POST['dateOfBirth'];
            $act_sex = $_POST['sex'];
            $act_info = $_POST['info'];
            $sql = "UPDATE actor SET  nameActor = N'{$act_name}', imgActor = '{$act_img}', dateOfBirth = '{$act_date}', sex = '{$act_sex}', info = '{$act_info}' WHERE idActor={$id}";
            if ($result = $con->query($sql)){
                 echo "<script>alert(\"Sửa dữ liệu thành công\"); location.href='dienVien.php'</script>";
            } else{
                 echo "<script>alert(\"Có lỗi khi sửa dữ liệu".  mysqli_error($con)."\"); location.href='dienVien.php'</script>";
            }
        }
    }
?>