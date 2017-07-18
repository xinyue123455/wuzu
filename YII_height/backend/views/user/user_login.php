<?php
use yii\widgets\ActiveForm;
?>

<div class="col-md-6">
    <div class="ibox-content">
        <form class="m-t" role="form" action="?r=user/user_login" method="post">
            <div class="form-group text-center">
                <h2 class="font-bold">登录</h2>
            </div>
        <?php $form = ActiveForm::begin();?>
            <div class="form-group">
                <input type="text" name="login_name" class="form-control" placeholder="请输入登录用户名">
            </div>
            <div class="form-group">
                <input type="password" name="login_pwd" class="form-control" placeholder="请输入登录密码">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登录</button>
        <?php ActiveForm::end();?>
            <h3>账号和密码请关注左侧服务号 回复"<span class="text-danger">商城账号</span>"获取，每日更新一次 </h3>
        </form>
    </div>
</div>
     