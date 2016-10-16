<?php include('asset/headuser.php'); ?>

<?php $title="Okik"; 
$gambar='http://okik.me/images/okik4.gif';
$refptc='https://www.neobux.com/?r=uhuy12345';
$adskiri='<a target="_blank" href="http://okik.me/?ref=dansus021"><img src="http://okik.me/images/okikptc300.gif" border="0" width="300" height="250" /></a>';?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <p class="lead">Donation</p>
                <script src="//blockr.io/js_external/coinwidget/coin.js"></script>
                <script>
                CoinWidgetCom.go({
                wallet_address: '1An5T5z5a4zCGwuqEXmnDt3vGZvxpZeFtm',
                currency: '',
                counter: 'count',
                lbl_button: 'Donate',
                lbl_count: 'donations',
                lbl_amount: '',
                lbl_address: 'Use address below to donate. Thanks!',
                qrcode: true,
                alignment: 'bl',
                decimals: 8,
                size: "small",
                color: "dark",
                countdownFrom: "0",
                element: "#coinwidget--1An5T5z5a4zCGwuqEXmnDt3vGZvxpZeFtm",
                onShow: function(){},
                onHide: function(){}
                 });
                </script>
            <div id="coinwidget--1An5T5z5a4zCGwuqEXmnDt3vGZvxpZeFtm"></div>
            <br>
                <p class="lead" >Ads</p>
                <!-- Ads Review -->
                <?php echo $adskiri; ?>
            </div>
            <center><a href="<?php echo $refptc; ?>"><img class="img-responsive" src="<?php echo $gambar ?>" alt="" ></center><br></a>
            <div class="col-md-9">
                <div class="thumbnail">                   
                    <div class="caption-full" ;">
                        <center>
                            <h3><b><?php echo $title; ?></b></h3><br>Review of <?php echo $title; ?> : Scam or Legit ?<hr>
                        </center>
                        <!-- Nav Main -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Brief Description &amp; Info</a></li>
                            <li><a data-toggle="tab" href="#menu1">Payment Proof</a></li>
                            <li><a data-toggle="tab" href="#menu2">Payment Solution</a></li>
                        </ul>
                        <!-- Nav Main Menu -->
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active"><br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div id="menu1" class="tab-pane fade"><br>
                                <p>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Our Payment</td>
                                            <td><button class="btn btn-info" onclick="my1()">1</button>&nbsp;<button class="btn btn-info" onclick="my1()">2</button></td>
                                        </tr>
                                        <script>function my1() { swal({   title: "$50",   text: "30 Januari 2016",   imageUrl: "http://okik.me/images/okik-468x60.gif", imageSize: "468x60" }); }</script>
                                        <tr>
                                            <td>Total Earned</td>
                                            <td>$ 500,00</td>
                                        </tr>
                                        <tr>
                                            <td>Offical Payment</td>
                                            <td>For Official Payment you can find in here - <button class="btn btn-default"><a style=" text-decoration: none;" target="_blank" href="<?php echo $refptc;?>">Visit Now <i class="fa fa-external-link-square"></i> </a></button></td>
                                        </tr>
                                    </table>
                                </p>
                            </div>
                            <div id="menu2" class="tab-pane fade"><br>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>

                        

                        <!-- <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> -->
                    </div>
                    <div class="ratings">
                        <font color="black"><p><b><?php echo $title; ?></b> - <button class="btn btn-default"><a style=" text-decoration: none;" target="_blank" href="<?php echo $refptc;?>">Visit Now <i class="fa fa-smile-o"></i> </a></button>.</p></font>
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well" style="margin-left: 3%;">
                        asdasd

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright 2016-<?php echo date('Y'); ?> &copy; <a href="">Mg-PTC</a>. Powered By <a href="">Mg-Project Indonesia</a> &amp; <a href="https://merbot.io">Merbot.io</a>. All Right Reserved.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Script -->
    <?php include('asset/footer.php'); ?>

</body>

</html>
