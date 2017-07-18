<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="row m-t  user_edit_wrap">
    <div class="col-lg-12">
    <form action="?r=type/add" method="post">
        <div class="form-horizontal m-t m-b">
        <?php $form = ActiveForm::begin(); ?>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">菜品名称:</label>
                <div class="col-lg-10">
                    <input type="text" name="name" />
                </div>
            </div>
            <div class="hr-line-dashed"></div>

              <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">菜品图片:</label>
                <div class="col-lg-10">
                    <input type="file" name="name" />
                </div>
            </div>
            <div class="hr-line-dashed"></div>

            <div class="form-group">
                <label class="col-lg-2 control-label">分类</label>
                <div class="col-lg-10">
                    <select class="select" name="p_id">
                        <option value="0">顶级分类</option>
                        <?php foreach ($data as $key => $val): ?>
                            <option value="<?=$val['id']?>"><?=$val['x_name']?></option>
                        <?php endforeach ?>
                      </select>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">是否显示:</label>
                <div class="col-lg-10">
                    <input type="radio" name="is_show" value="1">是
                    <input type="radio" name="is_show" value="0">否
                </div>
            </div>
            <div class="hr-line-dashed"></div>
                <div class="form-group">
                <label class="col-lg-2 control-label">分类描述:</label>
                <div class="col-lg-10">
                        <td><input type="text" name="t_text" /></td>
                </div>
            </div>
            <?php $form = ActiveForm::end(); ?>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-2">
                    <input type="submit" value="添加">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

