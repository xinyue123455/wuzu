<?php
namespace backend\models;

use Yii; 
use yii\db\Query;
use yii\base\Model;

class Comment extends Model{
    /**
     * 评论主页显示
     */
    public function commentsel(){
        $query = new Query();
        //评论数据
        $data = $query->select('*')
                      ->from('comment')
                      ->all();
        //分类数据
        $classify = $query->select('*')->from('comment_classify')->all();
        return array(
            'data'     => $data,
            'classify' => $classify
        );
    }
    
    /**
     * 评论按照分类显示
     */
    public function commentsel_classify($comment_classify_name){
        $query = new Query();
        //评论数据
        $data = $query->select('*')
                      ->from('comment')
                      ->where(['comment_classify_name' => $comment_classify_name])
                      ->all();
        
        return array(
            'data'     => $data
        );
    }
    
    /**
     * 查看单条评论数据
     */
    public function comment_info_one($comment_id){
        $query = new Query();
        return $query->select("*")
                     ->from('comment')
                     ->where(['comment_id' => $comment_id])
                     ->one(); 
    }
    
    /**
     * 修改评论状态
     */
    public function commentinfo_set($comment_id){
        $query = new Query();
        $comment_status = $query->select("comment_status")
                     ->from('comment')
                     ->where(['comment_id' => $comment_id])
                     ->one();
        if($comment_status['comment_status'] === '1'){
            return Yii::$app->db->createCommand()->update('comment', [
                'comment_status' => '0',
            ], 'comment_id='."$comment_id")->execute();
        }else{
            return Yii::$app->db->createCommand()->update('comment', [
                'comment_status' => '1',
            ], 'comment_id='."$comment_id")->execute();
        }
    }
}
