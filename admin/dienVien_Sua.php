<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Thêm Mới Diễn Viên -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="lib/ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="row-fluid">
            <?php include 'Lib/menu.php'; ?>
            <?php include 'func/dienVien_Sua_func.php'; ?>
            <div id="main-content">
                <div class="container-fluid col-md-12 col-sm-6">
                    <form action="" method="post">
                        <input type="hidden" name="idActor" value="<?php echo isset($row['idActor']) ? $row['idActor'] : ""  ?>">
                    <table class="table table-bordered  table-hover" cellspacing="0" style="border-collapse: collapse;">
                                        <tr>
                                            <td>Tên diễn viên: </td>
                                            <td>
                                                <input type="text" class="form-control" name="nameActor" value="<?php echo isset($row['nameActor']) ? $row['nameActor'] : ""  ?>" placeholder="Tên diễn viên" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ảnh: </td>
                                            <td>
                                                <input type="text" class="form-control" name="imgActor" value="<?php echo isset($row['imgActor']) ? $row['imgActor'] : ""  ?>" placeholder="Ảnh" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ngày sinh: </td>
                                            <td>
                                                <input type="date" class="form-control" name="dateOfBirth" value="<?php echo isset($row['dateOfBirth']) ? $row['dateOfBirth'] : ""  ?>" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Giới tính: </td>
                                            <td>
                                                <input type="radio" name="sex" value="Nam">Nam &nbsp;&nbsp;
                                                <input type="radio" name="sex" value="Nữ">Nữ 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thông tin thêm : </td>
                                            <td>
                                                <!--<input type="text" id="info" class="form-control" name="info" placeholder="Thông tin" style="height: 25px;">-->
                                                <textarea id="info" name="info" value="<?php echo isset($row['info']) ? $row['info'] : ""  ?>"></textarea>
                                                <script type=”text/javascript”>CKEDITOR.replace( ‘info‘); </script>
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
