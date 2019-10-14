<!DOCTYPE html>
<html>
    <head>
        <title>PHP_Thuần_Bán_Hàng</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/bootstrap.min.css">
        <script  src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
        <script  src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick-theme.css"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style.css">
    </head>
    <body>
        <div id="wrapper">
            <!---->
            <!--HEADER-->
            <div id="header">
                <div id="header-top">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-6" id="header-text">
                                <a>HiepNguyen</a><b></b>
                            </div>
                            <div class="col-md-6">
                                <nav id="header-nav-top">
                                    <ul class="list-inline pull-right" id="headermenu">
                                        <?php if(isset($_SESSION['name_user'])): ?>
                                            <li>Xin chào: <?php echo $_SESSION['name_user'] ?></li>
                                            <li>
                                                <a href=""><i class="fa fa-user"></i> Tài Khoản <i class="fa fa-caret-down"></i></a>
                                                <ul id="header-submenu">
                                                    <li><a href="">Thanh Toán</a></li>
                                                    <li><a href="">Giỏ hàng</a></li>
                                                    <li><a href="thoat.php">Thoát</a></li>
                                                </ul>
                                            </li>
                                           
                                        <?php else: ?>
                                                <li>
                                                    <a href="dang-nhap.php"><i class="fa fa-unlock"></i> Đăng Nhập</a>
                                                </li> 
                                        <?php endif; ?>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="header-main">
                        <div class="col-md-5">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label>
                                        
                                         


                                        <select name="category" class="form-control">
                                            <option src=""> Tất cả danh mục</option>
                                            <?php foreach ($category as $item): ?>

                                                <option> <?php echo $item['name'] ?> </option>
                                            <?php endforeach ?> 
                                           
                                        </select>
                                    </label>
                                    <input type="text" name="keywork" placeholder=" Tìm kiếm" class="form-control">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                            <img src="<?php echo base_url() ?>/public/frontend/images/logo-default.png">
                            </a>
                        </div>
                        <div class="col-md-3" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">Chăm sóc khách hàng</p>
                                    <p>0964681635</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HEADER-->
            <!--MENUNAV-->
            <div id="menunav">
                <div class="container">
                    <nav>
                        <div class="home pull-left">
                            <a href="<?php echo base_url() ?>">Trang chủ</a>
                        </div>
                        <!--menu main-->
                        <ul id="menu-main">
                            <li>
                                <a href="#">Cửa hàng</a>
                            </li>
                            <li>
                                
                                <li><a href="">Sản phẩm mới</a></li>
                                
                            </li>
                            <li>
                                <a href="#">Liên hệ</a>
                            </li>
                            <li>
                                <a href="#">Cá nhân</a>
                            </li>
                            <li>
                                <a href="#">Thông tin</a>
                            </li>
                        </ul>
                        <!-- end menu main-->
                        <!--Shopping-->
                        <ul class="pull-right" id="main-shopping">
                            <li>
                                <a href=""><i class="fa fa-shopping-basket"></i> giỏ hàng</a>
                            </li>
                        </ul>
                        <!--end Shopping-->
                    </nav>
                </div>
            </div>
            <!--ENDMENUNAV-->
            <div id="maincontent">
                <div class="container">
                    <div class="col-md-3  fixside" >
                        <div class="box-left box-menu" >
                            <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
                           
                            <ul>
                                <?php foreach ($category  as $item): ?>

                                    <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                
                                <?php endforeach ?>
                            </ul>
                        </div>
                         <div class="box-left box-menu" >
                            <h3 class="box-title"><i class="fa fa-list"></i>Nhãn</h3>
                           
                            <ul>
                                <?php foreach ($labels  as $item): ?>

                                    <li><a href="nhan.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="box-left box-menu">
                            <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm mới </h3>
                            <!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
                            <ul>
                                <?php foreach ($productNew as $item): ?>
                                    <li class="clearfix">
                                        <a href="">
                                            <img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive pull-left" width="80" height="80">
                                            <div class="info pull-right">
                                                <p class="name"><?php echo $item['name'] ?></p >
                                                <b class="price">Giảm giá: <?php echo $item['sale'] ." %"?></b><br>
                                                <b class="sale">Giá gốc: <?php echo formatPrice($item['price']) ?></b><br>
                                                
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                                
                               
                            </ul>
                            <!-- </marquee> -->
                        </div>
                        
                    </div>