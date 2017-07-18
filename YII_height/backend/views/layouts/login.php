<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
	<title>管理后台</title>
<link href="css/web/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/web/style.css?ver=20170326180701" rel="stylesheet">
</head>

<body class="gray-bg">
<div class="loginColumns animated fadeInDown">
    <div class="row">
        <div class="col-md-6 text-center">
            <h2 class="font-bold">五组项目图书商城管理后台</h2>
            <p>
                <img src="images/common/qrcode.jpg" width="300px"/>
            </p>
            <p class="text-danger">
                扫描关注查看Demo
            </p>
        </div>
            
        <?= $content;?>

        
    </div>
    <hr/>
        <div class="row">
            <div class="col-md-6">
                图书商城管理系统 <a href="http://www.54php.cn/" target="_blank"> 技术支持 </a>
            </div>
            <div class="col-md-6 text-right">
                <small>© 2017</small>
            </div>
        </div>
</div>
</body>
</html>
