<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Login_User;

class UserController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(Yii::$app->session->has('login_name')) {
            echo "<script>alert('你已经登录过了!');location.href='?r=index/member_index'</script>";
        }
    }
    
    public  $enableCsrfValidation = false; //取消验证
    
    /**
     * 登录页面
     */
    public function actionUser_login(){
        $this->layout = 'login';
        if(Yii::$app->request->isPost){
            $model = new Login_User;
            $login_name = trim(Yii::$app->request->post("login_name"));
            $login_pwd = trim(Yii::$app->request->post("login_pwd"));
            $res = $model->login_query($login_name,$login_pwd);
            
//            $a = '用户名或密码错误';
//            $b = '登录成功';
//            $login_error = mb_convert_encoding($a, "gbk", "utf-8");
//            $login_yes   = mb_convert_encoding($b, "gbk", "utf-8");
            
            if($res === 0){
                echo "<script>alert('用户名或密码错误');location.href='?r=user/user_login'</script>";
            }
            if($res === 1){
                echo "<script>alert('登录成功');location.href='?r=dashboard/dashboard_index'</script>";
            }
        }else{
            return $this->render('user_login');
        }
    }
    
    /**
     * 修改密码
     */
    public function actionUser_reset_pwd(){
        return $this->render('user_reset_pwd');
    }
    
    /**
     * 账号信息编辑
     */
    public function actionUser_edit(){
        return $this->render('user_edit');
    }
    
    /**
     * 退出登录
     */
    public function actionUser_exit(){
        Yii::$app->session->remove('login_name');
        $this->redirect('?r=user/user_login');
    }
    
}