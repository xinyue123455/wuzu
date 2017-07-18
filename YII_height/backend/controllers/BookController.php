<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Home_user;

class BookController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }
    
    /**
     * 图书列表
     */
    public function actionBook_index(){
        return $this->render('book_index');
    }
    
    /**
     * 分类列表
     */
    public function actionBook_cat(){
        return $this->render('book_cat');
    }
    
    /**
     * 图片资源
     */
    public function actionBook_images(){
        return $this->render('book_images');
    }
    
    /**
     * 
     */
    public function actionBook_cat_set(){
        return $this->render('book_cat_set');
    }
    
    /**
     * 图书信息
     */
    public function actionBook_info(){
        return $this->render('book_info');
    }
    

    
    /**
     * 
     */
    public function actionBook_set(){
        return $this->render('book_set');
    }
}
