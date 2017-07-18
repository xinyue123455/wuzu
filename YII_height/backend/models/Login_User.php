<?php

namespace backend\models;

use Yii;
use yii\db\Query;
use yii\base\Model;

class Login_User extends Model{
    /**
     * 登录处理
     * 0：用户名不存在
     * 1：登录成功
     * 2：密码错误
     */
    public function login_query($login_name,$login_pwd){
        $query = new Query();
        $login_data = $query->select("*")->from('user')->where(['login_name' => $login_name])->one(); //判断用户名是否存在
        if($login_data && $login_data['login_pwd'] == $login_pwd){
            // 在要发送的响应中添加一个新的session,用于判断用户是否登录
            Yii::$app->session->set('login_name', $login_name);
//            Yii::$app->response->cookies->add(new \yii\web\Cookie([
//                'name'  => 'login_name',
//                'value' => $login_name,
//            ]));
            return 1;
        }else{
            return 0;
        }
    }
    
    /**
     * 添加注册
     */
    public function log_add($username,$pwd){
        $query = new Query;
        $is_username = $query->select("*")->from('user')->where(['uname' => $username])->one();
        if($is_username){
            return 0;
        }else{
            return Yii::$app->db->createCommand()->insert('user', [
                'uname' => $username,
                'pwd'  => $pwd,
            ])->execute();
        }
    }
}
