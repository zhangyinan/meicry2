<?php
class LoginAction extends Action{

	public function index(){
        $this->display();
    }

    public function login() {
    	$username = $_REQUEST['username'];
    	if(!empty($_REQUEST['username'])){
            $obj = new UserModel();
            $res = $obj->getUserInfoByName($username);
            $_SESSION["user_id"] =$res[0]['id'];
            $this->redirect("Index/index");
        }else{
            $this->redirect("index");
        }
    }

    public function logOut() {
    	unset($_SESSION['user_id']);
    	$this->redirect("index");
    }


}