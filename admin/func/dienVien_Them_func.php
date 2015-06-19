<meta charset="utf-8">
<?php
    include 'Lib/connect.php';
    if(isset($_POST['submit'])){
        $act_id = $_POST['idActor'];
        $act_name = $_POST['nameActor'];
        $act_img = $_POST['imgActor'];
        $act_date = $_POST['dateOfBirth'];
        $act_sex = $_POST['sex'];
        $act_info = $_POST['info'];
        
        $sql = "INSERT INTO actor VALUES ('', '{$act_name}', '{$act_img}', '{$act_date}', '{$act_sex}', '{$act_info}')";
        
        if($result = $con->query($sql))
                    echo "<script>alert(\"Bạn đã thêm dữ liệu thành công\"); window.location.href=\"dienVien.php\"</script>";
            else 
                echo "<script>alert(\"Thêm dữ liệu bị lỗi" . mysqli_error ($con) . "\"); window.location.href=\"dienVien.php\"</script>";
    }



