<?php

namespace backend\controllers;

use yii\data\Pagination;
use yii\web\Controller;
use yii;
use db;
class CombinationController extends Controller {

    public function actionAdd(){
        $sql = "select * from type inner join xian on type.p_id=xian.id";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->query();
        return $this->render('combination_add',['data'=>$data]);
    }
    public function actionDoing(){
        $arr = \Yii::$app->request->post('comb_id');
        $string = implode(",", $arr);
        // echo $string;die;
        $sql = "select * from comb where combination ='$string'";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->execute();
        if($data != null){
            echo "<script>alert('菜品已组合，不可重复组合！');location.href='?r=combination/add'</script>";
       }else{
        $sql = "insert into comb(combination)values('$string')";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->query();
        echo "<script>alert('菜品组合完成');location.href='?r=type/show'</script>";
       }     
    }   
}

