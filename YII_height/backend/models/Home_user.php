<?php
namespace backend\models;

use Yii; 
use yii\db\Query;
use yii\base\Model;
//use yii\data\Pagination;

class Home_user extends Model{
    /**
     * 查询所有会员 --- 分页显示
     */
    public function membersel(){
        $query = new Query();
        //取到数据的总条数
        $count = $query->from('home_user')->count();
        //每页显示的数据
        $info = $query->select('*')
                     ->from('home_user')
                     ->orderBy('home_id asc')
                     ->all();
        return array(
            'count'      => $count,
            'info'       => $info
        );
    }
    /**
     * 查询所有会员 --- 分页显示
     */
//    public function membersel(){
//        $query = new Query();
//        //取到数据的总条数
//        $count = $query->from('home_user')->count();
//        $pagination = new Pagination(['totalCount' => $count,'pageSize' =>5]);
//        //每页显示的数据
//        $info = $query->select('*')
//                     ->from('home_user')
//                     ->offset($pagination->offset)
//                     ->limit($pagination->limit)
//                     ->orderBy('home_id asc')
//                     ->all();
//        return array(
//            'count'      => $count,
//            'pagination' => $pagination,
//            'info'       => $info
//        );
//    }
    
    /**
     * 查询单个用户信息
     */
    public function memberinfo($home_id){
        $query = new Query();
        return $query->select("*")
                     ->from('home_user')
                     ->where(['home_id' => $home_id])
                     ->one();
    }
    
    /**
     * 用户修改
     */
    public function member_update($home_id, $home_name, $home_phone, $login_new_pwd){
        return Yii::$app->db->createCommand()->update('home_user', [
            'home_name' => $home_name,
            'home_phone' => $home_phone,
            'home_pwd' => $login_new_pwd
        ], 'home_id='."$home_id")->execute();
    }
    
    /**
     * 会员添加
     */
    public function Memberadd($home_name, $home_phone, $home_sex){
        $time = date('Y-m-d H:i:s');
        return Yii::$app->db->createCommand()->insert('home_user', [
            'home_name'        => $home_name,
            'home_phone'       => $home_phone,
            'home_sex'         => $home_sex,
            'home_create_time' => $time
        ])->execute();
    }
    
    /**
     * 删除会员
     */
    public function memberdel($home_id){
        return Yii::$app->db->createCommand()->delete('home_user', [
            'home_id' => $home_id
        ])->execute();
    }
}
