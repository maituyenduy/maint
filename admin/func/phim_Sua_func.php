<?php

include 'Lib/connect.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT idFilm, nameCate, nameFilm, titleFilm, desFilm, imgFilm, linkFilm, keyFilm, numFilm, timeFilm
        active, nameActor, nameCountry, createDate
        FROM film AS f INNER JOIN filmCategory AS fc 
             AND film AS f INNER JOIN actor AS a
             AND film AS f INNER JOIN country AS c
        WHERE f.idCate = fc.idCate AND f.idActor = a.idActor AND f.idCountry = c.idCountry AND  idFilm = {$id} ";
        if($result = $con->query($sql)){
            $row = $result->fetch_assoc();
        }else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='phim.php'</script>";
        }
        if(isset($_POST['submit'])){
            $film_id = $_POST['idFilm'];
            $cate_name = $_POST['idCate'];
            $film_name = $_POST['nameFilm'];
            $film_title = $_POST['titleFilm'];
            $film_des = $_POST['desFilm'];
            $film_img = $_POST['imgFilm'];
            $film_link = $_POST['linkFilm'];
            $film_key = $_POST['keyFilm'];
            $film_num = $_POST['numFilm'];
            $film_time = $_POST['timeFilm'];
            $film_active = $_POST['active'];
            $film_act = $_POST['idActor'];
            $film_coun = $_POST['idCountry'];
            $film_date = $_POST['createDate'];
            $sql = "UPDATE film SET  idCate = '{$cate_name}',titleFilm = '{$film_name}', desFilm = '{$film_title}', desFilm = '{$film_des}',imgFilm = '{$film_img}', linkFilm = '{$film_link}', keyFilm = '{$film_key}', numFilm = '{$film_num}'), timeFilm = '{$film_time}', active = '{$film_active}', idActor = '{$film_act}',idCountry = '{$film_coun}', createDtae = '{$film_date}' WHERE idFilm ={$id})";
            
            if ($result = $con->query($sql)){
                 echo "<script>alert(\"Sửa dữ liệu thành công\"); location.href='phim.php'</script>";
            } else{
                 echo "<script>alert(\"Có lỗi khi sửa dữ liệu".  mysqli_error($con)."\"); location.href='phim.php'</script>";
            }
        }
    }

