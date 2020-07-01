<?php

spl_autoload_register(function($className) {

	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	$fileName =  __DIR__  . '/class/' . $className . '.php';

	 if (file_exists($fileName)) {
        require $fileName;

        return true;
    }

    return false;

});