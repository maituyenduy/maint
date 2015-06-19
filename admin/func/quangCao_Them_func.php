<meta charset="utf-8">
<?php
include 'Lib/connect.php';
//var_dump($_POST); die;
        if(isset($_POST['submit']) )
        {
            $adv_id = $_POST['idAdv'];
            $adv_name = $_POST['nameAdv'];
            $adv_img = $_POST['linkImg'];
            $adv_link = $_POST['linkAdv'];
            $adv_pos = $_POST['position'];
            $adv_tar = $_POST['target'];
            $adv_active = $_POST['active'];
            $sql = "INSERT INTO advertise VALUES ('', '{$adv_name}', '{$adv_img}', '{$adv_link}', '{$adv_pos}', '{$adv_tar}', '{$adv_active}')";
            
            if($result = $con->query($sql))
                    echo "<script>alert(\"Bạn đã thêm dữ liệu thành công\"); window.location.href=\"quangCao.php\"</script>";
            else 
                echo "<script>alert(\"Thêm dữ liệu bị lỗi" . mysqli_error ($con) . "\"); window.location.href=\"quangCao.php\"</script>";
        }
        
   
