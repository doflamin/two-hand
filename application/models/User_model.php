<?php

class User_model extends CI_Model
{

    //添加用户（向数据库插入）
    public function add_user($user)
    {
        $this->db->insert('t_user', $user);
        return $this->db->affected_rows();
    }

    //校验用户名是否存在
    public function check_name($name)
    {

        $query = $this->db->get_where('t_user', array('username' => $name));
        return $query->row();   //返回一行的查询结果
    }

    //登录验证
    public function check_login($name)
    {

        $query = $this->db->get_where('t_user', array('username' => $name));
        return $query->result();
    }
    //添加商品信息
    public function publish_ads($ads){
        $this->db->insert('t_ads',$ads);
        return $this->db->affected_rows();
    }
    
   



}