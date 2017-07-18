<?php
use yii\helpers\Html;
?>

<div class="row m-t">
    <div class="col-lg-9 col-lg-offset-2 m-t">
        <dl class="dl-horizontal">
            <dt>商城名称</dt>
            <dd><?= $arr['brand_name'] ?></dd>
            <dt>联系电话</dt>
            <dd><?= $arr['brand_tel'] ?></dd>
            <dt>地址</dt>
            <dd><?= $arr['brand_address'] ?></dd>
            <dt>商城介绍</dt>
            <dd><?= $arr['brand_description'] ?></dd>
            <dd>
                <a href="?r=brand/brand_set" class="btn btn-outline btn-primary btn-w-m">编辑</a>
            </dd>
        </dl>
    </div>
</div>


