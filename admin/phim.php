<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Danh Sách Phim -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include 'Lib/connect.php';
        include 'func/dienVien_Dsach_func.php';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $sql = "select filmCategory.nameCate, actor.nameActor, country.nameCountry, film.*
                from filmCategory, actor, country, film
                where filmCategory.idCate = film.idcate and actor.idActor =  film.idActor and country.idCountry = film.idCountry
        LIMIT {$limit} OFFSET {$offset}";
        $countSql = "SELECT COUNT(*) AS count FROM film ";
        $count = $con->query($countSql);
        if ($result = $con->query($countSql)) {
            while ($row_fetch_assoc = $result->fetch_assoc()) {
                $count = $row_fetch_assoc["count"];
            }
        }

        $numPage = ceil($count / $limit);
        $count = $con->query($countSql);
        if ($result = $con->query($sql)) {
            $film = array();
            $i = 0;
            while ($row_fetch_assoc = $result->fetch_assoc()) {
                $film[$i]['idFilm'] = $row_fetch_assoc["idFilm"];
                $film[$i]['nameFilm'] = $row_fetch_assoc["nameFilm"];
                $film[$i]['nameCate'] = $row_fetch_assoc["nameCate"];
                $film[$i]['titleFilm'] = $row_fetch_assoc["titleFilm"];
                $film[$i]['desFilm'] = $row_fetch_assoc["desFilm"];
                $film[$i]['imgFilm'] = $row_fetch_assoc["imgFilm"];
                $film[$i]['linkFilm'] = $row_fetch_assoc["linkFilm"];
                $film[$i]['keyFilm'] = $row_fetch_assoc["keyFilm"];
                $film[$i]['numFilm'] = $row_fetch_assoc["numFilm"];
                $film[$i]['timeFilm'] = $row_fetch_assoc["timeFilm"];
                $film[$i]['active'] = $row_fetch_assoc["active"];
                $film[$i]['nameActor'] = $row_fetch_assoc["nameActor"];
                $film[$i]['nameCountry'] = $row_fetch_assoc["nameCountry"];
                $film[$i]['craeteDate'] = $row_fetch_assoc["craeteDate"];
                $i++;
            }
        } else {
            echo "<script>alert(\"Có lỗi khi select 1\"); location.href='phim.php'</script>";
        }
        if (isset($film)):
            ?>
            <div id="container" class="row-fluid">
                <?php include 'Lib/menu.php'; ?>
                <div id="main-content">
                    <div class="container-fluid col-md-12 col-sm-6">
                        <div  class=" add btn btn-info">
                            <a href="phim_Them.php">Thêm mới</a>
                        </div>
                        <form action="" method="post">
                            <table class="table table-striped table-bordered dataTable table-hover" cellspacing="0" id="cph_Main_ctl00_ctl00_grvProducts" style="border-collapse: collapse;">
                                <tr>
                                    <th scope="col">
                                        <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                    </th>
                                    <th scope="col">Mã</th>
                                    <th scope="col">Thể loại</th>
                                    <th scope="col">Tên phim</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                                <?php
                                $i = 1;
                                foreach ($film as $value):
                                    ?>
                                    <td>
                                        <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                    </td>
                                    <td><?php echo $value['idFilm'] ?></td>
                                    <td><?php echo $value['nameCate'] ?></td>
                                    <td><?php echo $value['nameFilm'] ?></td>
                                    <td><?php echo $value['imgFilm'] ?></td>
                                    <td><?php echo $value['linkFilm'] ?></td>
                                    <td><?php echo $value['desFilm'] ?></td>
                                    <td><?php echo $value['active'] ?></td>
                                    <?php
                                    $i++;
                                endforeach;
                                ?>
                            </table>
                            <!--Phân Trang-->
                            <div class="form col-lg-12">
                                <ul class="pager">  
                                    <?php if ($page == 1): ?>
                                        <li><a href="phim.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
                                        <?php if ($page < $numPage): ?>
                                            <li>
                                                <a href="phim.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <li><a href="phim.php?page=<?php echo $page - 1 ?>"> Trang trước </a></li>
                                        <li><a href="phim.php?page=<?php echo $page ?>"><?php echo $page ?></a> </li>  
                                        <?php if ($page < $numPage): ?><li><a href="phim.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a></li><?php endif; ?>
                                    <?php endif; ?>
                                </ul>  
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
