<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Home_user;

class AccountController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }
    
    /**
     * 账户列表
     */
    public function actionAccount_index(){
        return $this->render('account_index');
    }
    
    /**
     * 账户信息
     */
    public function actionAccount_info(){
        return $this->render('account_info');
    }
    
    /**
     * 会员信息
     */
    public function actionAccount_set(){
        return $this->render('account_set');
    }
}
