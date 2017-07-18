<?php
use yii\widgets\ActiveForm;
?>
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
<div class="row mg-t20 wrap_member_set">
    <div class="col-lg-12">
        <h2 class="text-center">会员设置</h2>
        <div class="form-horizontal m-t">
            <div class="hr-line-dashed"></div>
            <form action="?r=index/member_set_update" method='post'>
                <?php $form = ActiveForm::begin();?>
                <input type="hidden" name="home_id" value="<?= $member_info_one['home_id'];?>">
            <div class="form-group">
                <label class="col-lg-2 control-label">会员名称:</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="home_name" value="<?= $member_info_one['home_name']?>">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">会员手机:</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control"name="home_phone" value="<?= $member_info_one['home_phone']?>">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">密码:</label>
                <div class="col-lg-10">
                    <input type="text" name="login_pwd" class="form-control" placeholder="请输入原密码">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">新密码:</label>
                <div class="col-lg-10">
                    <input type="text" name="login_new_pwd" class="form-control" placeholder="请输入新密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-2">
                    <?php ActiveForm::end();?>
                    <button class="btn btn-w-m btn-outline btn-primary save">保存</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
