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
            <?php include 'Lib/menu.php';
                  include 'func/phim_Sua_func.php';?>
            <div id="main-content">
                <div class="container-fluid col-md-12 col-sm-6">
                    <form action="" method="post">
                        <input type="hidden" name="idFilm" value="<?php echo isset($row['idFilm']) ? $row['idFilm'] : "" ?>">
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
                                <input type="text" class="form-control" name="nameFilm" value="<?php echo isset($row['nameFilm']) ? $row['nameFilm'] : "" ?>" placeholder="Tên phim" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiêu đề: </td>
                            <td>
                                <input type="text" class="form-control" name="titleFilm" value="<?php echo isset($row['titleFilm']) ? $row['titleFilm'] : "" ?>" placeholder="Tiêu đề" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Mô tả: </td>
                            <td>
                                <input type="text" class="form-control" name="desFilm" value="<?php echo isset($row['desFilm']) ? $row['desFilm'] : "" ?>" aceholder="Mô tả" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Ảnh: </td>
                            <td>
                                <input type="text" class="form-control" name="imgFilm" value="<?php echo isset($row['imgFilm']) ? $row['imgFilm'] : "" ?>" placeholder="Ảnh" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Link: </td>
                            <td>
                                <input type="text" class="form-control" name="linkFilm" value="<?php echo isset($row['linkFilm']) ? $row['linkFilm'] : "" ?>" placeholder="Link" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Từ khóa: </td>
                            <td>
                                <input type="text" class="form-control" name="keyFilm" value="<?php echo isset($row['keyFilm']) ? $row['keyFilm'] : "" ?>" placeholder="Từ khóa" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Số tập: </td>
                            <td>
                                <input type="text" class="form-control" name="numFilm" value="<?php echo isset($row['numFilm']) ? $row['numFilm'] : "" ?>" placeholder="Số tập" style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Thời lượng(phút): </td>
                            <td>
                                <input type="text" class="form-control" name="timeFilm" value="<?php echo isset($row['timeFilm']) ? $row['timeFilm'] : "" ?>" placeholder="Thời lượng" style="height: 25px;">
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
                                <input type="datetime" name="createDate" value="<?php echo isset($row['createDate']) ? $row['createDate'] : "" ?>" class="form-control"  style="height: 25px;">
                            </td>
                        </tr>
                        <tr>
                            <td>Trạng thái: </td>
                            <td>
                                <input type="checkbox" name="active" value="<?php echo isset($row['active']) ? $row['active'] : "" ?>"/>
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
