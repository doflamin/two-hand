<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    //构造函数
    public function __construct()
    {
        parent::__construct();
        //每次进入该控制器都会调用这个函数
        $this->load->model("User_model");
        $this->load->model("Ads_model");
        $this->load->helper(array('form', 'url'));
        
        
        
    }
    
//以下是页面加载逻辑模块-------------------------------------------------------------------------------------------------------------------------------------------------
//加载主页
    public function index()
    {
        $results = $this->Ads_model->get_little_ads_list();       
        $this->load->view('index.php',array('list'=> $results ));
       
    }
    

//加载修改我的物品信息
    public function refreash()
    {
        $ids = $this->input->get('id');
        // $rows = $this->Ads_model->get_resreash_msg($ids);  
       
        $results = $this->Ads_model->get_resreash_msg($ids);       
        $this->load->view('refreash.php',array('list'=> $results));

        // if($rows>=0){
        //     echo 'success';
        // }
        // $this->load->view('refreash.php');
    }
//加载我的物品列表
    public function myads()
    {
        $user = $this->session->userdata('user');  
        $results = $this->Ads_model->get_my_ads_list($user);       
        $this->load->view('myads.php',array('list'=> $results,'user'=>$user ));
    }
//加载登录界面
    public function signin()
    {
        $this->load->view('signin.php');
    }
//加载摩托界面
    public function bikes()
    {


        //商品信息存入session中
        $results = $this->Ads_model->get_bikes_list();
        $this->load->view('bikes.php',array('list'=> $results ));
    }
// 加载汽车界面
    public function cars()
    {
        $results = $this->Ads_model->get_car_list();
        $this->load->view('cars.php',array('list'=> $results ));
    }
        
        
//加载所有商品界面
    public function categories()
    {
        $results = $this->Ads_model->get_ads_list();       
        $this->load->view('categories.php',array('list'=> $results ));
    }
//加载电子电器界面
    public function electronicsappliances()
    {
        $results = $this->Ads_model->get_electronicsappliances_list();
        $this->load->view('electronics-appliances.php',array('list'=> $results ));
    }
//加载反馈界面
    public function feedback()
    {
        $this->load->view('feedback.php');
    }
//加载手机界面
    public function mobiles()
    {
        $results = $this->Ads_model->get_mobiles_list();
        $this->load->view('mobiles.php',array('list'=> $results ));
    }
//加载上传物品界面
    public function postad()
    {
        $this->load->view('post-ad.php');
    }
//加载注册界面
    public function signup()
    {
        $this->load->view('signup.php');
    }
//加载商品详细信息界面
    public function single()
    {
        $ids = $this->input->get('id');
        

        $results = $this->Ads_model->get_resreash_msg($ids);
        $comment_results = $this->Ads_model->get_comment($ids);
        $reply_results = $this->Ads_model->get_reply($ids);
        $this->load->view('single.php',array('list'=> $results,'comment_results'=>$comment_results,'reply_results'=>$reply_results));
        
    }

    //登陆,注册界面逻辑------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function login_check()
    {
        //从view页面获取用户名和密码
        $name = $this->input->get('name');
        $pwd = $this->input->get('pwd');

        //查询数据库
        $result = $this->User_model->check_login($name);

        //存在
        if (count($result) > 0) {
            if ($result[0]->password == $pwd) {
                //密码正确


                //将用户的信息存入session中
                $this->session->set_userdata(array(
                    "user" => $result[0]
                ));


                echo 'success';


            } else {
                //密码错误
                echo 'pwd-error';

            }

        } else {
            //不存在
            echo 'user-no-exit';

        }

    }


    //注册逻辑,添加用户
    public function add_user()
    {
        $name = $this->input->get('name');
        $nickname = $this->input->get('nickname');
        $email = $this->input->get('email');
        $phone = $this->input->get('phone');
        $pwd = $this->input->get('pwd');


        //调用User_model的add方法,参数为数组对象
        $rows = $this->User_model->add_user(array(
            'username' => $name,
            'nickname' => $nickname,
            'email' => $email,
            'password' => $pwd,
            'phone' => $phone
        ));

        if ($rows <= 0) {
            echo '<script>alert("系统错误，请稍后重试！")</script>';
            redirect('User/signup');
        } else {
            $this->load->view('signin.php');
        }
    }//add_user


    //校验用户名是否存在
    public function check_name()
    {
        $name = $this->input->get('name');

        $result = $this->User_model->check_name($name);

        if (count($result) > 0) {
            echo "already";
        }


    }//check_name


    //退出登录
    public function exit_login()
    {

        $this->session->unset_userdata('user');
        redirect("User/index");


    }
//以下是发布，购买等功能逻辑--------------------------------------------------------------------------------------------------------------------------------------
    //添加评论
    public function add_comment()
    {
        $comment = $this->input->get('comment');
        $ids = $this->input->get('id');
        $commenter = $this->input->get('commenter');
        $rows = $this->Ads_model->add_comment(array(
            'comment_content' => $comment,
            'ads_id'=>$ids,
            'commenter'=>$commenter

            
        ));
        if ($rows <= 0) {
           
        } else {

            $ids = $this->input->get('id');
            $results = $this->Ads_model->get_resreash_msg($ids);
            $comment_results = $this->Ads_model->get_comment($ids);
            $reply_results = $this->Ads_model->get_reply($ids);
            $this->load->view('single.php',array('list'=> $results,'comment_results'=>$comment_results,'reply_results'=>$reply_results));
            // redirect("user/single");
           
        }

    }
  
   
