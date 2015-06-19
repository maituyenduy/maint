<meta charset="utf-8">
<?php
    include 'Lib/connect.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT idAdv, nameAdv, linkImg, linkAdv, target, active, position
        FROM advertise
        WHERE idAdv = {$id}";
        if($result = $con->query($sql)){
            $row = $result->fetch_assoc();
        }else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='quangCao.php'</script>";
        }
        if(isset($_POST['submit'])){
            $adv_id = $_POST['idAdv'];
            $adv_name = $_POST['nameAdv'];
            $adv_img = $_POST['linkImg'];
            $adv_link = $_POST['linkAdv'];
            $adv_pos = $_POST['position'];
            $adv_tar = $_POST['target'];
            $adv_active = $_POST['active'];
            $sql = "UPDATE advertise SET  nameAdv = N'{$adv_name}', linkImg = '{$adv_img}', linkAdv = '{$adv_link}', position = '{$adv_pos}', target = '{$adv_tar}', active = '{$adv_active}' WHERE idAdv={$id}";
            if ($result = $con->query($sql)){
                 echo "<script>alert(\"Sửa dữ liệu thành công\"); location.href='quangCao.php'</script>";
            } else{
                 echo "<script>alert(\"Có lỗi khi sửa dữ liệu".  mysqli_error($con)."\"); location.href='quangCao.php'</script>";
            }
        }
    }
?>