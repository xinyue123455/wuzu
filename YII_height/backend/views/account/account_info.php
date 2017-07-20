
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li  class="current">
                    <a href="?r=account/account_index">账户列表</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row m-t">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-md">
                    <a class="btn btn-outline btn-primary pull-right" href="/web/account/set?id=12">
                        <i class="fa fa-pencil"></i>编辑
                    </a>
                    <h2>账户信息</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 text-center">
                <img class="img-circle circle-border" src="<?= $admin_info_one['login_img'];?>" width="100px" height="100px"/>
            </div>
            <div class="col-lg-10">
                <p class="m-t">姓名：<?= $admin_info_one['login_name'];?></p>
                <p>密码：<?= $admin_info_one['login_pwd']?></p>
            </div>
        </div>
        <div class="row m-t">
            <div class="col-lg-12">
                <div class="panel blank-panel">
                    <div class="panel-heading">
                        <div class="panel-options">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="javascript:void(0);" data-toggle="tab" aria-expanded="false">访问记录</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>访问时间</th>
                                            <th>访问Url</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                2017-03-26 23:22:24
                                            </td>
                                            <td>
						/web/book/images  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

