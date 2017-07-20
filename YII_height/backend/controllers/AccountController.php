<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Admin_User;

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
        $model = new Admin_user;
        $info = $model->admin_user_info();
        return $this->render('account_index', [
            'info' => $info
        ]);
    }
    
    /**
     * 账户信息--单个账户
     */
    public function actionAccount_info(){
        $model = new Admin_user;
        $user_id = Yii::$app->request->get("user_id"); //接收id
        $admin_info_one = $model->admin_user_one($user_id);
        return $this->render('account_info', [
            'admin_info_one' => $admin_info_one
        ]);
    }
    
    /**
     * 会员信息
     */
    public function actionAccount_set(){
        return $this->render('account_set');
    }
}
