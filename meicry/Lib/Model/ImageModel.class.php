<?php
class ImageModel extends Model {
	
/* 	public function getItemByTheme($theme){
		$ret=$this->field('image_url,image_desc,id,template')->select();
		return  $ret;
	} */
	
	public function getItemByUserId($UserId){
		$ret=$this->where("user_id='$UserId'")->select();
		return  $ret;
	}
	
	#  根据模板id找到所有图片的信息
	public function getImageByTemplateId($templateId)  {
		# return array(0=>array('id'=>1,'name'=>'test'));
		$ret=$this->where("template='$templateId'")->select();
		$ret = $this->addLikedStatus($ret);
		return  $ret;
	}
	# 根据用户id找到所有相关的图片
	public function getImageByUserId($userId) {
// 		$res = $this->query("select * from image i left join template t on  t.id=i.template left join theme th on th.id= t.theme where image.user_id='$userId'");
		$ret = $this->getItemByUserId($userId);

		$ret = $this->addLikedStatus($ret);

		return $ret;
	}
	#删除图片byid
	public  function delImageById($id){
		$ret = $this->where("id='$id'")->delete();
	}
	
	public  function getImageInfoById($imageId){
		$ret = $this->find($imageId);
		return $ret;
	}

	private function addLikedStatus(array $ret) {
		$likeModel = new LikeModel();
		foreach ($ret as &$value) {
			$value['liked'] = $likeModel->getLikedStatus($_SESSION['user_id'], $value['id']);
		}
		return $ret;
	}
}