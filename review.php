<?php include('asset/headuser.php'); ?>

<?php $title="Okik"; 
$gambar='http://okik.me/images/okik4.gif';
$refptc='https://www.neobux.com/?r=uhuy12345';
$adskiri='<center><a target="_blank" href="http://okik.me/?ref=dansus021"><img src="http://okik.me/images/okikptc300.gif" border="0" width="300" height="250" /></a></center><br>';
$payment='neobux1.png';
$brief='Earn money sweet and honey, Join our dedicated community for free and earn with the thousands of members making extra money every day just by viewing our advertisers Website';
$ps='Paypal,Bitcoin and other';?>

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
            <center><div id="coinwidget--1An5T5z5a4zCGwuqEXmnDt3vGZvxpZeFtm"></div></center>
            <br>
                <p class="lead" >Ads</p>
                <!-- Ads Review -->
                <?php echo $adskiri; ?>
            </div>
            
            <div class="col-md-9">
                <div class="thumbnail">                   
                    <div class="caption-full" ;">
                    <center><a href="<?php echo $refptc; ?>"><img class="img-responsive" src="<?php echo $gambar ?>" alt="" ></a></center>
                        <center>
                            <h3><b><?php echo $title; ?></b></h3><br>Review of <?php echo $title; ?> : Scam or Legit ?<hr>
                        </center>
                        <!-- Nav Main -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">PTC Info</a></li>
                            <li><a data-toggle="tab" href="#menu1">Payment Proof</a></li>
                            <li><a data-toggle="tab" href="#menu2">Share with your friend</a></li>
                        </ul>
                        <!-- Nav Main Menu -->
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active"><br>
                                <h4>Brief Desription</h4>
                                <p><?php echo $brief;?></p>
                                <h4>Other info :</h4>
                                <p>-</p>
                                <p>
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <td>Status</td>
                                            <td>Paying</td>
                                        </tr>
                                        <tr>
                                            <td>Payment Solution</td>
                                            <td><?php echo $ps; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Main Currency</td>
                                            <td> $</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Minimum Cashout</td>
                                            <td>$3</td>
                                        </tr>
                                        <tr>
                                            <td>Estabilished</td>
                                            <td>2016</td>
                                        </tr>
                                        <tr>
                                            <td>Script Used</td>
                                            <td>Nten</td>
                                        </tr>
                                        <tr>
                                            <td>Language</td>
                                            <td>English</td>
                                        </tr>
                                        <tr>
                                            <td>Accepted Countries</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>Leave Rating</td>
                                            <td><button class="btn btn-info"><i class="fa fa-star"></i>&nbsp;Leave rating for <?php echo $title; ?></button> ~ Coming Soon</td>
                                        </tr>
                                    </table>
                                </p>
                            </div>
                            <div id="menu1" class="tab-pane fade"><br>
                                <p>
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <td>Our Payment</td>
                                            <td><button class="btn btn-info" data-toggle="modal" data-target="#myModal">1</button>&nbsp;</td>
                                        </tr>
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
                                <p>
                                    Coming Soon
                                </p>
                            </div>
                        </div>
                        <!-- Modal Payment Proof -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Payment Proof ~ 14 Jan 2016</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo $payment; ?>" class="img-responsive">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                    </div>
                                </div>
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
                <!-- Ads Bawah rating -->
                <center>ads</center><br>
                <!-- Disqus -->
                <div id="disqus_thread" class="well" style="margin-left: 3%;"></div>
                <script type="text/javascript">
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = '//mgptc.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
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
                    <p>Copyright 2016-<?php echo date('Y'); ?> &copy; <a href="">Mg-PTC</a>. Powered By <a href="">Mg-Project Indonesia</a> &amp; <a href="https://merbot.io">Merbot.io</a>. All Right Reserved.
                    <a target="_blank" class="pull-right" href="http://www.dmca.com/Protection/Status.aspx?ID=f030a3c4-af64-44e8-a082-643751ba3044" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120aj.png?ID=f030a3c4-af64-44e8-a082-643751ba3044" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Script -->
    <?php include('asset/footeruser.php'); ?>

    <a href="#" class="back-to-top" style="display: inline;">
        <i class="fa fa-arrow-circle-up"></i>
    </a>

     <script>
 

 
</script>

</body>

</html>
