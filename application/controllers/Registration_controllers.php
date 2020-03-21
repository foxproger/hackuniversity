<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration_controllers extends CI_Controller {
	public function index()
	{
    $client_id = '6996347'; // ID приложения
    $client_secret = '3NQq6AJdlvBRGuDmuCgp'; // Защищённый ключ
    $redirect_uri = 'http://localhost/balthack/Registration_controllers/';


    $url = 'http://oauth.vk.com/authorize';

    $params = array(
        'client_id'     => $client_id,
        'redirect_uri'  => $redirect_uri,
        'response_type' => 'code'
    );
    $code = $this->input->get('code');
    if (isset($code)) {
        $params = array(
            'client_id' => $params['client_id'],
            'client_secret' => $client_secret,
            'code' => $this->input->get('code'),
            'redirect_uri' => $redirect_uri
        );
        $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);
        if (isset($token['access_token'])) {
    $params2 = array(
        'uids'         => $token['user_id'],
        'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
        'v' => '5.103',
        'access_token' => $token['access_token']
    );
}
$userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params2))), true);
  $this->load->model('Main_model');
  $idUser = $this->Main_model->set_name($userInfo['response'][0]['id'],$userInfo['response'][0]['first_name'],$userInfo['response'][0]['last_name'],$userInfo['response'][0]['bdate']);
	$this->load->library('session');
	$this->session->set_userdata('id', $idUser[0]->id);
	$this->session->set_userdata('first_name', $userInfo['response'][0]['first_name']);
	$this->session->set_userdata('last_name', $userInfo['response'][0]['last_name']);
	$this->session->set_userdata('photo_big', $userInfo['response'][0]['photo_big']);
	$this->session->set_userdata('admin_flag', $idUser[0]->admin_flag);
	if($idUser[0]->admin_flag == 1){
		redirect(base_url().'Admin_controllers');
	}
	else {
		redirect(base_url());
	}
    }
	}
}
