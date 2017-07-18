<?php

namespace backend\models;

use Yii;
use yii\base\Model;

class Brand extends Model
{
	/**
	 * 查询
	 */
	public function getOne()
	{
		return $rows = (new \yii\db\Query())
			  ->select('*')
			  ->from('shop_brand')
			  ->one();
	}

	/**
	 * 修改
	 */
	public function save($request, $where)
	{
		return Yii::$app->db->createCommand()
					 ->update('shop_brand', $request, "brand_id=".$where)
					 ->execute();
	}
}