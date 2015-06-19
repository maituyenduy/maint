<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Sửa Quốc Gia-:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="row-fluid">
            <div class="boder_menu">

                <div id="menu">
                    <ul>
                        <li>
                            <a class="TopMenuItem" href="javascript:;">
                                <span class="MenuText"><i class="icon-shopping-cart"></i>Thể Loại</span>
                            </a>
                            <ul>
                                <li class="SubFirst">
                                    <a href="theLoai.php">
                                        <span class="SubMenuText">Danh sách thể loại
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="TopMenuItem" href="javascript:;">
                                <span class="MenuText"><i class="icon-tags"></i>Phim</span>
                            </a>
                            <ul>
                                <li class="SubFirst">
                                    <a href="phim.php">
                                        <span class="SubMenuText">Danh sách Phim
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="TopMenuItem" href="javascript:;">
                                <span class="MenuText"><i class="icon-th-large"></i>Quảng cáo</span>
                            </a>
                            <ul>
                                <li class="SubFirst">
                                    <a href="quangCao.php">
                                        <span class="SubMenuText">Quản lý quảng cáo
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="TopMenuItem" href="javascript:;">
                                <span class="MenuText"><i class="icon-user"></i>Người dùng</span>
                            </a>
                            <ul>
                                <li class="SubFirst">
                                    <a href="nguoiDung.php">
                                        <span class="SubMenuText">Quản lý người dùng 
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="TopMenuItem" href="javascript:;">
                                <span class="MenuText"><i class="icon-globe"></i>Diễn viên</span>
                            </a>
                            <ul>
                                <li class="SubFirst">
                                    <a href="dienVien.php">
                                        <span class="SubMenuText">Danh sách diễn viên
                                        </span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li>
                            <a class="TopMenuItem" href="javascript:;">
                                <span class="MenuText"><i class="icon-signin"></i>Quốc gia</span>
                            </a>
                            <ul>
                                <li class="SubFirst">
                                    <a href="quocGia.php">
                                        <span class="SubMenuText">Danh sách quốc gia
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="TopMenuItem" href="javascript:;">
                                <span class="MenuText"><i class="icon-picture"></i>Giao diện</span>
                            </a>
                            <ul>
                                <li class="SubFirst">
                                    <a href="menu.php">
                                        <span class="SubMenuText">Quản lý Menu
                                        </span>
                                    </a>
                                </li>


                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <?php include 'func/quocGia_Sua_func.php'; ?>
            <div id="main-content">
                <div class="container-fluid col-md-12 col-sm-6">
                    <form action="" method="post">
                        <input type="hidden" name="idCountry" value="<?php echo isset($row['idCountry']) ? $row['idCountry'] : ""  ?>">
                    <table class="table table-bordered  table-hover" cellspacing="0" style="border-collapse: collapse;">
                                        <tr>
                                            <td>Tên quốc gia: </td>
                                            <td>
                                                <input type="text" class="form-control" name="nameCountry" placeholder="Tên quốc gia" style="height: 25px;" value="<?php echo isset($row['nameCountry']) ? $row['nameCountry'] : ""  ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="submit" name="submit" value="Sửa"/>
                                                <input type="reset" name="reset" value="Hủy">
                                            </td>
                                        </tr>
                    </table>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>
