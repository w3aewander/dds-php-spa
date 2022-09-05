<?php
/**
 * Postar arquivos para o onedrive
 * 
 */
$real_uploadfile = $_FILES["uploadfile"]["name"];       
$temp = explode(".", $_FILES["uploadfile"]["name"]);    
$temp_ral = $temp[0];
$newfilename = date("Ymd").round(microtime(true)) .$temp_ral. '.' . end($temp).$file_name;
$file_tmp = $_FILES['uploadfile']['tmp_name'];
// check folder is exist in over system 
if (!file_exists('uploads')) {
    // create new folder
    mkdir('uploads', 0777, true);
}
$target_dir = "uploads/";   
$uplode_path = $target_dir.$newfilename;
move_uploaded_file($file_tmp,$uplode_path);
$skydrive = new skydrive($token);
// onedrive upload file using php
$folderid = $_POST['folderid'];

try {
    $response_data = $skydrive->put_file($_GET['folderid'], $uplode_path);
    // File was uploaded, return metadata.
    print_r($response_data);
} 
catch (Exception $exception) 
{
    // An error accrue for onedrive file upload using php 
    echo "Error: ".$exception->getMessage();
    exit;
}