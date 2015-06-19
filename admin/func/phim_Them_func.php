<meta charset="utf-8">
<?php
include 'Lib/connect.php';
//var_dump($_POST); die;
        if(isset($_POST['submit']) )
        {
            $film_id = $_POST['idFilm'];
            $cate_name = $_POST['nameCate'];
            $film_name = $_POST['nameFilm'];
            $film_title = $_POST['titleFilm'];
            $film_des = $_POST['desFilm'];
            $film_img = $_POST['imgFilm'];
            $film_link = $_POST['linkFilm'];
            $film_key = $_POST['keyFilm'];
            $film_num = $_POST['numFilm'];
            $film_time = $_POST['timeFilm'];
            $film_active = $_POST['active'];
            $film_act = $_POST['nameActor'];
            $film_coun = $_POST['nameCountry'];
            $film_date = $_POST['createDate'];
            $sql = "INSERT INTO film VALUES ('', '{$cate_name}', '{$film_name}', '{$film_title}', '{$film_des}', '{$film_img}', '{$film_link}', '{$film_key}', '{$film_num}'), '{$film_time}', '{$film_active}', '{$film_act}', '{$film_coun}', '{$film_date}')";
            
            if($result = $con->query($sql))
                    echo "<script>alert(\"Bạn đã thêm dữ liệu thành công\"); window.location.href=\"phim.php\"</script>";
            else 
                echo "<script>alert(\"Thêm dữ liệu bị lỗi" . mysqli_error ($con) . "\"); window.location.href=\"phim.php\"</script>";
        }
        
   
