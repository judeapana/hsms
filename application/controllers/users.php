<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends CI_Controller {

    private $username;
    private $password;

    //loading constructor + model =>user
    public function __construct() {
        parent::__construct();
        $this->load->model('User');
    }

    //--------------------------------------------------------------------------

    public function login($option) {
        //if login is not admin or teacher or student or parent show 404
        if (!($option == 'admin' || $option == 'teacher' || $option == 'student' || $option == 'parent')) {
            show_404();
        }
        //validation rules of user input (setting rules)
        $this->session->unset_userdata('username');

        $config = array(
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required'
            )
        );
        //implementation of rules
        $this->form_validation->set_rules($config);
        //validation of user input
        if ($this->form_validation->run() == FALSE) {
            $data['error'] = 0;
            $this->load->view($option . '/main/' . $option . '_login', $data);
        } else {
            //matching password and username
            $this->username = $this->input->post('username');
            $this->password = do_hash($this->input->post('password'),'sha1');

            $data = array('uname' => $this->username, 'pass' => $this->password, 'usertype' => $option, 'active' => 1);
            $user_exist = $this->User->login($data);
//checking if user exist or not
            if (!empty($user_exist)) {
                $data['error'] = 0;

//setting up sessions on valid credentials
                $this->session->set_userdata('username', $user_exist['uname']);
                $this->session->set_userdata('email', $user_exist['email']);
                $this->session->set_userdata('usertype', $user_exist['usertype']);
                $this->session->set_flashdata('success', 'Welcome To HSMS');
                //redirecting to dashboard controller
                redirect($option . 'ctrls/');

                //not valid user or active != 1 then account deactivated or if users try to cross login
            } else {
                //setting error =1 and  reloading page 
                $data['error'] = 1;
                $this->load->view($option . '/main/' . $option . '_login', $data);
            }
        }
    }

    //--------------------------------------------------------------------------
    //
 //
    //resting session created
    public function logout($usertype) {
        $this->session->sess_destroy();
        redirect('users/' . $usertype);
    }

    //--------------------------------------------------------------------------


    public function recovery($option = '') {
        //returning 404 if $option is empty
        if (!($option == 'admin' || $option == 'teacher' || $option == 'student' || $option == 'parent')) {
            show_404();
        }

//recovery option for admin, student ,teacher,parent --
        $data['option'] = $option;
        $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|valid_email|callback_email_check|required'
        ));
        //setting and implementation of rules
        $this->form_validation->set_rules($config);
        //if validation not run reload page
        if ($this->form_validation->run() == FALSE) {
            $this->load->view($option . '/main/' . $option . '_recovery', $data);
        } else {
            //else create session throughout the two stages of the recovery will expire in 10 minutes
            $this->session->set_userdata('email', $this->input->post('email'));
            $this->session->mark_as_temp('email', 60 * 10);
            redirect('users/recovery_pin/' . $option);
        }
    }

    //--------------------------------------------------------------------------


    public function email_check() {
        //checking if user->email exist or not
        $email = $this->input->post('email');
        //$email_exist_num return a number 1 if user exist  0 if not
        $data = array('email' => $this->input->post('email'), 'usertype' => $this->input->post('usertype'));
        $email_exist_num = $this->User->recovery($data);
        //checking if email is empty showing field empty
        if ($email == '') {
            $this->form_validation->set_message('email_check', 'The {field} is empty!');
        } else {
            //email not exist show error message
            if ($email_exist_num <= 0) {
                //showing error message call back
                $this->form_validation->set_message('email_check', 'The {field} does not Exist!');
                return FALSE;
            } else {
                return TRUE;
            }
        }
    }

    //--------------------------------------------------------------------------------------


    public function recovery_pin($option) {
        //if option is empty show 404
        if (empty($option)) {
            show_404();
        }
        //creating a session and retrieving page for pin recycle
        $email = $this->session->userdata('email');
        if (!isset($email)) {
            redirect('users/recovery/' . $option);
            //if session not exist terminate load of page
        } else {
            $hashkey = random_string('numeric', 5);
            $this->load->model('setting');
            //selecting all from admin
            if ($option == 'admin') {
                $number = $this->setting->readplus('administrators', ['email' => $this->session->userdata("email")]);
            } elseif ($option == 'student' || $option == 'teacher') {
                $number = $this->setting->readplus($option . "s", ['email' => $this->session->userdata("email")]);
            } elseif ($option == 'parent') {
                                $number = $this->setting->readplus($option . "s", ['ptemail' => $this->session->userdata("email")]);
            } else {
                show_404();
            }
//            $num = $number[0]['contact'];
            //sms api
//            $msg=' Your Recovery Pin Is '.$hashkey.' @ email '.$this->session->userdata('email');
//            $this->load->library('Phpsms');
//            $this->phpsms->sendmsg($num,$msg);
            //updating recovery pin when message is sent again
            $this->setting->updater(['email' => $this->session->userdata("email"),'status'=>1], ['hash' => $hashkey], "recovery");
            //just using this to delete all records with 0 in db recovery
            $this->load->model('delete_user');
            $this->delete_user->delete_record("recovery",['status'=>0]);
            
//            $config = Array(
//    'protocol' => 'smtp',
//    'smtp_host' => 'ssl://smtp.googlemail.com',
//    'smtp_port' => 465,
//    'smtp_user' => 'androapana@gmail.com',
//    'smtp_pass' => 'apana1jude1',
//    'mailtype'  => 'html', 
//    'charset'   => 'iso-8859-1'
//);
//  $this->email->initialize($config);          
//             $this->email->to('0554apana@gmail.com');
//             $this->email->from("androapana@gmail.com", "thomas");
//             $this->email->message("here is your validation pin ".$hashkey);
//             $this->email->subject("Ddtsmt Account Recovery");
//             print_r(mail("androapana@gmail.com", "Program", "Hello","From:0554apana@gmail.com"));
//             print_r($this->email->send());
//             if(!$this->email->send()){
//                 echo "message not sent";
//                 exit();
//             }
//             exit();
            //data to be inserted into database
            $data = array('hash' => $hashkey, 'email' => $email, 'status' => 1, 'usertype' => $option);

            $data1 = array('email' => $email, 'status' => 1, 'usertype' => $option);
            //checking if pin already exist or not
            $pin_alreay_exist = $this->User->check_pin_already_exist($data1);
            //if exist dont recreate pin send or update new pin and send //*****not yet dont****
            if ($pin_alreay_exist > 0) {
                redirect('users/recoverystatic/' . $option);
            } else {
                //else create pin and send to email
                $this->User->insert_recovery_pin($data);

                redirect('users/recoverystatic/' . $option);
            }
            //
        }
    }

    //--------------------------------------------------------------------------


    public function recoverystatic($option) {
        //if session is not set 
        $email = $this->session->userdata('email');
        if (!isset($email)) {
            redirect('users/recovery/' . $option);
        } else {
            /* @var $option type */
            $data['option'] = $option;

            $value = array('hash' => $this->input->post('pin'), 'email' => $email, 'status' => 1, 'usertype' => $option);
            //checking if pin exist
            $pin_exist = $this->User->check_valid_recovery_pin($value);


            $config = array(
                array(
                    'field' => 'pin',
                    'label' => 'Pin',
                    'rules' => 'trim|required'
            ));
            $data['error'] = 0;
            $this->form_validation->set_rules($config);
            //implementation of rules
            if ($this->form_validation->run() == FALSE) {
                $data['option'] = $option;
                $this->load->view('admin/main/recovery_pin', $data);
            } else {
                if ($pin_exist <= 0) {
                    $data['error'] = 1;
                    $this->load->view('admin/main/recovery_pin', $data);
                } else {
                    $data = array('status' => 0, 'email' => $email);
                    $this->User->update_on_correct_pin($data);
                    //session to grand user to reset_password page and expires in 6 mins + approx +email session->5mins
                    $this->session->set_userdata('grant_reset', 1);
                    $this->session->mark_as_temp('grant_reset', 60 * 6);
                    redirect('users/reset_password/' . $option);
                }
            }
        }
    }

    //--------------------------------------------------------------------------


    public function reset_password($option) {
        if (!($option == 'admin' || $option == 'teacher' || $option == 'student' || $option == 'parent')) {
            show_404();
        }
        //if session is null redirect out of recovery page
        if ($this->session->userdata('email') == '' || $this->session->userdata('grant_reset') == '') {
            redirect('users/' . $option);
        }
        $config = array(
            array(
                'field' => 'pass',
                'label' => 'password',
                'rules' => 'trim|required|min_length[6]|max_length[12]|callback_match_pass'
            ),
            array(
                'field' => 'confirmpass',
                'label' => 'confirm password',
                'rules' => 'trim|required|matches[pass]'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $data['option'] = $option;
            $this->load->view($option . '/main/resetpass', $data);
        } else {
            //sending data
           
            $data = array(
                'pass' => sha1($this->input->post('pass')),
                'email' => $this->session->userdata('email'),
                'usertype' => $option
            );

            //if query success 
            if ($this->User->update_password($data)) {
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('grant_reset');
                //creating a success flash
                $this->session->set_flashdata('success', 'Your Account Has Been Successfully Recovered');
                redirect('users/' . $option);
            } else {
                $this->session->set_flashdata('error', 'Your Account Has Not Been Recovered');
                redirect('users/' . $option);
            }
        }
    }

    //--------------------------------------------------------------------------


    public function match_pass() {
        $field = $this->input->post('pass');
        if ($field == '') {
            $this->form_validation->set_message('The {field} is empty');
        } else {
            if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/", $field)) {
                //May contain letter and numbers
                // Must contain at least 1 number and 1 letter
                // May contain any of these characters: !@#$%
                // Must be 8-12 characters
                $this->form_validation->set_message('match_pass', 'The {field} field must contain atleast (1) letters,(1) number and character minimum length of 6 and maximum length of 12 then a special character !@#$%'
                );
                return False;
            } else {
                return true;
            }
        }
    }

}
