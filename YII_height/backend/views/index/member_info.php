
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li>
                    <a href="?r=index/index">会员列表</a>
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
                    <a class="btn btn-outline btn-primary pull-right" href="?r=index/member_set&home_id=<?= $member_info_one['home_id']?>">编辑</a>
                    <h2>会员信息</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 text-center">
                <img class="img-circle" src="<?= $member_info_one['home_img']?>" width="100px" height="100px"/>
            </div>
            <div class="col-lg-9">
                <dl class="dl-horizontal">
                    <dt>姓名：</dt> <dd><?= $member_info_one['home_name']?></dd>
                    <dt>手机：</dt> <dd><?= $member_info_one['home_phone']?></dd>
                    <dt>性别：</dt> <dd><?= $member_info_one['home_sex']?></dd>
                </dl>
            </div>
        </div>
        <div class="row m-t">
            <div class="col-lg-12">
                <div class="panel blank-panel">
                    <div class="panel-heading">
                        <div class="panel-options">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a>会员订单</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="tab-content">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>订单编号</th>
                                        <th>支付时间</th>
                                        <th>支付金额</th>
                                        <th>订单状态</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20170312194429</td>
                                        <td>2017-07-09</td>
                                        <td>90.00</td>
                                        <td>待支付</td>
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

