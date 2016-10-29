<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found</title>
<!-- BootStrap CSS -->  
<link rel="stylesheet" href="../includes/css/bootstrap.min.css">
<link rel="stylesheet" href="../includes/css/style.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="../includes/font-awesome/css/font-awesome.min.css">

</head>
<body background="../includes/img/bg-404.png">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Oops!</h1>
                <h2><img src="../includes/img/1.png"><br><p></p>404 Not Found</h2>
                <div class="error-details">
                    Maaf, sebuah kesalahan telah terjadi, halaman yang anda minta tidak dapat ditemukan!
                </div>
                <div class="error-actions">
                    <a href="../" class="btn btn-primary btn-lg" onclick="myFunction()"><span class="glyphicon glyphicon-home"></span>
                        Kembali Ke Beranda </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    function myFunction(){
        window.history.back();
    }
</script>
</html>
