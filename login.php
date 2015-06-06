<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Đăng nhập</title>
    </head>
    <body>
        <div class="container"> 
            <?php include 'menu.php'; ?>
            <div class="list col-md-8">
                <div class="page-header col-md-12 col-sm-6">
                    <h2>ĐĂNG NHẬP</h2>
                </div>

                <form class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Ghi Nhớ</label>
                </div>
                <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                </form>
            </div>
            <?php include './advertise.php';?>
            <?php include './footer.php';?>
        </div>
         <script src="js/js.1.11.2.js" type="text/javascript"></script>
        <script src="js/js.1.11.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>