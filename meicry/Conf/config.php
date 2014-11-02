<?php
return array(
	//'配置项'=>'配置值'
	
	'TMPL_ENGINE_TYPE' => 'Smarty',
        'TMPL_ENGINE_CONFIG' => array(
                  'caching'      => false,
                  'template_dir' => TMPL_PATH,
                  'cache_dir'    => TEMP_PATH,
                  'compile_dir'  => CACHE_PATH
        ),

        /*
        # 如果有必要，可以在此添加
        'TMPL_PARSE_STRING'      => array(
            '__PUBLIC_TPL__' => 'workspace/ops_manage/Public_Tpl',   ##### 这个值应该是从apache的对应document root目录的下一层开始写起  
        ),           
        */ 
               
				# MySQL config
		'DB_TYPE' 			  => 'mysql',
		'DB_HOST' 			  => '123.57.46.129',
		'DB_NAME'			  => 'meicry',
		'DB_USER'			  => 'zhangyinan',
		'DB_PWD'  			  => 'zhangyinan123456',
        # MySQL config
        'DB_PORT'             => '3306',
        'DB_PREFIX'           => '',
        'DB_SQL_LOG'          => false,
        'DB_FIELDS_CACHE'     => false,
        'DB_FIELDTYPE_CHECK'  => false,
        'DB_SQL_BUILD_CACHE'  => false,
        'DB_SQL_BUILD_LENGTH' => 20,
        # 其他配置交给各个子系统
        
        'LOAD_EXT_FILE'        => 'extend',     # extend.php common functions auto load
            
        'URL_MODEL'            => 1,            #PATHINFO模式
        'URL_CASE_INSENSITIVE' => false,        # URL up/down case
        'URL_PATHINFO_DEPR'    => '/',
        
        'LOG_RECORD'           => true,
        'LOG_LEVEL' 	 	   => 'EMERG,ALERT,CRIT,ERR',
        'SHOW_PAGE_TRACE'	   => true,
            
        'TOKEN_ON'=>true,            # 是否开启令牌验证
        'TOKEN_NAME'=>'__hash__',    # 令牌验证的表单隐藏字段名称
        'TOKEN_TYPE'=>'md5',         # 令牌哈希验证规则 默认为MD5
        'TOKEN_RESET'=>true,         # 令牌验证出错后是否重置令牌 默认为true
                   
        # default
        #'DEFAULT_THEME'       => 'default',
        'URL_HTML_SUFFIX'     => '',  
        'DEFAULT_CHARSET'     => 'utf-8', 
        'DEFAULT_TIMEZONE'    => 'PRC',
        'DEFAULT_AJAX_RETURN' => 'JSON',
        
        'COOKIE_EXPIRE'       => 3600,
        'COOKIE_DOMAIN'       => '',
        'COOKIE_PATH'         => '/',
        'COOKIE_PREFIX'       => 'meicry',
        
        # session
        'SESSION_AUTO_START' => true,
        'SESSION_OPTIONS'    => array(),
        'SESSION_PREFIX'     => 'meicry',       
	
);
?>