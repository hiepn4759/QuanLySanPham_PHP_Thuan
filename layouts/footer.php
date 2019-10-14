</div>
<div class="container">
    <div class="col-md-4 bottom-content">
        <a href=""><img src="<?php base_url() ?>public/frontend/images/free-shipping.png"></a>
    </div>
    <div class="col-md-4 bottom-content">
        <a href=""><img src="<?php base_url() ?>public/frontend/images/guaranteed.png"></a>
    </div>
    <div class="col-md-4 bottom-content">
        <a href=""><img src="<?php base_url() ?>public/frontend/images/deal.png"></a>
    </div>
</div>
<div class="container-pluid">
    <section id="footer">
        <div class="container">
            <div class="col-md-3" id="shareicon">
                <ul>
                    <li>
                        <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8" id="title-block">
                <div class="pull-left">
                </div>
                <div class="pull-right">
                </div>
            </div>
        </div>
    </section>
    <section id="footer-button">
        <div class="container-pluid">
            <div class="container">
                <div class="col-md-3" id="ft-about">
                    <p>Cung cấp tất cả các loại giày dép hàng đâu Việt Name. Đội ngũ nhân viên tiên tiến sẵn sàng đáp ứng nhu cầu của bạn
                    </p>
                </div>
                <div class="col-md-3 box-footer" >
                    <h3 class="tittle-footer">Về chúng tôi</h3>
                    <ul>
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i> Giới thiệu</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i> Liên hệ </a>
                        </li>
                        
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i>Liên hệ</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i> Giới thiệu</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 box-footer">
                     <h3 class="tittle-footer">Về chúng tôi</h3>
                    <ul>
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i> Giới thiệu</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i> Liên hệ </a>
                        </li>
                        
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i>Liên hệ</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-double-right"></i>
                            <a href=""><i></i> Giới thiệu</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3" id="footer-support">
                    <h3 class="tittle-footer"> Liên hệ</h3>
                    <ul>
                        <li>
                            <p><i class="fa fa-home" style="font-size: 16px;padding-right: 5px;"></i> KTX B2 Học viện công nghệ bưu chính viễn thông, Hà Đông, Hà Nội </p>
                            <p><i class="sp-ic fa fa-mobile" style="font-size: 22px;padding-right: 5px;"></i> 0964681635</p>
                            <p><i class="sp-ic fa fa-envelope" style="font-size: 13px;padding-right: 5px;"></i> hiepn4759@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="ft-bottom">
        <p class="text-center">Copyright © 2019 . Design by  ... HiepNguyen !!! </p>
    </section>
</div>
            </div>
        </div>
        </div>      
        </div>
        <script  src="<?php echo base_url() ?>public/frontend/js/slick.min.js"></script>
    </body>
</html>
<script type="text/javascript">
    $(function() {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function(){
            $(this).children(".hidenitem").show(100);
        },function(){
            $hidenitem.hide(500);
        })
    })
</script>