<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login(){
        $this->load->view('user_login');
	}

    public function auth(){

        if($this->input->server('REQUEST_METHOD') != 'POST'){
            $this->session->set_flashdata('error','You did not provide any information!');
            redirect(base_url('user/login'));
        }

        $login = trim($this->input->post('login'));
        $pwd = trim($this->input->post('password'));

        if(empty($login) && empty($pwd)){
            $this->session->set_flashdata('error','Please provide both login and password!');
            redirect(base_url('user/login'));
        }

        $this->load->model('User_model');
        $user = $this->User_model->get_user($login);

        if(!password_verify($pwd,$user->motdepasse)){
            $this->session->set_flashdata('error','Login or password provided must be wrong!');
            redirect(base_url('user/login'));
        }
        $this->session->set_userdata('user_login',$user->login);
        $this->session->set_userdata('user_id',$user->id);
        redirect('archive');
	}

    public function logout(){
        session_destroy();
        redirect(base_url('user/login'));
    }

    public function insert(){
        $users = [];
        
        $user1 = [];
        $user1['nom'] = 'RAKOTONIAINA';
        $user1['prenom'] = 'Iharinavalona';
        $user1['login'] = '045324';
        $user1['motdepasse'] = password_hash('navalona', PASSWORD_BCRYPT);

        $user2 = [];
        $user2['nom'] = 'ANDRIAMIRADO';
        $user2['prenom'] = 'Jose Cedric';
        $user2['login'] = '123456';
        $user2['motdepasse'] = password_hash('mirado', PASSWORD_BCRYPT);

        $user3 = [];
        $user3['nom'] = 'RAKOTONIRINA';
        $user3['prenom'] = 'Fanilo Mendrika';
        $user3['login'] = '000234';
        $user3['motdepasse'] = password_hash('fanilo', PASSWORD_BCRYPT);

        $users[] = $user1;
        $users[] = $user2;
        $users[] = $user3;

        $this->db->insert_batch('utilisateur', $users);
    }


}
