<?php 
namespace backend\controllers;

use Yii;
use yii\db;
class PageController extends \yii\web\Controller
{
	private $sum_total;   //总条数
	private $sum_page;    //总页数
	private $limit = 5;
	private $table = 'bobo_';



	public function init(){

	}

	public function actionIndex(){
		$arr = ['柴聪'];
		echo  $_GET['callback'].'('.json_encode($arr).')';
	}


}	






 ?>