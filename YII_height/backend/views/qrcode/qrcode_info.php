<div class="row m-t">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-md">
                    <!--<a class="btn btn-outline btn-primary pull-right" href="/web/member/set?id=1">编辑</a>-->
                    <h2>用户信息</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 text-center">
                <img class="img-circle" src="<?= $member_info_one['home_img']?>" width="100px" height="100px"/>
            </div>
            <div class="col-lg-9">
                <dl class="dl-horizontal">
                    <dt>用户ID：</dt> <dd><?= $member_info_one['home_id']?></dd>
                    <dt>用户名称：</dt> <dd><?= $member_info_one['home_name']?></dd>
                    <dt>用户手机号：</dt> <dd><?= $member_info_one['home_phone']?></dd>
                    <dt>注册时间：</dt> <dd><?= $member_info_one['home_create_time']?></dd>
                    <dt>注册方式：</dt> <dd>
                        <?php
                        if($member_info_one['home_user_from']=='0'){
                            echo '其它途径';
                        }
                        if($member_info_one['home_user_from']=='1'){
                            echo '通过<span style="color:red;">手机号</span>注册';
                        }
                        if($member_info_one['home_user_from']=='2'){
                            echo '通过<span style="color:red;">微信</span>注册';
                        }
                        if($member_info_one['home_user_from']=='3'){
                            echo '通过<span style="color:red;">QQ</span>注册';
                        }
                        ?>
                    </dd>
                    <dt>登录次数：</dt> <dd>
                        <?php
                        if($member_info_one['home_login_number']==''){echo '暂无登录';}else{echo $member_info_one['home_login_number'];}
                        ?>
                    </dd>
                    <dt>最近一次登录时间：</dt> <dd>
                        <?php
                        if($member_info_one['home_time_jin']==''){echo '暂无登录';}else{echo $member_info_one['home_time_jin'];}
                        ?>
                    </dd>
                    <dt>用户账号状态：</dt> <dd>
                        <?php
                        if($member_info_one['home_status']=='1'){echo '账号正常';}else{echo '账号冻结';}
                        ?>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>