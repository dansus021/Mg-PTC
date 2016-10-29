<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PTC Monitor - PTC Review - PTC Payment Proof - New PTC">
    <meta name="author" content="Mg-Project Indonesia">

    <title>Mg-PTC - Earning from PTC Safely</title>

    <!-- Bootstrap Core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="includes/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="includes/css/shop-item.css" rel="stylesheet">

    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"https://mg-ptc.net/cookie-policy","theme":"dark-floating"};
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Mg-PTC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index" >Home Monitor &amp; Review</a>
                    </li>
                    <li>
                        <a href="scam-sites">Scam Sites</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#addptc">Add New PTC Site</a>
                    </li>
                    <li>
                        <a href="faq">F.A.Q</a>
                    </li>
                    <li>
                        <a href="tos">TOS</a>
                    </li>
                    <li>
                        <a href="cookie-policy">Cookie Policy</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#contacus">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#aboutus">About Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Add PTC Modal -->
<form action="proses?action=adduser" method="POST" name="addptc" class="form-horizontal" role="form">
<div class="modal fade" id="addptc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Add New PTC Site!...</h4>
      </div>
      <div class="modal-body">
      <?php //echo $error; ?>
        <div class="row">
          <div class="col-md-12">
            <strong>Site Name:</strong>
            <input type="text" class="form-control"  name="user" maxlength="20" placeholder="Username Anda..." required>
          </div>
        </div><p></p>
        <div class="row">
          <div class="col-md-12">
            <strong>Site URL:</strong>
            <input type="text" class="form-control"  name="user" maxlength="20" placeholder="Username Anda..." required>
          </div>
        </div><p></p>
        <div class="row">
          <div class="col-md-12">
            <strong>Other Info (Optional):</strong>
            <p><font size="1%">(Max Character: 200)</font></p>
            <textarea name="otherinfo" id="alamatcuy" class="form-control" rows="5" placeholder="Other Info. Anything info about this PTC. "></textarea>
            <font size="1%"><span id="hitung2" class="text-right">200</span>&nbsp;Character left</font>
          </div>
        </div><p></p>
        <div class="row">
          <div class="col-md-12">
            <strong>Prove you're human <i class="fa fa-smile-o"></i> :</strong>
            <div class="g-recaptcha" data-sitekey="6LdvlQkUAAAAABvuN_j22KnaQUPtt0uZBXVmZCn2"></div>
          </div>
        </div><p></p>
        <div class="row text-right" style="margin-top:1%;">
          <div class="col-sm-12 controls">
            <button type="submit" name="Submit" class="btn btn-primary"><i class="fa fa-send"></i> | Send</button>
            <button type="reset" name="Clear" class="btn btn-warning"><i class="fa fa-trash-o"></i> | Clear</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        Copyright &copy; Mg-PTC
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- End Of Add PTC Modal -->

<!-- Contac Us Modal -->
<form action="proses?action=adduser" method="POST" name="contacus" class="form-horizontal" role="form">
<div class="modal fade" id="contacus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-phone"></i> Contact Us!...</h4>
      </div>
      <div class="modal-body">
      <?php //echo $error; ?>
        <div class="row">
          <div class="col-md-12">
            <strong>Name:</strong>
            <input type="text" class="form-control"  name="user" maxlength="20" placeholder="Your Name..." required>
          </div>
        </div><p></p>
        <div class="row">
          <div class="col-md-12">
            <strong>Email:</strong>
            <input type="text" class="form-control"  name="user" maxlength="20" placeholder="Your Email..." required>
          </div>
        </div><p></p>
        <div class="row">
          <div class="col-md-12">
            <strong>Information:</strong>
            <p><font size="1%">(Max Character: 200)</font></p>
            <textarea name="otherinfo" id="alamatcuy" class="form-control" rows="5" placeholder="Critics, Advice or Other Information. Please feel free to contact us."></textarea>
            <font size="1%"><span id="hitung2" class="text-right">200</span>&nbsp;Character left</font>
          </div>
        </div><p></p>
        <div class="row">
          <div class="col-md-12">
            <strong>Prove you're human <i class="fa fa-smile-o"></i> :</strong>
            <div class="g-recaptcha" data-sitekey="6LdvlQkUAAAAABvuN_j22KnaQUPtt0uZBXVmZCn2"></div>
          </div>
        </div><p></p>
        <div class="row text-right" style="margin-top:1%;">
          <div class="col-sm-12 controls">
            <button type="submit" name="Submit" class="btn btn-primary"><i class="fa fa-send"></i> | Send</button>
            <button type="reset" name="Clear" class="btn btn-warning"><i class="fa fa-trash-o"></i> | Clear</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        Copyright &copy; Mg-PTC
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- End Of Contac Us Modal -->

<!-- About Us Modal -->
<div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bell-o"></i> Please visit our other site :)</h4>
      </div>
      <div class="modal-body">
      <?php //echo $error; ?>
        <div class="panel panel-info">
            <div class="panel-heading"><i class="fa fa-info"></i> About Us</div>
            <div class="panel-body">
                <p> Mg-PTC is a site that is useful to you all who want to plunge into the world of PTC. Starting from the many PTC sites that eventually became a scam for many reasons. We will always provide information about existing PTC. Support Us. </p>
                <p>Don't forget to Visit other Mg-Project program</p>
                <p><i class="fa fa-check"></i>Merbot.io</p>
            </div>
            <div class="panel-footer">Copyright &copy; 2016 <a href="">Mg-PTC</a>. Powered By <a href="">Mg-Project Indonesia</a> &amp; <a href="https://merbot.io">Merbot.io</a>. All Right Reserved.</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Of About Us Modal -->