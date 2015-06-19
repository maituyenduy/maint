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
                    <form action="theLoai_Them.php" method="post">
                    <table class="table table-bordered  table-hover" cellspacing="0" style="border-collapse: collapse;">
                                        <tr>
                                            <td>Tên thể loại: </td>
                                            <td>
                                                <input type="text" class="form-control" name="nameCate" placeholder="Tên thể loại" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ảnh: </td>
                                            <td>
                                                <input type="text" class="form-control" name="imgCate" placeholder="Ảnh" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiêu đề: </td>
                                            <td>
                                                <input type="text" class="form-control" name="titleCate" placeholder="Tiêu đề" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mô tả: </td>
                                            <td>
                                                <input type="text" class="form-control" name="desCate" placeholder="Mô tả" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Link: </td>
                                            <td>
                                                <input type="text" class="form-control" name="link" placeholder="Link" style="height: 25px;">
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
                                                <input type="checkbox" name="active" />
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
                        <?php include 'func/theLoai_Them_func.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
