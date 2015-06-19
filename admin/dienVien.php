<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Danh Sách Diễn Viên -:-</title>
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
        $sql = "SELECT idActor, nameActor, imgActor, dateOfBirth, sex, info FROM actor LIMIT {$limit} OFFSET {$offset}";
        $countSql = "SELECT COUNT(*) AS count FROM actor ";
        $count = $con->query($countSql);
        if ($result = $con->query($countSql)) {
            while ($row_fetch_assoc = $result->fetch_assoc()) {
                $count = $row_fetch_assoc["count"];
            }
        }

        $numPage = ceil($count / $limit);
        $count = $con->query($countSql);
        if ($result = $con->query($sql)) {
            $act = array();
            $i = 0;
            while ($row_fetch_assoc = $result->fetch_assoc()) {
                $act[$i]['idActor'] = $row_fetch_assoc["idActor"];
                $act[$i]['nameActor'] = $row_fetch_assoc["nameActor"];
                $act[$i]['imgActor'] = $row_fetch_assoc["imgActor"];
                $act[$i]['dateOfBirth'] = $row_fetch_assoc["dateOfBirth"];
                $act[$i]['sex'] = $row_fetch_assoc["sex"];
                $act[$i]['info'] = $row_fetch_assoc["info"];
                $i++;
            }
        } else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='dienVien.php'</script>";
        }
        if (isset($act)):
            ?>
            <div id="container" class="row-fluid">
                <?php include 'Lib/menu.php'; ?>
                <div id="main-content">
                    <div class="container-fluid col-md-12 col-sm-6">
                        <div  class=" add btn btn-info">
                            <a href="dienVien_Them.php">Thêm mới</a>
                        </div>
                        <form action="" method="post">
                            <table class="table table-striped table-bordered dataTable table-hover" cellspacing="0" id="cph_Main_ctl00_ctl00_grvProducts" style="border-collapse: collapse;">
                                <tr>
                                    <th scope="col">
                                        <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                    </th>
                                    <th scope="col">Mã</th>
                                    <th scope="col">Tên diễn viên</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Thông tin thêm</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                                <?php
                                $i = 1;
                                foreach ($act as $value):
                                    ?>
                                    <tr>
                                        <td>
                                            <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                        </td>
                                        <td><?php echo $value['idActor'] ?></td>
                                        <td><?php echo $value['nameActor'] ?></td>
                                        <td><?php echo $value['imgActor'] ?></td>
                                        <td><?php echo $value['dateOfBirth'] ?></td>
                                        <td><?php echo $value['sex'] ?></td>
                                        <td><?php echo $value['info'] ?></td>
                                        <td>
                                            <a style="text-decoration: none; color: #000;" href="dienVien_Sua.php?id=<?php echo $value['idActor'] ?>">Sửa</a> || 
                                            <a style="text-decoration: none; color: #000;" href="dienVien_Xoa.php?id=<?php echo $value['idActor'] ?>">Xóa</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i ++;
                                endforeach;
                                ?>
                            </table>
                            <!--Phân Trang-->
                            <div class="form col-lg-12">
                                <ul class="pager">  
                                    <?php if ($page == 1): ?>
                                        <li><a href="dienVien.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
                                        <?php if ($page < $numPage): ?>
                                            <li>
                                                <a href="dienVien.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <li><a href="dienVien.php?page=<?php echo $page - 1 ?>"> Trang trước </a></li>
                                        <li><a href="dienVien.php?page=<?php echo $page ?>"><?php echo $page ?></a> </li>  
                                        <?php if ($page < $numPage): ?><li><a href="dienVien.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a></li><?php endif; ?>
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
