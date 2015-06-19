<meta charset="utf-8">
<?php
include 'Lib/connect.php';
//var_dump($_POST); die;
        if(isset($_POST['submit']) )
        {
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
            $sql = "INSERT INTO filmCategory VALUES ('', '{$cate_name}', '{$cate_img}', '{$cate_title}', '{$cate_des}', '{$cate_key}', '{$cate_link}', '{$cate_tar}', '{$cate_active}', '{$cate_create}')";
            
            if($result = $con->query($sql))
                    echo "<script>alert(\"Bạn đã thêm dữ liệu thành công\"); window.location.href=\"theLoai.php\"</script>";
            else 
                echo "<script>alert(\"Thêm dữ liệu bị lỗi" . mysqli_error ($con) . "\"); window.location.href=\"theLoai.php\"</script>";
        }
        
   
