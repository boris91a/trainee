<?php

$dir = __DIR__."\..\..\uploads\\";
$max_size = 100000;
$ext_allow = ['jpg', 'png', 'bmp', 'ico', 'jpeg'];

if(isset($_FILES['new_avatar'])){
    $file = $_FILES['new_avatar'];
    if($file['size'] < $max_size){
        $ext = pathinfo($file['name'])['extension'];
        if(in_array($ext, $ext_allow)){
            $name = md5($file['name'].time());
            while(file_exists($dir.$name.".".$ext)){
                $name = md5($file['name'].time());
            }
            $path = $dir.$name.".".$ext;
            if(is_uploaded_file($file['tmp_name'])){
                if(move_uploaded_file($file['tmp_name'], $path)){
                    $response['filepath'] = $path;
                    $response['filename'] = $name.".".$ext;
                } else $response['error'] = "Error to upload file";
            } else {$response['error'] = "Failed to upload file";}
        } else $response['error'] = "Not allowed file extension";
    } else $response['error'] = "File size must be less than 100000 bytes";
} else {$response['error'] = "File not found";}

echo json_encode($response);
exit();