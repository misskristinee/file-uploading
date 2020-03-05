<?php

    // checking the file type
    function CheckFileType($file){
        $allowed = array('jpeg', 'jpg', 'png');
        $fileExt = explode("/",$file);
        return in_array(end($fileExt),$allowed) ? true : false;
    }

    // checking the file size
    function CheckSize($file){
        return ($file >= 10000000) ? false : true;
    }

    // checking if the file already exist
    function CheckFile($file){
        return (!file_exists($file)) ? false : true;
    }

    // file uploading 
    function moveFile($file,$target){
        return move_uploaded_file($file,$target);
    }
?>