//添加商品逻辑
public function do_upload()
{
    
    $config['upload_path']      = './uploads/';
    $config['allowed_types']    = 'gif|jpg|png';
    $config['max_size']     = 1000;
    $config['max_width']        = 1024;
    $config['max_height']       = 768;
    // $config['file_name']       = 1;
    $photo_all = 'uploads/'.$_FILES['userfile']['name'];
    

    $this->load->library('upload', $config);
    $this->upload->do_upload('userfile');
    

    $adsname = $this->input->post('title');
    $describe = $this->input->post('describe');      
    $phone = $this->input->post('phone');
    $adstype = $this->input->post('adstype');
    $price = $this->input->post('price');
   
                                                       
    $user = $this->session->userdata('user');                                                                                                    
   
    $rows = $this->User_model->publish_ads(array(      
        'adsname' => $adsname,
        'describe' => $describe,
        'adstype'=>$adstype,
        'price'=>$price,
        'user_id'=>$user->user_id,
        'photo'=>$photo_all

    ));
    if ($rows <= 0) {
        $this->load->view('post-ad.php');
    } else {
        $this->load->view('index.php');
    }
}

//删除我的商品
public function del_ads(){
      
    $ids = $this->input->get('id');
    $rows = $this->Ads_model->del_ads_by_id($ids);
    if($rows>0){
        echo 'success';
    }
}
//修改我的商品信息
public function do_update()
{
    
    $config['upload_path']      = './uploads/';
    $config['allowed_types']    = 'gif|jpg|png';
    $config['max_size']     = 1000;
    $config['max_width']        = 1024;
    $config['max_height']       = 768;
    // $config['file_name']       = 1;
    $photo_all = 'uploads/'.$_FILES['userfile']['name'];
    //var_dump($photo_all);
    //die();
    
    $this->load->library('upload', $config);
    // $this->upload->do_update('userfile');
    $this->upload->do_upload('userfile');

    $adsname = $this->input->post('title');
    $describe = $this->input->post('describe');      
    $phone = $this->input->post('phone');
    $adstype = $this->input->post('adstype');
    $price = $this->input->post('price');
    $ids = $this->input->post('id');

    
    
                                                       
    $user = $this->session->userdata('user');                                                                                                    
   
    $rows = $this->Ads_model->update_ads(array(      
        'adsname' => $adsname,
        'describe' => $describe,
        'adstype'=>$adstype,
        'price'=>$price,
        'user_id'=>$user->user_id,
        'photo'=>$photo_all

    ),$ids);

    
    if ($rows <= 0) {
        $this->load->view('refreash.php');
    } else {
        $this->load->view('index.php');
    }
}
//投诉界面逻辑
public function complaint()
{
    $complaint = $this->input->post('complaint');
    $userid =  $this->input->post('userid');
    date_default_timezone_set('Asia/Shanghai');



    $rows = $this->Ads_model->add_complaint(array(      
       'Complaint_content'=>$complaint,
       'Complaint_time'=>date("Y-m-d h:m:s"),
       'user_id'=>$userid
    ));

    if ($rows < 0) {
        echo '<script>alert("系统错误，请稍后重试！")</script>';
     } else {
        echo '<script>alert("反馈成功")</script>';
        $results = $this->Ads_model->get_little_ads_list();       
        $this->load->view('index.php',array('list'=> $results ));
     }

 

   
}
//购买商品逻辑
public function buy()
{
    $user_id = $this->input->get('user_id');
    $ids = $this->input->get('ads_id');
    $title = $this->input->get('title');
    $adstype = $this->input->get('adstype');
    $describe = $this->input->get('describe');
    $price = $this->input->get('price');
    $photo = $this->input->get('photo');


    $rows = $this->Ads_model->add_order(array(      
        'buyer_id'=>$user_id,
        'ads_id'=>$ids,
        'title'=>$title,
        'adstype'=>$adstype,
        'describe'=>$describe,
        'price'=>$price,
        'photo'=>$photo

     ));


     $this->Ads_model->del_ads_by_id($ids);

     if ($rows < 0) {
        echo '<script>alert("系统错误，请稍后重试！")</script>';
     } else {
        echo '<script>alert("购买成功")</script>';
        $results = $this->Ads_model->get_little_ads_list();       
        $this->load->view('index.php',array('list'=> $results ));
     }


}

//回复评论功能

public function reply()
{
    $commenter = $this->input->post('commenter');
    
    
    $reply_content = $this->input->post('reply_content');
    $ids = $this->input->post('id');
    $replyer = $this->input->post('replyer');
    date_default_timezone_set('Asia/Shanghai');


    $rows = $this->Ads_model->add_reply(array(      
        'commenter'=>$commenter,
        'reply_content'=>$reply_content,
        'ads_id'=>$ids,
        'replyer'=>$replyer,
        'reply_time'=>date("Y-m-d h:m:s")
        
     ));

     if ($rows < 0) {
        echo '<script>alert("系统错误，请稍后重试！")</script>';
     } else {
        echo '<script>alert("回复成功")</script>';

        $ids = $this->input->post('id');
        

        $results = $this->Ads_model->get_resreash_msg($ids);
        $comment_results = $this->Ads_model->get_comment($ids);
        $reply_results = $this->Ads_model->get_reply($ids);
        $this->load->view('single.php',array('list'=> $results,'comment_results'=>$comment_results,'reply_results'=>$reply_results));
     }
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------

}
?>
