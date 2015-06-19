<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Sửa Thể Loại -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="row-fluid">
            <?php include 'Lib/menu.php';
                include 'func/theLoai_Sua_func.php';?>
            <div id="main-content">
                <div class="container-fluid col-md-12 col-sm-6">
                    <form action="" method="post">
                        <input type="hidden" name="idActor" value="<?php echo isset($row['idActor']) ? $row['idActor'] : ""  ?>">
                    <table class="table table-bordered  table-hover" cellspacing="0" style="border-collapse: collapse;">
                                        <tr>
                                            <td>Tên thể loại: </td>
                                            <td>
                                                <input type="text" class="form-control" name="nameCate" value="<?php echo isset($row['nameCate']) ? $row['nameCate'] : ""  ?>" placeholder="Tên thể loại" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ảnh: </td>
                                            <td>
                                                <input type="text" class="form-control" name="imgCate" value="<?php echo isset($row['imgCate']) ? $row['imgCate'] : ""  ?>" placeholder="Ảnh" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiêu đề: </td>
                                            <td>
                                                <input type="text" class="form-control" name="titleCate" value="<?php echo isset($row['titleCate']) ? $row['titleCate'] : ""  ?>" placeholder="Tiêu đề" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mô tả: </td>
                                            <td>
                                                <input type="text" class="form-control" name="desCate" value="<?php echo isset($row['desCate']) ? $row['desCate'] : ""  ?>" placeholder="Mô tả" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Link: : </td>
                                            <td>
                                                <input type="text" class="form-control" name="link" value="<?php echo isset($row['link']) ? $row['link'] : ""  ?>" placeholder="Link" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ngày tạo: </td>
                                            <td>
                                                <input type="datetime" class="form-control" name="createDate" value="<?php echo isset($row['createDate']) ? $row['createDate'] : ""  ?>" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trạng thái: </td>
                                            <td>
                                                <input type="checkbox" name="active" value="<?php echo isset($row['active']) ? $row['active'] : ""  ?>"/>
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
