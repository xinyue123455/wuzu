<?php

namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;
use backend\models\Home_user;

class QrcodeController extends Controller {
    public function __construct($id, $module, $config = array()){
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
        if(!Yii::$app->session->has('login_name')) {
            echo "<script>alert('请先登录');location.href='?r=user/user_login'</script>";
        }
    }
    
    /**
     * 用户来源
     */
    public function actionQrcode_from(){
        $model = new Home_user;
        $data = $model->membersel();
        return $this->render('qrcode_from',[
            'count' => $data['count'],
            'user_form_info' => $data['info']
        ]);
    }
    
    /**
     * 用户信息
     */
    public function actionQrcode_info(){
        $home_id = Yii::$app->request->get("home_id");
        $model = new Home_user;
        $member_info_one = $model->memberinfo($home_id);
        return $this->render('qrcode_info', [
            'member_info_one' => $member_info_one
        ]);
    }
    
    /**
     * 新增用户
     * 今天注册的用户
     * 当前时间减去3600*24,得到24个小时前的时间戳
     * 然后再判断哪个时间戳比这个大就是24小时内注册的
     */
    public function actionQrcode_new_user(){
        //查询出今天注册的用户
        $time_info = Yii::$app->db->createCommand("SELECT * FROM home_user where DATE_FORMAT(FROM_UNIXTIME(UNIX_TIMESTAMP(home_create_time)),'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d')")->queryAll();
        return $this->render('qrcode_new_user',[
            'time_info' => $time_info,
            'user_count' => count($time_info)
        ]);
    }
    
    /**
     * 用户搜索
     */
    public function actionQrcode_sear(){
        if(Yii::$app->request->isPost){
            $sear_time = yii::$app->request->post('sear_time');
            $sear_phone = yii::$app->request->post('sear_phone');
            //当天注册的用户
            if($sear_time == '0'){
                $time_info = Yii::$app->db->createCommand("SELECT * FROM home_user where DATE_FORMAT(FROM_UNIXTIME(UNIX_TIMESTAMP(home_create_time)),'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') and home_phone like '%$sear_phone%'")->queryAll();
                if($time_info){
                    foreach($time_info as $key=> $value){
                        $red = "<font color=red>".$sear_phone."</font>";
                        $time_info[$key]['home_phone'] = str_replace($sear_phone, $red, $value['home_phone']);
                    }
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '今天注册的用户'
                    ]);
                }else{
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '在今天注册的用户,没有找到你要找的用户信息'
                    ]);
                }
            }
            
            /**
             * 最近七天注册用户
             * 找到当前时间减去3600*24*7 小于 用户注册时间 得出的就是最近七天注册用户
             */
            if($sear_time == '7'){
                $time_info = Yii::$app->db->createCommand("SELECT * FROM home_user where UNIX_TIMESTAMP(home_create_time) > UNIX_TIMESTAMP(NOW())-3600*24*7 and home_phone like '%$sear_phone%'")->queryAll();
                if($time_info){
                    foreach($time_info as $key=> $value){
                        $red = "<font color=red>".$sear_phone."</font>";
                        $time_info[$key]['home_phone'] = str_replace($sear_phone, $red, $value['home_phone']);
                    }
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '最近七天注册用户'
                    ]);
                }else{
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '在最近七天注册用户,没有找到你要找的用户信息'
                    ]);
                }
            }
            
            /**
             * 最近一个月注册用户
             * 找到当前时间减去3600*24*30 小于 用户注册时间 得出的就是最近七天注册用户
             */
            if($sear_time == '30'){
                $time_info = Yii::$app->db->createCommand("SELECT * FROM home_user where UNIX_TIMESTAMP(home_create_time) > UNIX_TIMESTAMP(NOW())-3600*24*30 and home_phone like '%$sear_phone%'")->queryAll();
                if($time_info){
                    foreach($time_info as $key=> $value){
                        $red = "<font color=red>".$sear_phone."</font>";
                        $time_info[$key]['home_phone'] = str_replace($sear_phone, $red, $value['home_phone']);
                    }
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '最近一个月注册用户'
                    ]);
                }else{
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '在最近一个月注册用户,没有找到你要找的用户信息'
                    ]);
                }
            }
            
            /**
             * 最近三个月注册用户
             * 找到当前时间减去3600*24*90 小于 用户注册时间 得出的就是最近七天注册用户
             */
            if($sear_time == '90'){
                $time_info = Yii::$app->db->createCommand("SELECT * FROM home_user where UNIX_TIMESTAMP(home_create_time) > UNIX_TIMESTAMP(NOW())-3600*24*90 and home_phone like '%$sear_phone%'")->queryAll();
                if($time_info){
                    foreach($time_info as $key=> $value){
                        $red = "<font color=red>".$sear_phone."</font>";
                        $time_info[$key]['home_phone'] = str_replace($sear_phone, $red, $value['home_phone']);
                    }
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '最近三个月注册用户'
                    ]);
                }else{
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '在最近三个月注册用户,没有找到你要找的用户信息'
                    ]);
                }
            }
            
            /**
             * 最近半年注册用户
             * 找到当前时间减去3600*24*180 小于 用户注册时间 得出的就是最近七天注册用户
             */
            if($sear_time == '180'){
                $time_info = Yii::$app->db->createCommand("SELECT * FROM home_user where UNIX_TIMESTAMP(home_create_time) > UNIX_TIMESTAMP(NOW())-3600*24*180 and home_phone like '%$sear_phone%'")->queryAll();
                if($time_info){
                    foreach($time_info as $key=> $value){
                        $red = "<font color=red>".$sear_phone."</font>";
                        $time_info[$key]['home_phone'] = str_replace($sear_phone, $red, $value['home_phone']);
                    }
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '最近半年注册用户'
                    ]);
                }else{
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '在最近半年注册用户中,没有找到你要找的用户信息'
                    ]);
                }
            }
            
            /**
             * 最近一年注册用户
             * 找到当前时间减去3600*24*365 小于 用户注册时间 得出的就是最近七天注册用户
             */
            if($sear_time == '365'){
                $time_info = Yii::$app->db->createCommand("SELECT * FROM home_user where UNIX_TIMESTAMP(home_create_time) > UNIX_TIMESTAMP(NOW())-3600*24*365 and home_phone like '%$sear_phone%'")->queryAll();
                if($time_info){
                    foreach($time_info as $key=> $value){
                        $red = "<font color=red>".$sear_phone."</font>";
                        $time_info[$key]['home_phone'] = str_replace($sear_phone, $red, $value['home_phone']);
                    }
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '最近一年注册用户'
                    ]);
                }else{
                    return $this->render('qrcode_new_user',[
                        'time_info' => $time_info,
                        'user_count' => count($time_info),
                        'text_info' => '在最近一年注册用户中,没有找到你要找的用户信息'
                    ]);
                }
            }
        }else{
            $this->redirect('?r=qrcode/qrcode_new_user');
        }
    }

    
}
