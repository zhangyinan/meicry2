<?php
class TemplateModel extends Model {
	
	# 根据主题的id找到所有模板的id
	public function getTemplateByThemeId($themeId){
		# return array(0=>array('id'=>1,'name'=>'test'));
		$ret=$this->where("theme='$themeId'")->field('id')->select();
		return  $ret;
	}
	
	#根据模板的id找到所有主题的id
	public function getThemeByTemplateId($temId){
		$ret=$this->find($temId);
		return  $ret;
	}
	#获取所有模板信息
	public function getAllTemplate(){
		$ret=$this->select();
		return  $ret;
	}
}