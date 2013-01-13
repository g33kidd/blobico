<?php
	
	session_start();
	ob_start();
    
    $files = array();
    $path = "core/config/";
	$supported_ext = array('php');
	$dir = @opendir($path);

	while ($file = @readdir($dir)){
	      if (!is_dir($path.$file)){
	            $splitted = explode('.', $file);
	            $ext = strtolower($splitted[count($splitted)-1]);
	            if (in_array($ext, $supported_ext)) $files[] = $file;
	      }
	}

	@closedir($dir);
	sort($files);
	
	$output = "";
	
	for ($i=0; $i<count($files); $i++){
	      require("core/config/".$files[$i]);
	      //echo "Required: <strong>core/config/" . $files[$i] . "</strong><br />";
	}
	
	$files = array();
    $path = "core/class/";
	$supported_ext = array('php');
	$dir = @opendir($path);

	while ($file = @readdir($dir)){
	      if (!is_dir($path.$file)){
	            $splitted = explode('.', $file);
	            $ext = strtolower($splitted[count($splitted)-1]);
	            if (in_array($ext, $supported_ext)) $files[] = $file;
	      }
	}

	@closedir($dir);
	sort($files);
	
	$output = "";
	
	for ($i=0; $i<count($files); $i++){
	      require("core/class/".$files[$i]);
	      //echo "Required: <strong>core/class/" . $files[$i] . "</strong><br />";
	}
	
	db::db_connection($config['db']['host'], $config['db']['name'], $config['db']['user'], $config['db']['pass']);
	
?>