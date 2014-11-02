<?php
class LikeModel extends Model {
	# 点赞加1
	function dianlike($id, $imageId) {
		$data 					= array();
		$data['image_id'] 			= $imageId;
		$data['user_id'] 		= $id;
		$data['update_time'] 	= date("Y-m-d H:i:s", time());
		$this->add($data);
	}
	
	# 根据图片id删除点赞关系
	function delLikeByImageId($imageId){
		$this->where("image_id='$imageId'")->delete();
	}
	#我点过赞的
	function getImageLiked($userId){
		$ret = $this->where("user_id='$userId'")->order('update_time desc')->select();
		return $ret;
	}

	function getLikedStatus($userId, $imageId) {
		$res = $this->where("user_id='$userId' and image_id = '$imageId'")->select();
		return empty($res) ? 0 : 1;
	}

}