<?php  


class Ads_model extends CI_Model{
//获取所有商品的列表
    public function get_ads_list(){
        $sql = "select * from t_ads order by ads_id desc";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //获取主页只显示一小部分的列表
    public function get_little_ads_list(){
        $sql = "select * from t_ads  order by ads_id desc limit 4";
        $query = $this->db->query($sql);
        return $query->result();
    }
   
    //获取分类列表
    public function get_bikes_list(){
        $sql = "select * from t_ads where adstype = '摩托' order by ads_id desc";
        $query = $this->db->query($sql);
        return $query->result();
    }
//获取分类列表
    public function get_car_list(){
        $sql = "select * from t_ads where adstype = '汽车' order by ads_id desc";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //获取分类列表
    public function get_mobiles_list(){
        $sql = "select * from t_ads where adstype = '手机' order by ads_id desc ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //获取分类列表
    public function get_electronicsappliances_list(){
        $sql = "select * from t_ads where adstype = '电子电器' order by ads_id desc";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //获取我的商品列表
    public function get_my_ads_list($user){
        // $sql = "select * from t_ads order by ads_id desc";
        // $query = $this->db->query($sql);
        $this->db->select('*');
        $this->db->from('t_ads a');
        $this->db->where('a.user_id',$user->user_id);
        $this->db->order_by('a.ads_id','desc');
        $query = $this->db->get();
        return $query->result();
    }
    //通过id去删除商品
    public function del_ads_by_id($ids){
        $this->db->where_in('ads_id',$ids);
        $this->db->delete('t_ads');
        return $this->db->affected_rows();
    }

    //获取当前点击物品的信息
    public function get_resreash_msg($ids){
        $this->db->select('*');
        $this->db->from('t_ads a');
        $this->db->where('a.ads_id',$ids);
        $query = $this->db->get();
        return $query->result();
    }
//修改商品信息
    public function update_ads($data,$ids){
        // $sql="update t_ads set adsname='$data[adsname]' where ads_id='$ids'";
        // echo $sql;
        // die();
      
        /*$data = array(
            'adsname' => $adsname,
            'describe' => $describe,
            'adstype'=>$adstype,
            'price'=>$price,
            'user_id'=>$user->user_id,
            'photo'=>$photo_all
        );*/
        
       $this->db->where('ads_id', $ids);
    //    $query=$this->db->update('t_ads', $data);
       $query=$this->db->update('t_ads', $data, "ads_id ='$ids'");
    //    var_dump($query);
    //    die();
        
        return $query;
        //return $this->db->affected_rows();
    }
//添加评论
    public function add_comment($comment){
        $this->db->insert('t_comment', $comment);
        return $this->db->affected_rows();
    }
    //获取评论
    public function get_comment($ids){
        $this->db->select('*');
        $this->db->from('t_comment a');
        $this->db->where('a.ads_id',$ids);
        $query = $this->db->get();
        return $query->result();

    }
    
}




























?>