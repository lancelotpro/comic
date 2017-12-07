<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$cartoon = M("Cartoon");
    	$rows = $cartoon -> order("id desc") -> select();
    	$this -> rows = $rows;
        $this -> display();
    }
}