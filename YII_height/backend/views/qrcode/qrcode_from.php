

<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li class="current">
                    <a href="?r=qrcode/qrcode_from">用户来源</a>
                </li>
                <li>
                    <a href="?r=qrcode/qrcode_new_user">新增用户</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered m-t">
            <thead>
                <tr>
                    <th>用户ID</th>
                    <th>用户名称</th>
                    <th>用户手机号</th>
                    <th>登录次数</th>
                    <th>最近一次登录时间</th>
                    <th>注册时间</th>
                    <th>注册方式</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user_form_info as $key => $val): ?>
                <tr>
                    <td><?= $val['home_id']?></td>
                    <td><?= $val['home_name']?></td>
                    <td><?= $val['home_phone']?></td>
                    <!--登录次数-->
                    <td>
                        <?php
                        if($val['home_login_number']==''){echo '暂无登录';}else{echo $val['home_login_number'];}
                        ?>
                    </td>
                    <!--最近一次登录时间-->
                    <td>
                        <?php
                        if($val['home_time_jin']==''){echo '暂无登录';}else{echo $val['home_time_jin'];}
                        ?>
                    </td>
                    <td><?= $val['home_create_time']?></td>
                    <!--注册方式-->
                    <td>
                        <?php
                        if($val['home_user_from']=='0'){
                            echo '其它途径';
                        }
                        if($val['home_user_from']=='1'){
                            echo '通过<span style="color:red;">手机号</span>注册';
                        }
                        if($val['home_user_from']=='2'){
                            echo '通过<span style="color:red;">微信</span>注册';
                        }
                        if($val['home_user_from']=='3'){
                            echo '通过<span style="color:red;">QQ</span>注册';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="?r=qrcode/qrcode_info&home_id=<?= $val['home_id']?>">
                            <i class="fa fa-eye fa-lg"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12">
		<span class="pagination_count" style="line-height: 40px;">共<?= $count;?>条记录 | 每页<?= $count;?>条</span>
		<ul class="pagination pagination-lg pull-right" style="margin: 0 0 ;">
                    <li class="active"><a href="?r=qrcode/qrcode_from">1</a></li>
                </ul>
            </div>
        </div>	
    </div>
</div>

