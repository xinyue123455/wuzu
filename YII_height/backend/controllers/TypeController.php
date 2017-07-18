<?php

namespace backend\controllers;

use yii\data\Pagination;
use yii\web\Controller;
use yii;
use db;
    class TypeController extends Controller {
    // 分类添加
    public function actionXian(){
        $sql = "select * from xian";
        $db=Yii::$app->db;
        $data=$db->createCommand($sql)->queryall(); 
        return $this->render('add',['data'=>$data]);
    }
    public function actionAdd(){
        $name = \Yii::$app->request->post('name');
        $p_id = \Yii::$app->request->post('p_id');
        $t_text = \Yii::$app->request->post('t_text');
        $is_show = \Yii::$app->request->post('is_show');
        $sql = "insert into type(t_name,p_id,t_text,is_show)values('$name','$p_id','$t_text','$is_show')";
        $db=Yii::$app->db;
        $data=$db->createCommand($sql)->execute();
        if($data){
        $sql = "select * from type inner join xian on type.p_id = xian.id";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->queryall();
        return $this->render('show',['data'=>$data]);
        }else{
            echo"分类入库失败";
        }
    }
    public function actionShow(){
        $sql = "select * from type inner join xian on type.p_id = xian.id";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->queryall();
        return $this->render('show',['data'=>$data]);
    }
    public function actionDel_type(){
        $id = \Yii::$app->request->get('id');
        $sql = "delete from type where t_id=$id";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->query();
        $sql = "select * from type";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->query();
        return $this->render('show',['data'=>$data]);
    }
    public function actionUpdate(){
        $id = \Yii::$app->request->get('id');
       // echo $id;die;
        $sql = "select * from type inner join xian on type.p_id=xian.id where type.t_id=$id";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->query();
        return $this->render('type_update',['data'=>$data]);
    }
    public function actionUpdate_query(){
        $name = \Yii::$app->request->post('name');
        $t_text = \Yii::$app->request->post('t_text');
        $is_show = \Yii::$app->request->post('is_show');
        $id = \Yii::$app->request->post('t_id');
        
        $sql = "update type set t_name='$name',t_text='$t_text',is_show='$is_show' where t_id='$id'";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->query();

        $sql = "select * from type";
        $db = Yii::$app->db;
        $data = $db->createCommand($sql)->query();
        return $this->render('show',['data'=>$data]);
    }
       /**
     * 会员列表
     */
    public function actionType(){
        $model = new Type_user;
        $data = $model->membersel();
        return $this->render('show',[
            'count' => $data['count'],
            'info' => $data['info'],
            'page' => $data['pagination']
        ]);
    }
    
    
    /**
     * 会员删除
     */
    public function actionDel(){
        $home_id = Yii::$app->request->get("t_id");
        $model = new Type_user;
        $model->memberdel($t_id);
        return json_encode(1);
    }
}

