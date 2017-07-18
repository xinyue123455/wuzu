<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Home_user;

class StatController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }
    
    /**
     * 财务统计
     */
    public function actionStat_index(){
        return $this->render('stat_index');
    }
    
    /**
     * 商品售卖
     */
    public function actionStat_product(){
        return $this->render('stat_product');
    }
    
    /**
     * 会员消费统计
     */
    public function actionStat_member(){
        return $this->render('stat_member');
    }
    
    /**
     * 分享统计
     */
    public function actionStat_share(){
        return $this->render('stat_share');
    }
}
