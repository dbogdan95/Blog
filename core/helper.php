<?php

function upload_file($file) {
        $uploadFile = UPLOAD_PATH . basename($_FILES[$file]['name']);

        if (move_uploaded_file($_FILES[$file]['tmp_name'], $uploadFile)) {
             return basename($_FILES[$file]['name']);
        }

        return false;
}

function get_post($name, $default_value = null) {
    if(isset($_POST[$name])) {
        return $_POST[$name] ;
    }
    return $default_value;
}

function string_limiter($str)
{
	$str = substr_replace($str, '', strpos($str, ' ', 500), -1);
	$str = $str.'...';
	
	return $str;
}