<?php
namespace backend\controllers;
use yii\widgets\Linkpager;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<form action="?r=type/update_query" method="post">
<?php $form = ActiveForm::begin(); ?>
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>分类名称</th>
                <th>菜品名称</th>
                <th>分类描述</th>
                <th>是否显示</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data as $key => $val): ?>
                <tr>
                    <input type="hidden" name="t_id" value="<?= $val['t_id']?>"> 
                    <td><?= $val['x_name']?></td>
                    <td><input type="text" name="name" value="<?= $val['t_name']?>"></td>
                    <td><input type="text" name="t_text" value="<?= $val['t_text']?>"></td>
                    <td>
                    <?php
                        if($val['is_show'] == 1){?>
                            <input type="radio" name='is_show' value='1' checked>显示
                             <input type="radio"  name='is_show' value='0'>不显示
                       <?php }elseif($val['is_show'] == 0) {?>
                            <input type="radio" name='is_show' value='1' >显示
                             <input type="radio" name='is_show' value='0' checked >不显示
                       <?php }    
                    ?>
                    </td>
                </tr>
                <?php endforeach;?>
              
            </tbody>  
        </table>  
        <input type="submit" value="修改">
        <?php $form = ActiveForm::end(); ?>
       
        </form>
