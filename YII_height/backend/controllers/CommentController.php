<?php

namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;
use backend\models\Comment;

class CommentController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }
    
    /**
     * 评论主页
     */
    public function actionComment_index(){
        $model = new Comment;
        $query = new Query();
        $comment_classify_name = Yii::$app->request->post('comment_classify_name');
        if(Yii::$app->request->isPost && $comment_classify_name != '0'){
            $classify = $query->select('*')->from('comment_classify')->all();//分类数据
            $info = $model->commentsel_classify($comment_classify_name);
            return $this->render('comment_index',[
                'info'         => $info['data'],
                'comment_info' => $classify
            ]);
        }else{
            $info = $model->commentsel();
            return $this->render('comment_index',[
                'info'         => $info['data'],
                'comment_info' => $info['classify']
            ]);
        }
    }
    
    /**
     * 查看单条评论
     */
    public function actionComment_info(){
        $comment_id = yii::$app->request->get('comment_id');
        $model = new Comment;
        $info_one = $model->comment_info_one($comment_id);
        return $this->render('comment_info', [
            'info_one' => $info_one
        ]);
    }
    
    /**
     * 修改当前评论的状态
     */
    public function actionComment_set(){
        $comment_id = yii::$app->request->get('comment_id');
        $model = new Comment;
        $model->commentinfo_set($comment_id);
        $info_one = $model->comment_info_one($comment_id);
        return $this->render('comment_info', [
            'info_one' => $info_one
        ]);
    }
    
}
