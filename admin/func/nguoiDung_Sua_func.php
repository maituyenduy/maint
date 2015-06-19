<?php

include 'Lib/connect.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT idMem, userName, email, pass, nameAccess
        FROM member AS m INNER JOIN access AS a WHERE m.idAccess = a.idAccess AND  idMem = {$id} ";
        if($result = $con->query($sql)){
            $row = $result->fetch_assoc();
        }else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='nguoiDung.php'</script>";
        }
        if(isset($_POST['submit'])){
            $mem_id = $_POST['idMem'];
            $mem_name = $_POST['userName'];
            $mem_email = $_POST['email'];
            $mem_pass = $_POST['pass'];
            $id_acc = $_POST['idAccess'];
            $sql = "UPDATE products SET  userName = '{$mem_name}', email = '{$mem_email}', pass = '{$mem_pass}', idAccess = '{$id_acc}' WHERE idMem={$id}";
            if ($result = $con->query($sql)){
                 echo "<script>alert(\"Sửa dữ liệu thành công\"); location.href='nguoiDung.php'</script>";
            } else{
                 echo "<script>alert(\"Có lỗi khi sửa dữ liệu".  mysqli_error($con)."\"); location.href='nguoiDung.php'</script>";
            }
        }
    }

