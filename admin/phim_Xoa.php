<meta charset="utf8">
<?php
    include 'Lib/connect.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM film WHERE idFilm={$id}";
        if($result = $con->query($sql))
        {
            echo "<script>alert(\"Xóa thành công!\"); window.location.href=\"phim.php\"</script>";
        }
        else {
            echo "<script>alert(\"Xóa bị lỗi!" . mysqli_error($con) ."\"); window.location.href=\"phim.php\"</script>";
        }
    }
    else{
        echo "<script>alert(\"Bản ghi không tồn tại\"); window.location.href=\"phim.php\"</script>";
    }
?>