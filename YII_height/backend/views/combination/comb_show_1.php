<?php
namespace backend\controllers;
use yii\widgets\Linkpager;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>组合ID</th>
                <th>组合</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data as $key => $val): ?>
                <tr>
                    <td><?= $val['id']?></td>
                    <td><?= $val['combination']?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
