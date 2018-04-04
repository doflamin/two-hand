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
    

    public function index()
    {
        $results = $this->Ads_model->get_little_ads_list();       
        $this->load->view('index.php',array('list'=> $results ));
       
    }
    public function upload()
    {
        $this->load->view('upload.php');
    }


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

    public function myads()
    {
        $user = $this->session->userdata('user');  
        $results = $this->Ads_model->get_my_ads_list($user);       
        $this->load->view('myads.php',array('list'=> $results,'user'=>$user ));
    }
    public function signin()
    {
        $this->load->view('signin.php');
    }

    public function bikes()
    {


        //商品信息存入session中
        $results = $this->Ads_model->get_bikes_list();
        $this->load->view('bikes.php',array('list'=> $results ));
    }

    public function cars()
    {
        $results = $this->Ads_model->get_car_list();
        $this->load->view('cars.php',array('list'=> $results ));
    }
        
        

    public function categories()
    {
        $results = $this->Ads_model->get_ads_list();       
        $this->load->view('categories.php',array('list'=> $results ));
    }

    public function electronicsappliances()
    {
        $results = $this->Ads_model->get_electronicsappliances_list();
        $this->load->view('electronics-appliances.php',array('list'=> $results ));
    }

    public function feedback()
    {
        $this->load->view('feedback.php');
    }

    public function mobiles()
    {
        $results = $this->Ads_model->get_mobiles_list();
        $this->load->view('mobiles.php',array('list'=> $results ));
    }

    public function postad()
    {
        $this->load->view('post-ad.php');
    }

    public function signup()
    {
        $this->load->view('signup.php');
    }

    public function single()
    {
        $ids = $this->input->get('id');
        

        $results = $this->Ads_model->get_resreash_msg($ids);
        $results2 = $this->Ads_model->get_comment($ids);
        $this->load->view('single.php',array('list'=> $results,'list2'=>$results2));
        
    }

    //登陆逻辑
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
    //添加评论
    public function add_comment()
    {
        $comment = $this->input->get('comment');
        $ids = $this->input->get('id');
        $rows = $this->Ads_model->add_comment(array(
            'comment_content' => $comment,
            'ads_id'=>$ids
            
        ));
        if ($rows <= 0) {
           
        } else {
            $ids = $this->input->get('id');
            
    
            $results = $this->Ads_model->get_resreash_msg($ids);
            $results2 = $this->Ads_model->get_comment($ids);
            $this->load->view('single.php',array('list'=> $results,'list2'=>$results2));
            // redirect("user/single");
           
        }

    }
  
   


//添加商品信息
//     public function post_ad()
//     {
//         $adsname = $this->input->get('title');
//         $describe = $this->input->get('describe');      
//         $phone = $this->input->get('phone');
//         $adstype = $this->input->get('adstype');
//         $price = $this->input->get('price');
//         $userid = $this->input->get('userid');
//         $photo = $this->input->get('str');
//         $photo_all="./uploads/".$photo;

//         $rows = $this->User_model->publish_ads(array(      
//             'adsname' => $adsname,
//             'describe' => $describe,
//             'photo' => $photo,
//             'adstype'=>$adstype,
//             'price'=>$price,
//             'user_id'=>$userid,
//             'photo'=>$photo_all
//         ));
//         if ($rows <= 0) {
//             echo 'error';
//         } else {
//             $this->load->view('signin.php');
//         }
        
       

    
   

// }

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


public function del_ads(){
      
    $ids = $this->input->get('id');
    $rows = $this->Ads_model->del_ads_by_id($ids);
    if($rows>0){
        echo 'success';
    }
}

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

// public function refreash(){
    
//   $ids = $this->input->get('id');
//   $rows = $this->Ads_model->del_ads_by_id($ids);
//   if($rows>0){
//       echo 'success';
//   }
// }
}
?>
