<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Thêm Mới Người Dùng -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="row-fluid">
            <?php include 'Lib/menu.php'; ?>
            <div id="main-content">
                <div class="container-fluid col-md-12 col-sm-6">
                    <form action="nguoiDung_Them.php" method="post">
                        <table class="table table-bordered  table-hover" cellspacing="0" style="border-collapse: collapse;">
                            <tr>
                                <td>Tên đăng nhập: </td>
                                <td>
                                    <input type="text" class="form-control" name="userName" placeholder="Tên đăng nhập" style="height: 25px;">
                                </td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td>
                                    <input type="text" class="form-control" name="email" placeholder="Email" style="height: 25px;">
                                </td>
                            </tr>
                            <tr>
                                <td>Mật khẩu: </td>
                                <td>
                                    <input type="text" class="form-control" name="pass" placeholder="Mật khẩu" style="height: 25px;">
                                </td>
                            </tr>
                            <tr>
                                <td>Quyền:  </td>
                                <td>
                                    <select>
                                        <option value="1">---</option>
                                        <?php
                                        include 'Lib/Connect.php';
                                        $sql_acc = "SELECT nameAccess FROM access ";
                                        $re = $con->query($sql_acc);
                                        while ($array = $re->fetch_assoc()) {
                                            $acc_name = $array["nameAccess"];
                                            echo "<option value='$acc_name'>$acc_name</option>";
                                        }
                                        ?>
                                    </select>
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
                    <?php include 'func/nguoiDung_Them_func.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
