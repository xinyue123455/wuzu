<?php
namespace frontend\controllers;
use yii\data\Pagination;
use yii\web\Controller;
use yii;
use db;

class IndexController extends Controller{
	// public $enableCsrfValidation = false;
	public function actionIndex(){
	  	return $this->renderPartial('index');
	}
	public function actionSearch(){
return $this->renderPartial('search');
	}
	public function actionNew(){
return $this->renderPartial('new');
	}
	public function actionHot(){
return $this->renderPartial('hot');
	}
	public function actionPerson(){
return $this->renderPartial('person');
	}
	public function actionYhq(){
return $this->renderPartial('yhq');
	}
}