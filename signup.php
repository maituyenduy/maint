<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Đăng ký</title>
    </head>
    <body>
        <div class="container"> \
            <?php include 'menu.php'; ?>
            <div class="list col-md-8">
                <div class="page-header col-md-12 col-sm-6">
                    <h2> ĐĂNG KÝ</h2>
                </div>

                <form class="col-md-6">
                    <div class="form-group">
                        <label>Tài Khoản</label>
                        <input type="text" class="form-control" placeholder="Tài Khoản">
                    </div>
                    <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Nhập Lại Mật Khẩu</label>
                        <input type="password" class="form-control" placeholder="RePassword">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Giới Tính</label>
                        <div class="radio">

                            <label><input type="radio" value="Nam"> Nam</label>
                            <label><input type="radio" value="Nữ"> Nữ</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <div class="btn-group">  
                            <div class="btn-group"> 
                                <button type="button" class="btn btn-default dropdown-toggle"  data-toggle="dropdown">  
                                    Ngày <span class="caret"></span></button>  
                                <ul class="dropdown-menu" role="menu" >
                                    <li><a href="#">1</a></li>  
                                    <li><a href="#">2</a></li>  
                                    <li><a href="#">2</a></li> 
                                    <li><a href="#">2</a></li> 
                                    <li><a href="#">2</a></li> 
                                </ul>  
                            </div>  
                            <div class="btn-group"> 
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">  
                                    Tháng <span class="caret"></span></button>  
                                <ul class="dropdown-menu" role="menu">  
                                    <li><a href="#">1</a></li>  
                                    <li><a href="#">2</a></li>  
                                    <li><a href="#">2</a></li> 
                                    <li><a href="#">2</a></li> 
                                    <li><a href="#">2</a></li>   
                                </ul>  
                            </div>
                            <div class="btn-group"> 
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">  
                                    Năm <span class="caret"></span></button>  
                                <ul class="dropdown-menu" role="menu">  
                                    <li><a href="#">2015</a></li>  
                                    <li><a href="#">2014</a></li>  
                                </ul>  
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
            <label><input type="checkbox"> Đồng ý với điều khoản</label>
        </div>
                    <button type="submit" class="btn btn-primary">Đăng Ký</button>
                </form>
            </div>
            <?php include 'advertise.php';?>
            <?php include 'footer.php'; ?>
        </div>
        <script src="js/js.1.11.2.js" type="text/javascript"></script>
        <script src="js/js.1.11.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>