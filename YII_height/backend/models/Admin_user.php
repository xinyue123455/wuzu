<?php
namespace backend\models;

use Yii; 
use yii\db\Query;
use yii\base\Model;

class Admin_user extends Model{
    /**
     * 查询所有账户信息
     */
    public function admin_user_info(){
        $query = new Query;
        return $query->select('*')->from('user')->all();
    }
    
    /**
     * 查询单个账户信息
     */
    public function admin_user_one($user_id){
        $query = new Query();
        return $query->select("*")
                     ->from('user')
                     ->where(['user_id' => $user_id])
                     ->one();
    }
}

