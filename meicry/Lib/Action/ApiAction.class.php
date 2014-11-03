<?php
class ApiAction extends Action{

    public function upload1(){
        $user_id = $_REQUEST['user_id'];
        $theme = $_REQUEST['template'];

        $target_path  = dirname(__FILE__)."/../../../Public/img/uploads/";//接收文件目录 
        $target_path = $target_path . intval(microtime(true)).basename( $_FILES['photo']['name']); 

        if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) { 
           echo 1; 
        }  else { 
           echo 0; 
        } 
    }


    public function upload(){
        $user_id = $_REQUEST['user_id'];
        $template = $_REQUEST['template'];

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  dirname(__FILE__)."/../../../Public/img/uploads/";// 设置附件上传目录
        if(!$upload->upload()) {// 上传错误提示错误信息
            echo $upload->getErrorMsg();
            echo 0;
            exit;
         }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
            // 保存表单数据 包括附件数据
            $User = M("image"); // 实例化User对象
            $User->create(); // 创建数据对象
            $User->image_url = $info[0]['savename']; // 保存上传的照片根据需要自行组装
            $User->user_id = $user_id;
            $User->template= $template;
            $User->updated_at= date("Y-m-d H:i:s");
            $User->add(); // 写入用户数据到数据库
            echo 1;
            exit;
         }
    }

}