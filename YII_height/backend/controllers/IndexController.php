<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Home_user;

class IndexController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }
    
    /**
     * 会员列表
     */
    public function actionIndex(){
        $model = new Home_user;
        $data = $model->membersel();
        return $this->render('index',[
            'count' => $data['count'],
            'info' => $data['info']
        ]);
    }
    /**
     * 会员列表 -- 分页
     */
//    public function actionindex(){
//        $model = new Home_user;
//        $data = $model->membersel();
//        return $this->render('index',[
//            'count' => $data['count'],
//            'info' => $data['info'],
//            'page' => $data['pagination']
//        ]);
//    }
    
    /**
     * 会员评论
     */
    public function actionMember_comment(){
        return $this->render('member_comment');
    }
    
    /**
     * 会员信息
     */
    public function actionMember_info(){
        $home_id = Yii::$app->request->get("home_id");
        $model = new Home_user;
        $member_info_one = $model->memberinfo($home_id);
        return $this->render('member_info', [
            'member_info_one' => $member_info_one
        ]);
    }
    
    /**
     * 会员设置
     */
    public function actionMember_set(){
        $home_id = Yii::$app->request->get("home_id");
        $model = new Home_user;
        $member_info_one = $model->memberinfo($home_id);
        return $this->render('member_set', [
            'member_info_one' => $member_info_one,
        ]);
    }
    /**
     * 会员设置--执行修改
     */
    public function actionMember_set_update(){
        $model = new Home_user;
        $home_id = Yii::$app->request->post("home_id"); //获取要修改的会员id
        $member_info_one = $model->memberinfo($home_id);
        $home_name = Yii::$app->request->post("home_name"); //接收修改后的会员名称
        $home_phone = Yii::$app->request->post("home_phone"); //接收修改后的会员手机号
        $login_pwd = Yii::$app->request->post("login_pwd"); //接收原来的会员密码,可判断是否正确
        $login_new_pwd = Yii::$app->request->post("login_new_pwd"); //接收修改后的会员密码
        if($login_pwd == $member_info_one['home_pwd']){
            $model->member_update($home_id, $home_name, $home_phone, $login_new_pwd);
            $this->redirect('?r=index/index');
        }else{
            echo "<script>alert('原密码错误');</script>";
            return $this->render('member_set', [
                'member_info_one' => $member_info_one,
            ]);
        }
        
    }
    
    /**
     * 会员添加
     */
    public function actionMember_insert(){
        if(Yii::$app->request->isPost){
            $home_name  = Yii::$app->request->post("home_name");
            $home_phone = Yii::$app->request->post("home_phone");
            $home_sex   = Yii::$app->request->post("home_sex");
            $model = new Home_user;
            $model->Memberadd($home_name, $home_phone, $home_sex);
            $this->redirect('?r=index/index');
        }else{
            return $this->render('member_inster');
        }
    }
    
    /**
     * 修改密码
     * 获取当前用户id
     */
    public function actionMember_update(){
        return $this->render('member_update');
    }
    
    /**
     * 会员删除
     */
    public function actionMember_del(){
        $home_id = Yii::$app->request->get("home_id");
        $model = new Home_user;
        $model->memberdel($home_id);
        $this->redirect('?r=index/index');
    }
}
