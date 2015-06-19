<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Danh Sách Menu -:-</title>
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
            <div id="main-content">
                <div class="container-fluid">
                    <div  class=" add btn btn-info">
                        <a href="menu_Them.php">Thêm mới</a>
                    </div>
                    <table class="table table-striped table-bordered dataTable table-hover" cellspacing="0" id="cph_Main_ctl00_ctl00_grvProducts" style="border-collapse: collapse;">
                                        <tr>
                                            <th scope="col">
                                                <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                            </th>
                                            <th scope="col">Mã</th>
                                            <th scope="col">Tên menu</th>
                                            <th scope="col">Thứ tự</th>
                                            <th scope="col">Liên kết</th>
                                            <th scope="col">Target</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Thao tác</th>
                                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
