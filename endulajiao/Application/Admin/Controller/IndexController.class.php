<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index()
    {
        
        if(empty($_SESSION['name']))
      {   session('name',null);
          $this->success('请先登录', 'login');
      }
      else
      {

       $this->display();

      }
    }
    /*登录功能*/
    public function login()
    {

        if($_POST)
        {
            $username = $_POST['username'];
            $pwd      = md5($_POST['pwd']);
            if($username)
             {
                    $data = M('user')->where(array('username' =>$username))->find();
                    $name = $data['username'];
                    $pwd1  = $data['pwd'];            
                    if($name == $username)
                    {

                        if($pwd1 == $pwd)
                        {

                          session_start();
                          session("name",$name); 
                          $this->success('登录成功','index');

                        }
                        else
                        {

                          $this->success('密码错误','login');

                        }

                    }
                    else
                    {

                        $this->success('用户名错误','login');

                    }

             }  
             else
             {

                   $this->success('账号不能为空','login'); 
             } 
        }
        else
        {
             $this->display();
        }
    }

    /*添加轮播图*/
    public function shang()
    {

        $title = $_POST['title'];

        $file=$this->do_upload('file_name');
         $m = M("lunbo");
              $obj = array(
                "title" => $title,
                "img" => $file
              );
         $data=$m->add($obj);

         if($data)
         {
            $this->success('轮播图添加成功','index');
         }
         else
         {
            $this->success('轮播图添加失败','index');
         }

    }
    /*美食百科*/
    public function meishi()
    {

      $tuijian = $_POST['tuijian'];
    
      $title = $_POST['title'];

      $file=$this->do_upload('file_name');

      $m = M("meishi");
              $obj = array(
                "title" => $title,
                "tuijian" => $tuijian,
                "img" => $file
              );
      $data=$m->add($obj);
       if($data)
         {

            $this->success('信息添加成功','index');
         }
         else
         {

            $this->success('信息添加失败','index');

         }

    }
    /*图片上传类*/
    public function do_upload($logo,$path='./Public/Uploads')
    {
        $fileInfo=$_FILES['file_name'];

        $maxSize=2097152;//允许的最大值

        $allowExt=array('jpeg','jpg','png','gif','wbmp');//允许的类型

        $flag=true;//检测是否为真实图片类型
        //判断错误号

        if ($fileInfo['error']==0) {
          //判断上传文件的大小
          if ($fileInfo['size']>$maxSize) exit('上传文件大小不符合规则');

          $ext = strtolower(pathinfo($fileInfo['name'],PATHINFO_EXTENSION));
          
          if (!in_array($ext,$allowExt)) exit('非法文件类型');

          if (!is_uploaded_file($fileInfo['tmp_name'])) exit('文件不是通过HTTP POST方式上传的');

          //检测是否是真实图片类型
          if ($flag)
          {
            if (@!getimagesize($fileInfo['tmp_name']))
            {
              exit('不是真正的图片类型');
            }
          }

          if (!file_exists($path))
          {
            mkdir($path,0777,true);
            chmod($path,0777);
          }
          //确保文件名唯一防止产生覆盖
          $nuiName=md5(uniqid(microtime(true),true)).'.'.$ext;

          $destination=$path.'/'.$nuiName;

          if (@move_uploaded_file($fileInfo['tmp_name'], $destination))
          {
            return $destination;
          }
          else
          {
            return 'error';
          }
        }
        else
        { 
          return false;
          // $this->uploads_error($fileInfo['error']);//验证错误类型
        }
     }

}
