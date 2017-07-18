
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li>
                    <a href="?r=comment/comment_index">全部评论</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
use yii\widgets\ActiveForm;
?>
<div class="row m-t">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-md">
                    <span style="margin-left: 1120px; color: red;">点击修改这条评论的状态</span>
                    <a class="btn btn-outline btn-primary pull-right" href="?r=comment/comment_set&comment_id=<?= $info_one['comment_id']?>">
                        <?php if($info_one['comment_status']=='1'){echo '正常显示';}else{echo '禁止显示';}?>
                    </a>
                    <h2>评论信息</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 text-center">
                <img class="img-circle" src="<?= $info_one['comment_img']?>" width="100px" height="100px"/>
            </div>
            <div class="col-lg-9">
                <dl class="dl-horizontal">
                    <dt>评论人：</dt><dd><?=$info_one['comment_user_name']?></dd>
                    <dt>手机号：</dt><dd><?= $info_one['comment_user_phone']?></dd>
                    <dt>菜品名称：</dt><dd><?= $info_one['comment_book_name']?></dd>
                    <dt>评论内容：</dt><dd><?= $info_one['comment_content']?></dd>
                    <dt>评论时间：</dt><dd><?= $info_one['comment_time']?></dd>
                    <dt>状态：</dt>
                    <dd><?php if($info_one['comment_status']=='1'){echo '正常显示';}else{echo '禁止显示';}?></dd>
                </dl>
            </div>
        </div>
    </div>
</div>

