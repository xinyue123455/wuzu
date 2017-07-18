<?php
use yii\widgets\ActiveForm;
?>



<div class="row m-t  wrap_brand_set">
	<div class="col-lg-12">
		<h2 class="text-center">商城设置</h2>
        <?php ActiveForm::begin();  ?>
        <form action="?r=brand/brand_set" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-10">
                    <input type="hidden" name="brand_id" class="form-control" value="<?= $arr['brand_id'] ?>">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
    		<div class="form-horizontal m-t m-b">
                <div class="form-group">
                    <label class="col-lg-2 control-label">商城名称:</label>
                    <div class="col-lg-10">
                        <input type="text" name="brand_name" class="form-control" placeholder="请输入商城名称~~" value="<?= $arr['brand_name']; ?>">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">电话:</label>
                    <div class="col-lg-10">
                        <input type="text" name="brand_tel" class="form-control" placeholder="请输入联系电话~~"  value="<?= $arr['brand_tel'] ?>">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">地址:</label>
                    <div class="col-lg-10">
                        <input type="text" name="brand_address" class="form-control" placeholder="请输入联系地址~~"  value="<?= $arr['brand_address'] ?>">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">商城介绍:</label>
                    <div class="col-lg-10">
                        <textarea  name="brand_description" class="form-control" rows="4"><?= $arr['brand_description'] ?></textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-lg-4 col-lg-offset-2">
                        <input type="submit" class="btn btn-w-m btn-outline btn-primary save" value="保存">
                    </div>
                </div>
    		</div>
        </form>
        <?php ActiveForm::end(); ?>
	</div>
</div>

