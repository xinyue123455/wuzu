<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Brand;

header("content-type:text/html;charset=utf-8");

class BrandController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }

    /**
     * 商城信息
     */
    public function actionBrand_info(){
        $brand = new brand;
        $arr = $brand->getone();
        return $this->render('brand_info',['arr' => $arr]);
    }
    
    /**
     * 商城修改
     */
    public function actionBrand_set(){
        $brand = new brand;
        if(Yii::$app->request->isPost){
            $request = Yii::$app->request->post();
            $brand_id = $request['brand_id'];
            
            unset($request['_csrf-backend']);
            unset($request['brand_id']);
            // print_r($request);
            $res = $brand->save($request,$brand_id);
            // print_r($res);
            if($res)
            {
                $this->redirect("?r=brand/brand_info");
            }
            else
            {
                echo "<script>alert('数据库发生未知错误！请从新输入。');history.back();</script>";
            }
        }else{
            $arr = $brand->getone();
            return $this->render('brand_set',['arr' => $arr]);
        }
        

    }
    
    
}
