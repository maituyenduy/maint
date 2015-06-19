<meta charset="utf-8">
<?php
include 'Lib/connect.php';
//var_dump($_POST); die;
        if(isset($_POST['submit']) )
        {
            $mem_id = $_POST['idMem'];
            $mem_name = $_POST['userName'];
            $mem_email = $_POST['email'];
            $mem_pass = $_POST['pass'];
            $id_acc = $_POST['idAccess'];
            $sql = "INSERT INTO member VALUES ('', '{$mem_name}', '{$mem_email}', '{$mem_pass}', '{$id_acc}'";
            
            if($result = $con->query($sql))
                    echo "<script>alert(\"Bạn đã thêm dữ liệu thành công\"); window.location.href=\"nguoiDung.php\"</script>";
            else 
                echo "<script>alert(\"Thêm dữ liệu bị lỗi" . mysqli_error ($con) . "\"); window.location.href=\"nguoiDung.php\"</script>";
        }
        
   
