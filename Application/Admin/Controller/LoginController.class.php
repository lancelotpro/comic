<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	/**
		登录界面
	*/
    public function index(){
        $this -> display();
    }

    public function login(){
    	$this -> success('登录成功',U('Index/index'),1);
    }

    public function logout(){

    }

    /**
		验证码生成
    */
    public function get_verify(){
    	$config = array(
		'fontSize' => 15, // 验证码字体大小
		'length' => 4, // 验证码位数
		'useNoise' => false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
    }

    /**
    	验证
    */
    public function verifycode($code, $id = ''){
        $verify = new \Think\Verify();
        $result = $verify -> check($code, $id);
        return $this -> $result;
    }



}