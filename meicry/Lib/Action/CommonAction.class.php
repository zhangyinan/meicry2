<?php
class CommonAction extends Action{
	public function _initialize() {
        # convert the magic datas
        if (get_magic_quotes_gpc() == 0) {
            if (!empty($_GET)) {
                $_GET  = addslashesDeep($_GET);
            }
            
            if (!empty($_POST)) {
                $_POST = addslashesDeep($_POST);
            }
            
            $_COOKIE   = addslashesDeep($_COOKIE);
            $_REQUEST  = addslashesDeep($_REQUEST);
        }

        # 登陆
		if(!isset( $_SESSION["user_id"]) || empty($_SESSION["user_id"])) {
			$this->redirect("Login/index");
		}

	}


}