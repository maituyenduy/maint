<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Danh Sách Người Dùng -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include 'Lib/connect.php';
        include 'func/nguoiDung_Dsach_func.php';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $sql = "select member.*, access.nameAccess
                from member, access
                where member.idAccess = access.idAccess LIMIT {$limit} OFFSET {$offset}";
        $countSql = "SELECT COUNT(*) AS count FROM member ";
        $count = $con->query($countSql);
        if ($result = $con->query($countSql)) {
            while ($row_fetch_assoc = $result->fetch_assoc()) {
                $count = $row_fetch_assoc["count"];
            }
        }

        $numPage = ceil($count / $limit);
        $count = $con->query($countSql);
        if ($result = $con->query($sql)) {
            $mem = array();
            $i = 0;
            while ($row_fetch_assoc = $result->fetch_assoc()) {
                $mem[$i]['idMem'] = $row_fetch_assoc["idMem"];
                $mem[$i]['userName'] = $row_fetch_assoc["userName"];
                $mem[$i]['email'] = $row_fetch_assoc["email"];
                $mem[$i]['passWord'] = $row_fetch_assoc["passWord"];
                $mem[$i]['nameAccess'] = $row_fetch_assoc["nameAccess"];
                $i++;
            }
        } else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='nguoiDung.php'</script>";
        }
        if (isset($mem)):
            ?>
            <div id="container" class="row-fluid">
                <?php include 'Lib/menu.php'; ?>
                <div id="main-content">
                    <div class="container-fluid">
                        <div  class=" add btn btn-info">
                            <a href="#">Thêm mới</a>
                        </div>
                        <form action="" method="post">
                            <table class="table table-striped table-bordered dataTable table-hover" cellspacing="0" id="cph_Main_ctl00_ctl00_grvProducts" style="border-collapse: collapse;">
                                <tr>
                                    <th scope="col">
                                        <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                    </th>
                                    <th scope="col">Mã</th>
                                    <th scope="col">Tên đăng nhập</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mật khẩu</th>
                                    <th scope="col">Quyền</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                                <?php
                                $i = 1;
                                foreach ($mem as $value):
                                    ?>
                                    <tr>
                                        <td>
                                            <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />

                                        </td>
                                        <td><?php echo $value['idMem'] ?></td>
                                        <td><?php echo $value['userName'] ?></td>
                                        <td><?php echo $value['email'] ?></td>
                                        <td><?php echo $value['passWord'] ?></td>
                                        <td><?php echo $value['nameAccess'] ?></td>
                                        <td>
                                            <a style="text-decoration: none; color: #000;" href="nguoiDung_Sua.php.php?id=<?php echo $value['idMem'] ?>">Sửa</a> || 
                                            <a style="text-decoration: none; color: #000;" href="nguoiDung_Xoa.php.php?id=<?php echo $value['idMem'] ?>">Xóa</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                endforeach;
                                ?>
                            </table>
                            <!--Phân Trang-->
                            <div class="form col-lg-12">
                                <ul class="pager">  
                                    <?php if ($page == 1): ?>
                                        <li><a href="nguoiDung.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
                                        <?php if ($page < $numPage): ?>
                                            <li>
                                                <a href="nguoiDung.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <li><a href="nguoiDung.php?page=<?php echo $page - 1 ?>"> Trang trước </a></li>
                                        <li><a href="nguoiDung.php?page=<?php echo $page ?>"><?php echo $page ?></a> </li>  
                                        <?php if ($page < $numPage): ?><li><a href="nguoiDung.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a></li><?php endif; ?>
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
