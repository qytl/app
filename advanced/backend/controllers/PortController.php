<?php

namespace backend\controllers;

use Yii;
use yii\db;
class PortController extends \yii\web\Controller
{

    /**
     * 操作数据库
     * type [add,del,save,show]  增 删 改 查
     * @return json
     */
    private $msg;      // 错误信息
    private $data = ['user_name'=>1,'user_pwd'=>'1'];// 返回的详细的信息
    private $get;     //获取地址栏中的数据
    private $type;    //操作类型
    private $table;   //操作的表
    public function init(){
        $this->get = $get = Yii::$app->request->get();
        if (!$this->get()) {
            $this->actionIndex();

        }
        $this->$get['type']();
    
    }

    //必要条件
    public function get(){
        $get = $this->get;
        if (empty($get['type'])) {
           $this->msg = ['error'=>['type不存在']];
           return false;
        }
        $type = ['add','del','save','show'];
        if (in_array($get['type'],$type)) {
            $this->type=$get['type'];
        }else{
              $this->msg = ['error'=>'type类型错误'];
               return false;
        }

        if(empty($get['table'])){
            $this->msg=['error'=>['没有设置表']];
        }
        $tablesquery = Yii::$app->db->createCommand('show tables')
           ->queryAll();
        foreach ($tablesquery as $key => $value) {
             $table[] = $value['Tables_in_bobo'];
        }
        if (in_array($get['table'],$table)) {
             $this->table = $get['table'];
            
        }else{
             $this->msg=['error'=>['你设置的表不存在']];

        }
        return false;





       
    }


    public function add()
    {
        $sqlArr = $this->strimplode(); 
        $sql = 'insert into '.$this->table.' set '.implode(',',$sqlArr);
        Yii::$app->db->createCommand()->insert($this->table,
            $this->data
            )->execute();
    }

    public function strimplode(){
        $data = $this->data;
        $arr = [];
        foreach ($data as $key => $value) {
             $sqlstr[] = $key.'="'.$value.'"'; 
        }
        return $sqlstr;
    }

    public function del()
    {
        echo 'del';
    }

    public function actionIndex()
    {   
    }

    public function show()
    {   
        echo 'show';
    }

    public function save()
    {
        echo 'save';
    }

}
