<?php

namespace backend\controllers;

use Yii;
use yii\db;
class LogController extends \yii\web\Controller
{
	private $data;
	private $type;
	private $error=false;
	private $post;
	private $msg;
	protected $table='bo_user';
	public function init(){
		$this->post = $post = Yii::$app->request->post();
		$this->post = $post = ['type'=>'show','user_name'=>13,'user_pwd'=>1];


		if (!$this->post())$this->actionIndex();
		$this->$post['type']();
			
	}

	public function add(){
		$data = $this->post;
		$post = Yii::$app->db->createCommand('SELECT * FROM '.$this->table.' WHERE user_name="'.$data['user_name'].'"')
          ->queryOne();
        if ($post) {
			$this->error='用户名已存在';
        	return ;
        }
        $bool = Yii::$app->db->createCommand()->insert($this->table,
           		[
       			'user_name'=>$data['user_name'],
       			'user_pwd'=>md5($data['user_pwd']),
       			'create_time'=>time(),
       			]
            )->execute();
       if ($bool) {
       	  $this->msg = '添加成功';
          return true;
       }


	}
	public function post(){
		$post = $this->post;
        if (empty($post['type'])){
           $this->error = ['error'=>['type不存在']];
           return false;
        }
        $type = ['add','del','save','show'];
        if (in_array($post['type'],$type)) {
            $this->type=$post['type'];
        }else{
              $this->error = ['error'=>'type类型错误'];
               return false;
        }
        return true;

	}
    public function actionIndex()
    {		
    	if ($this->error) {
    		$arr = [
    			'error'=>$this->error,
    		];
    	}
    	if ($this->msg) {
    		$arr = [
    			'msg'=>$this->msg
    		];
    	}
    	
		 	print_r($arr);
		 	exit();
    }

    public function show(){
    	$data = $this->post;
    	$post = Yii::$app->db->createCommand('SELECT * FROM '.$this->table.' WHERE user_name="'.$data['user_name'].'" and user_pwd = "'.md5($data['user_pwd']).'"')
          ->queryOne();
        if ($post) {
        	 $session = Yii::$app->session;
        	 $session->set('user',$post);
        	 $this->msg = '登录成功';
        }

    }

    public function destory(){
    	unset($_SESSION['user']);
    }

}