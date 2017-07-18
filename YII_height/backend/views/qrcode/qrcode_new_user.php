<?php
use yii\widgets\ActiveForm;
?>
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li>
                    <a href="?r=qrcode/qrcode_from">用户来源</a>
                </li>
                <li class="current">
                    <a href="?r=qrcode/qrcode_new_user">新增用户</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <form class="form-inline wrap_search" action="?r=qrcode/qrcode_sear" method="post">
            <?php $form = ActiveForm::begin();?>
            <div class="row  m-t p-w-m">
                <div class="form-group">
                    <select name="sear_time" class="form-control inline">
                        <option value="0">--请选择--</option>
                        <option value="0">今天注册用户</option>
                        <option value="7">最近七天注册用户</option>
                        <option value="30">最近一个月注册用户</option>
                        <option value="90">最近三个月注册用户</option>
                        <option value="180">最近半年注册用户</option>
                        <option value="365">最近一年注册用户</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="sear_phone" placeholder="请输入用户名或手机号" class="form-control" value="">
                        <?php ActiveForm::end();?>
                        <span class="input-group-btn">
                            <button type="submit" class="btn  btn-primary search">
                                <i class="fa fa-search"></i>查看
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
            <?php
                $text = isset($text_info) ? $text_info : '今天注册的用户';
                echo "<center style='font-size: 20px; color: red;'>$text</center>";
            ?>
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>ID</th>
                <th>头像</th>
                <th>姓名</th>
                <th>手机</th>
                <th>性别</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($time_info as $key => $val): ?>
		<tr>
                    <td><?= $val['home_id']?></td>
                    <td><img alt="image" class="img-circle" src="<?= $val['home_img']?>" style="width: 40px;height: 40px;"></td>
                    <td><?= $val['home_name']?></td>
                    <td><?= $val['home_phone']?></td>
                    <td><?= $val['home_sex']?></td>
                    <td><?php if($val['home_status'] == 1){echo '正常';}else{echo '禁用';} ?></td>
                    <td>
                        <a href="?r=index/member_info&home_id=<?= $val['home_id']?>">
                            <i class="fa fa-eye fa-lg"></i>
                        </a>
                        <a class="m-l" href="?r=index/member_set&home_id=<?= $val['home_id']?>">
                            <i class="fa fa-edit fa-lg"></i>
                        </a>
                        <a class="m-l remove" href="?r=index/member_del&home_id=<?= $val['home_id']?>" data="1">
                            <i class="fa fa-trash fa-lg member_del" data-id='<?= $val['home_id']?>'></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12">
                <span class="pagination_count" style="line-height: 40px;">共<?= $user_count;?>条记录 | 每页<?= $user_count;?>条</span>
                <ul class="pagination pagination-lg pull-right" style="margin: 0 0 ;">
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>