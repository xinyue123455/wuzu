<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Home_user;

class FinanceController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }
    
    /**
     * 账单列表
     */
    public function actionFinance_index(){
        return $this->render('finance_index');
    }
    
    /**
     * 财务流水
     */
    public function actionFinance_account(){
        return $this->render('finance_account');
    }
    
    /**
     * 会员信息
     */
    public function actionFinance_pay_info(){
        return $this->render('finance_pay_info');
    }
}
