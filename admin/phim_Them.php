<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Thêm Mới Thể Loại -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="row-fluid">
            <?php include 'Lib/menu.php';?>
            <div id="main-content">
                <div class="container-fluid col-md-12 col-sm-6">
                    <form action="phim_Them.php" method="post">
                    <table class="table table-bordered  table-hover" cellspacing="0" style="border-collapse: collapse;">
                        <tr>
                            <td>Thể loại: </td>
                            <td>
                                <select>
                                    <option value="1">-----</option>
                                    <?php
                                    include 'Lib/Connect.php';
                                    $sql_film = "SELECT nameCate FROM filmCategory ";
                                    $re = $con->query($sql_film);
                                    while ($array = $re->fetch_assoc()) {
                                        $cate_name = $array["nameCate"];
                                        echo "<option value='$cate_name'>$cate_name</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tên phim: </td>
                            <td>
                                <input type="text" class="form-control" name="nameFilm" placeholder="Tên phim" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiêu đề: </td>
                            <td>
                                <input type="text" class="form-control" name="titleFilm" placeholder="Tiêu đề" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Mô tả: </td>
                            <td>
                                <input type="text" class="form-control" name="desFilm" aceholder="Mô tả" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Ảnh: </td>
                            <td>
                                <input type="text" class="form-control" name="imgFilm" placeholder="Ảnh" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Link: </td>
                            <td>
                                <input type="text" class="form-control" name="linkFilm" placeholder="Link" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Từ khóa: </td>
                            <td>
                                <input type="text" class="form-control" name="keyFilm" placeholder="Từ khóa" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Số tập: </td>
                            <td>
                                <input type="text" class="form-control" name="numFilm" placeholder="Số tập" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Thời lượng(phút): </td>
                            <td>
                                <input type="text" class="form-control" name="timeFilm" placeholder="Thời lượng" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Diễn viên: </td>
                            <td>
                                <select>
                                    <option value="1">-----</option>
                                    <?php
                                    include 'Lib/Connect.php';
                                    $sql = "SELECT nameActor FROM Actor ";
                                    $re = $con->query($sql);
                                    while ($array = $re->fetch_assoc()) {
                                        $act_name = $array["nameActor"];
                                        echo "<option value='$act_name'>$act_name</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Quốc gia </td>
                            <td>
                                <select>
                                    <option value="1">-----</option>
                                    <?php
                                    include 'Lib/Connect.php';
                                    $sql_coun = "SELECT nameCountry FROM Country ";
                                    $re = $con->query($sql_coun);
                                    while ($array = $re->fetch_assoc()) {
                                        $coun_name = $array["nameCountry"];
                                        echo "<option value='$coun_name'>$coun_name</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Ngày tạo: </td>
                            <td>
                                <input type="datetime" name="createDate" class="form-control"  style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Trạng thái: </td>
                            <td>
                                <input type="checkbox" name="active"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Thêm"/>
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php include 'func/phim_Them_func.php';?>
                </div>
            </div>
        </div>
    </body>
</html>
