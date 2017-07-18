<?php
namespace backend\controllers;
use yii\widgets\Linkpager;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<a class="m-l" href="?r=type/show">
 <i class="fa"></i><<返回</a>
<form action="?r=combination/doing" method="post">
<?php $form = ActiveForm::begin(); ?>
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>选择组合</th>
                <th>分类名称</th>
                <th>菜品名称</th>
                <th>分类描述</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data as $key => $val): ?>
                <tr>
                    <td><input type="checkbox"  name="comb_id[]" value="<?=$val['t_id']?>"></td>
                    <td><?= $val['x_name']?></td>
                    <td><?= $val['t_name']?></td>
                    <td><?= $val['t_text']?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <input type="submit" value="组合">
         <?php $form = ActiveForm::end(); ?>
         </form>
    </div>
</div>
