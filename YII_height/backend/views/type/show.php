<?php
namespace backend\controllers;
use yii\widgets\Linkpager;
?>
        <table class="table table-bordered m-t">
                    <a class="btn btn-w-m btn-outline btn-primary" href="?r=type/xian">
                        <i class="fa fa-plus"></i>添加分类</a>
                    <a class="btn btn-w-m btn-outline btn-primary" href="?r=combination/add">
                        <i class="fa fa-plus"></i>组合套餐</a>
            <thead>
            <tr>
                <th>分类ID</th>
                <th>菜品图片</th>
                <th>菜品名称</th>
                <th>分类描述</th>
                <th>是否显示</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data as $key => $val): ?>
                <tr>
                    <td><?= $val['t_id']?></td>
                    <td><img alt="image" class="img-circle" src="<?= $val['t_images']?>" style="width: 80px;height: 80px;"></td>
                    <td><?= $val['t_name']?></td>
                    <td><?= $val['t_text']?></td>
                    <td>
                        <?php 
                           if($val['is_show']==1 ){
                              echo "显示";
                            }else{
                                echo "不显示";
                            }
                        ?>

                        </td>
                    <td>
                        <a class="m-l" href="?r=type/update&id=<?=$val['t_id']?>">                      
                            <i class="fa fa-edit fa-lg"></i>
                        </a>
                        <a class="m-l remove" href="?r=type/del_type&id=<?=$val['t_id']?>">
                            <i class="fa fa-trash fa-lg del_type" data-id='<?= $val['t_id']?>'></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
