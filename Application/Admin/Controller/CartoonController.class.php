<?php
namespace Admin\Controller;
use Think\Controller;
class CartoonController extends Controller {
    public function add(){
        $this -> display();
    }

    public function insert(){
    	$cartoon = M('Cartoon');
    	$cartoon -> create();
    	$cartoon -> create_time = time();
    	if($cartoon -> add()){
    		$this -> success("添加成功！",U('add'));
    	}
    	
    }
}