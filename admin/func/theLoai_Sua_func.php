<meta charset="utf-8">
<?php
    include 'Lib/connect.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT idCate, nameCate, imgCate, titleCate, desCate, keyCate, link, target, createDate, active
        FROM filmCategory
        WHERE idCate = {$id}";
        if($result = $con->query($sql)){
            $row = $result->fetch_assoc();
        }else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='theLoai.php'</script>";
        }
        if(isset($_POST['submit'])){
           $cate_id = $_POST['idCate'];
            $cate_name = $_POST['nameCate'];
            $cate_img = $_POST['imgCate'];
            $cate_title = $_POST['titleCate'];
            $cate_des = $_POST['desCate'];
            $cate_key = $_POST['keyCate'];
            $cate_link = $_POST['link'];
            $cate_tar = $_POST['target'];
            $cate_active = $_POST['active'];
            $cate_create = $_POST['createDate'];
            $sql = "UPDATE filmCategory SET  nameCate = N'{$cate_name}', imgCate = '{$cate_img}', titleCate = '{$cate_title}', desCate = '{$cate_des}', keyCate = '{$cate_key}' , link = '{$cate_link}', target = '{$cate_tar}', active = '{$cate_active}', createDate = '{$cate_create}' WHERE idCate={$id}";
            if ($result = $con->query($sql)){
                 echo "<script>alert(\"Sửa dữ liệu thành công\"); location.href='theLoai.php'</script>";
            } else{
                 echo "<script>alert(\"Có lỗi khi sửa dữ liệu".  mysqli_error($con)."\"); location.href='theLoai.php'</script>";
            }
        }
    }
?>