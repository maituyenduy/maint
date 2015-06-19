<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Thêm Mới Quảng Cáo -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="row-fluid">
            
            <?php 
            include 'Lib/menu.php';
            include 'func/quangCao_Sua_func.php'; ?>
            <div id="main-content">
                <div class="container-fluid col-md-12 col-sm-6">
                    <form action="" method="post">
                        <input type="hidden" name="idAdv" value="<?php echo isset($row['idAdv']) ? $row['idAdv'] : ""  ?>">
                    <table class="table table-bordered  table-hover" cellspacing="0" style="border-collapse: collapse;">
                                        <tr>
                                            <td>Tên quảng cáo: </td>
                                            <td>
                                                <input type="text" class="form-control" name="nameAdv" value="<?php echo isset($row['nameAdv']) ? $row['nameAdv'] : ""  ?>" placeholder="Tên quảng cáo" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ảnh: </td>
                                            <td>
                                                <input type="text" class="form-control" name="linkImg" placeholder="Ảnh" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Link:</td>
                                            <td>
                                                <input type="text" class="form-control" name="linkAdv" value="<?php echo isset($row['linkAdv']) ? $row['linkAdv'] : ""  ?>" placeholder="Link" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vị trí: </td>
                                            <td>
                                                <input type="text" class="form-control" name="position" value="<?php echo isset($row['nameAdv']) ? $row['nameAdv'] : ""  ?>" placeholder="vị trí" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Target</td>
                                            <td>
                                                <input type="text" name="target" value="<?php echo isset($row['target']) ? $row['target'] : ""  ?>" class="form-control" style="height: 25px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trạng thái: </td>
                                            <td>
                                                <input type="checkbox" value="<?php echo isset($row['active']) ? $row['active'] : ""  ?>" name="active" />
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
