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
<link href="css/web/style.css?ver=20170401" rel="stylesheet"></head>

<body>
<div id="wrapper">
	<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="profile-element text-center">
                            <a href="?r=dashboard/dashboard_index">
                            <img alt="image" class="img-circle" src="images/web/logo.png" />
                            </a>
                            <p class="text-muted">电子商城</p>
                        </div>
                    </li>
                    <!--导航栏 Begin-->
                    <li class="book">
                        <a href="?r=type/add"><i class="fa fa-book fa-lg"></i> <span class="nav-label">菜品</span></a>
                    </li>
                    <li class="finance">
                        <a href="?r=finance/finance_index"><i class="fa fa-rmb fa-lg"></i> <span class="nav-label">运维</span></a>
                    </li>
                    <li class="dashboard">
                        <!--<a href="?r=dashboard/dashboard_index"><i class="fa fa-dashboard fa-lg"></i>-->
                        <a href="?r=comment/comment_index"><i class="fa fa-dashboard fa-lg"></i>
                        <span class="nav-label">客说</span></a>
                    </li>
                    <li class="account">
                        <a href="?r=account/account_index"><i class="fa fa-user fa-lg"></i> <span class="nav-label">账号管理</span></a>
                    </li>
                    <li class="member">
                        <a href="?r=index/index"><i class="fa fa-group fa-lg"></i> <span class="nav-label">会员管理</span></a>
                    </li>
                    <!--商城设置-->
                    <li class="brand">
                        <a href="?r=brand/brand_info"><i class="fa fa-cog fa-lg"></i> <span class="nav-label">商城设置</span></a>
                    </li>
                    <!--营销渠道-->
                    <li class="market">
                        <a href="?r=qrcode/qrcode_from"><i class="fa fa-share-alt fa-lg"></i> <span class="nav-label">营销渠道</span></a>
                    </li>
                    <!--数据统计-->
                    <li class="stat">
                        <a href="?r=stat/stat_index"><i class="fa fa-bar-chart fa-lg"></i> <span class="nav-label">数据统计</span></a>
                    </li>
                    <!--退出登录-->
                    <li class="account">
                        <a href="?r=user/user_exit"><i class="fa fa-user fa-lg"></i> <span class="nav-label">退出登录</span></a>
                    </li>
                </ul>
            </div>
	</nav>

	<div id="page-wrapper" class="gray-bg" style="background-color: #ffffff;">
		<div class="row border-bottom">
			<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                            <div class="navbar-header">
                                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="?r=index/index"><i class="fa fa-bars"></i> </a>
                            </div>
				<ul class="nav navbar-top-links navbar-right">
                                    <li>
                                        <span class="m-r-sm text-muted welcome-message">
                                            欢迎使用五组电子商城项目管理后台
                                        </span>
                                    </li>
                                    <li class="hidden">
                                        <a class="count-info" href="javascript:void(0);">
                                            <i class="fa fa-bell"></i>
                                            <span class="label label-primary">8</span>
                                        </a>
                                    </li>
                                    <li class="dropdown user_info">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="?r=index/member_update">
                                            <img alt="image" width="50px" class="img-circle" src="images/user/admin.jpg" />
                                        </a>
                                    </li>
                                </ul>
                        </nav>
		</div>
            
            <?= $content;?>

	</div>
</div>
</body>
</html>
