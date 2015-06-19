<meta charset="utf-8">
<?php
include 'Lib/connect.php';
//var_dump($_POST); die;
        if(isset($_POST['submit']) )
        {
            $coun_id = $_POST['idCountry'];
            $coun_name = $_POST['nameCountry'];
            $sql = "INSERT INTO country VALUES ('', N'{$coun_name}')";
            
            if($result = $con->query($sql))
                    echo "<script>alert(\"Bạn đã thêm dữ liệu thành công\"); window.location.href=\"quocGia.php\"</script>";
            else 
                echo "<script>alert(\"Thêm dữ liệu bị lỗi" . mysqli_error ($con) . "\"); window.location.href=\"quocGia.php\"</script>";
        }
        
   
