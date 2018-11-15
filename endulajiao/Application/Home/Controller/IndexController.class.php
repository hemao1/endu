<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){

        $this->display();

    }

   public function tuijian()
   {

   		$data = M('meishi')->select();
   		if($data)
        {

            $code = 200;
            $message = 'success';

        }
        else
        {

            $code = 404;
            $message = 'fail';
        }

        $result = array('code'=>$code, 'message'=>$message,'data'=>$data);

         $this->ajaxReturn($result,'JSONP');
   }
   
}
