<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller {

    public function index() {


        dump(db('admin')->find(1));


        return $this->fetch('index', ['id' => '1']);
    }

    public function hello($id) {

    }
}
