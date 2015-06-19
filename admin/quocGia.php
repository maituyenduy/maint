<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>-:- Danh Sách Quốc Gia -:-</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/js.1.11.2.js" type="text/javascript"></script>
        <script src="../js/js.1.11.1.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
            include 'Lib/connect.php';
            include 'func/quocGia_Dsach_func.php';
            if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $sql = "SELECT idCountry, nameCountry FROM country LIMIT {$limit} OFFSET {$offset}";
        $countSql = "SELECT COUNT(*) AS count FROM country ";
        $count = $con->query($countSql);
        if($result = $con->query($countSql)){
        while ($row_fetch_assoc = $result->fetch_assoc()){
            $count = $row_fetch_assoc["count"]; 
        }
    }
   
    $numPage = ceil($count/$limit);
    $count = $con->query($countSql);
    if ($result = $con->query($sql)) { 
        $coun = array(); 
        $i = 0;
        while ($row_fetch_assoc = $result->fetch_assoc()) { 
            $coun[$i]['idCountry'] = $row_fetch_assoc["idCountry"];
            $coun[$i]['nameCountry'] = $row_fetch_assoc["nameCountry"];
            $i++;
        }
        } else {
            echo "<script>alert(\"Có lỗi khi select\"); location.href='quocGia.php'</script>";
        }
        if(isset($coun)):
        ?>
        <div id="container" class="row-fluid">
            <?php include 'Lib/menu.php'; ?>
            <div id="main-content">
                <div class="container-fluid">
                    <div  class=" add btn btn-info">
                        <a href="quocGia_Them.php">Thêm mới</a>
                    </div>
                    <form action="" method="post">
                    <table class="table table-striped table-bordered dataTable table-hover" cellspacing="0" id="cph_Main_ctl00_ctl00_grvProducts" style="border-collapse: collapse;">
                                        <tr>
                                            <th scope="col">
                                                <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                            </th>
                                            <th scope="col">Mã</th>
                                            <th scope="col">Tên quốc gia</th>
                                            <th scope="col">Thao tác</th>
                                        </tr>
                                        <?php
                                            $i = 1;
                                            foreach ($coun as $value):
                                        ?>
                                        <tr>
                                            <td>
                                                <input id="cph_Main_ctl00_ctl00_grvProducts_chkAll" type="checkbox" name="ctl00$cph_Main$ctl00$ctl00$grvProducts$ctl01$chkAll" onclick="javascript: SelectAllCheckboxes(this);" />
                                            </td>
                                            <td><?php echo $value["idCountry"] ?></td>
                                            <td><?php echo $value["nameCountry"] ?></td>
                                            <td>
                                                <a style="text-decoration: none; color: #000;" href="quocGia_Sua.php?id=<?php echo $value['idCountry'] ?>">Sửa</a> || 
                                                <a style="text-decoration: none; color: #000;" href="quocGia_Xoa.php?id=<?php echo $value['idCountry'] ?>">Xóa</a>
                                            </td>
                                        </tr>
                                        <?php 
                                            $i ++;
                                            endforeach;
                                        ?>
                    </table>
                    <!--Phân Trang-->
                    <div class="form col-lg-12">
                        <ul class="pager">  
                            <?php if($page == 1): ?>
                            <li><a href="quocGia.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
                            <?php if($page < $numPage): ?>
                            <li>
                                <a href="quocGia.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a>
                            </li>
                            <?php endif;?>
                            <?php else :?>
                            <li><a href="quocGia.php?page=<?php echo $page - 1 ?>"> Trang trước </a></li>
                            <li><a href="quocGia.php?page=<?php echo $page?>"><?php echo $page?></a> </li>  
                            <?php if($page < $numPage): ?><li><a href="quocGia.php?page=<?php echo $page + 1 ?>"> Trang tiếp </a></li><?php endif;?>
                            <?php endif; ?>
                        </ul>  
                    </div>
                    
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
