<?php
class IndexAction extends CommonAction {

    public function _initialize() {
        parent::_initialize();
    }

    public function index(){
    	
    	$all_user= $this->getAllUser();
	    $ret = $this->getAllImage();
	    $all_theme = $this->getAllTheme();
		$all_template =$this->getAllTemplate();

        $this->assign('user_session_id',   $_SESSION["user_id"]);
		$this->assign('user_info',   $all_user);
		$this->assign('templates',   $all_template);
		$this->assign('themes',   $all_theme);
		$this->assign('images',   $ret);
		$this->display();
    }

    private  function getAllUser(){
    	$Obj = new UserModel();
    	$res =$Obj->getAllUser();
    	$ret = array();
    	foreach ($res as $value) {
    		$ret[$value['id']] = $value;
    	}
    	return $ret;
    }
    private  function getAllTheme(){
    	$Obj = new ThemeModel();
    	$res =$Obj->getAllTheme();
    	$ret = array();
    	foreach ($res as $value) {
    		$ret[$value['id']] = $value;
    	}
    	return $ret;
    }
    private  function getAllTemplate(){
    	$Obj = new TemplateModel();
    	$res =$Obj->getAllTemplate();
    	$ret = array();
    	foreach ($res as $value) {
    		$ret[$value['id']] = $value;
    	}
    	return $ret;
    }
   
    # 拼凑所有的数据
    public function getAllImage() {
    	# 找到所有主题id
    	#getAllImageByThemeId()
    	$allTheme = $this->getAllTheme();
    	$res = array();
    	foreach ($allTheme as $values) {
    		$themeId = $values['id'];
    		$res[$themeId]  = $this->getAllImageByThemeId($themeId);
    	}
    	
    	return $res;
    }
    
    #  拼凑单个数据结构
    public function getAllImageByThemeId($themeId) {
		$res = array ();
		$tmps = array ();
		$templateModel = new TemplateModel ();
		$imageModel = new ImageModel ();
		$tmps = $templateModel->getTemplateByThemeId ( $themeId );
		
		$tmplateArr = array ();
		foreach ( $tmps as $value ) {
			$images = array ();
			$templateId = $value ['id'];
			$images = $imageModel->getImageByTemplateId ( $templateId );
			
			$tmplateArr [$templateId] = $images;
		}
    	
    	
    	return $tmplateArr;
    }
    #like+1   
    public function dianliked(){
        $userId = $_SESSION["user_id"];
        $imageId = $_REQUEST['id'];
      
        $obj = new LikeModel();
        $obj->dianlike( $userId,$imageId);
      
        echo 1;
        exit;
    }   

    #删除图片	
    public function delImageById(){
    	$imageId = $_REQUEST['id'];
    	$obj = new ImageModel();
    	$obj1 = new LikeModel();
    	$obj->delImageById($imageId);
    	$obj1->delLikeByImageId($imageId);
    	echo 1;
		exit;
    }	
    #个人主页
    public  function owner(){
    	$userId = $_REQUEST["user_id"];
        $userId_session = $_SESSION["user_id"];
        $obj1 = new UserModel();
        $res_session = $obj1->getUserInfoById($userId_session);//
        $res = $obj1->getUserInfoById($userId);

        $obj = new ImageModel();
        $ret = $obj->getImageByUserId($userId);
        $allImage = array();
        $templateModel = new TemplateModel();
        $themeModel = new ThemeModel();
        foreach($ret as $template) {
            $templateId = $template['template'];
            $themeId = $templateModel->getThemeByTemplateId($templateId);
            $themeInfo = $themeModel->getThemeInfoByThemeId($themeId);
            $tmp = array();
            $tmp['imageInfo'] = $template;
            $tmp['themeInfo'] = $themeInfo;
            $tmp['userInfo'] = $res;
            $allImage[] = $tmp;
        }

        $this->assign("sessionId",$userId_session);
    	$this->assign("user_info_session",$res_session);
        $this->assign("user_info",$res);
    	$this->assign("image_info",$allImage);
    	$this->display();
    }
    
    #找我爱过的们
    public function getImageLiked(){
    	$userId = $_SESSION["user_id"];
    	$obj = new ImageModel();
    	$obj1 = new LikeModel();
    	$obj2 = new UserModel();
    	$obj3 = new TemplateModel();
    	$obj4 = new ThemeModel();
    	$res = $obj1->getImageLiked($userId);
    	
    	$allLiked = array();
    	foreach ($res as $value){
    		$image_id = $value['image_id'];
    		$imageInfo =  $obj->getImageInfoById($image_id);

    		$user_id = $imageInfo['user_id'];

    		$userInfo = $obj2 ->getUserInfoById($user_id);
            
    		$allLikedTmp = array();
    		$tmpId = $imageInfo['template'];
    		$allLikedTmp["imageInfo"] = $imageInfo;
            $allLikedTmp["imageInfo"]['liked'] = 1;
    		$allLikedTmp["userInfo"] = $userInfo;
    		$templateInfo = $obj3->getThemeByTemplateId($tmpId);
    		$themeId = $templateInfo['theme'];
    		$allLikedTmp["themeInfo"] =$obj4->getThemeInfoByThemeId($themeId);
    		$allLiked[] = $allLikedTmp;
    	}
        
        $obj1 = new UserModel();
    	$ress = $obj1->getUserInfoById($userId);
		$this->assign("user_info_session",$ress);
    	$this->assign("image_info",$allLiked);
    	$this->display("owner");
    }
    
    
    
    
    private function getImageByUserId($userId){
    	$Obj = new ImageModel();
    	$ret =$Obj->getItemByUserId($userId);
    	return $ret;
    }
    	
    //安卓
    public function getImageByTheme_encode(){
    	$theme = $_REQUEST['theme'];
    	$Obj = new ImageModel();
    	$ret =$Obj->getItemByTheme($theme);
    	echo json_encode($ret);
    }
    //安卓
    public function getImageByUserId_encode(){
    	$userId = $_REQUEST['userId'];
    	$Obj = new ImageModel();
    	$ret =$Obj->getItemByUserId($userId);
    	echo json_encode($ret);
    }
   
    
}


