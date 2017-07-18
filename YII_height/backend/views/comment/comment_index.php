<?php
use yii\widgets\ActiveForm;
?>
<!--下拉菜单分类-->
<div class="row  m-t p-w-m">
    <div class="form-group">
        <form action="?r=comment/comment_index" method="post">
            <?php $form = ActiveForm::begin();?>请选择评论类型：
            <select name="comment_classify_name" style="width: 150px" class="form-control inline">
                <option value="0">所有评论</option>
                <?php foreach($comment_info as $key=>$val):?>
                <option value="<?= $val['classify_name']?>"><?= $val['classify_name']?></option>
                <?php endforeach;?>
            </select>
            <button type="submit" class="btn  btn-primary search">
                <i class="fa fa-search"></i>查看
            </button>
            <?php ActiveForm::end();?>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>头像</th>
                <th>评论人</th>
                <th>手机</th>
                <th>菜品名称</th>
                <th>评论内容</th>
                <th>评论时间</th>
                <th>评分</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($info as $key => $val): ?>
                <tr>
                    <td>
                        <img alt="image" class="img-circle" src="<?= $val['comment_img']?>" style="width: 40px;height: 40px;">
                    </td>
                    <td><?= $val['comment_user_name']?></td>
                    <td><?= $val['comment_user_phone']?></td>
                    <td><?= $val['comment_book_name']?></td>
                    <td><?= $val['comment_content']?></td>
                    <td><?= $val['comment_time']?></td>
                    <td><?= $val['comment_fen']?></td>
                    <td>
                        <a href="?r=comment/comment_info&comment_id=<?= $val['comment_id']?>">
                            <i class="fa fa-eye fa-lg"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12">
                <span class="pagination_count" style="line-height: 40px;">共4条记录 | 每页50条</span>
                <ul class="pagination pagination-lg pull-right" style="margin: 0 0 ;">
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
