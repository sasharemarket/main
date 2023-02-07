<?php
namespace App\Traits;
use MongoDB\Driver\Manager;
use MongoDB\GridFS\Bucket;
use MongoDB\BSON\ObjectId;

trait FilesTrait {

    public function addtrait($mongo_connection,$mongo_database,$file_name,$req)
    {
        $manager = new Manager($mongo_connection);
        $bucket=new Bucket($manager,$mongo_database);
        if(isset($req->document_file_coa) && !empty($req->document_file_coa))
        {
            $image_parts = explode(";base64,", $req->document_file_coa);
        } else {
            $image_parts = explode(";base64,", $req->document_file);
        }      
        $image_base64 = base64_decode($image_parts[1]);
        $image_type_aux = explode("image/", $image_parts[0]);
        if(count($image_type_aux)>1) {
            $image_type = $image_type_aux[1];
        } else {
            $image_type_aux = explode("data:application/", $image_parts[0]);
            $image_type = $image_type_aux[1];
        }
        $file = base_path().'/public/temp_image/'.$file_name.".".$image_type ;
        file_put_contents($file, $image_base64);
        unset($image_parts);
        unset($image_base64);
        $resource = fopen($file, "a+");
        $file_id = $bucket->uploadFromStream($file_name, $resource);
        unlink($file);
        return $file_id;
    }

    public function viewtrait($mongo_connection,$mongo_database,$file_id)
    {
        try 
        {
            $id = new ObjectId($file_id);
            $all_data=array();
            $manager = new Manager($mongo_connection);
            $bucket = new Bucket($manager,$mongo_database);
            $stream = $bucket->openDownloadStream($id);
            $contents = stream_get_contents($stream);
            $data = base64_encode($contents);
            $imgdata = base64_decode($data);
            $f = finfo_open();
            $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
            $data =" data:".$mime_type.";base64,".base64_encode($contents);

            $all_data_of_file = [
                'type'=>$mime_type,
                'data'=>$data
                ];

            array_push($all_data, $all_data_of_file);
            unset($data);
            unset($imgdata);
            return $all_data;

        }
        catch(Exception $e) 
        {
            echo 'Message: ' .$e->getMessage();
        } 
    }

    public function downlaod_trait($mongo_connection,$mongo_database,$file_id)
    {
        try 
        {
            $id = new ObjectId($file_id);
            $all_data=array();
            $manager = new Manager($mongo_connection);
            $bucket = new Bucket($manager,$mongo_database);
            $stream = $bucket->openDownloadStream($id);
            $contents = stream_get_contents($stream);
            $data = base64_encode($contents);
            $imgdata = base64_decode($data);
            $f = finfo_open();
            $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
            $data =" data:".$mime_type.";base64,".base64_encode($contents);

            // $size = getImageSizeFromString($imgdata);
            // if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
            //     die('Base64 value is not a valid image');
            // }
            // $ext = substr($size['mime'], 6);
            // if (!in_array($ext, ['pdf','PDF','jpg','JPG','jpeg', 'JPEG','png','PNG'])) {
            //     die('Unsupported image type');
            // }
            $all_data_of_file = [
                'type'=>$mime_type,
                'data'=>$data
                ];
            return  $all_data_of_file;
           
        }
        catch(Exception $e) 
        {
            echo 'Message: ' .$e->getMessage();
        } 
    }


    public function getBase64DecodeFileDetails($data)
    {
        $size = getImageSizeFromString($data);
        if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
           die('Base64 value is not a valid image');
        }
        $ext = substr($size['mime'], 6);
        if (!in_array($ext, ['png', 'gif', 'jpeg','PNG', 'GIF', 'JPEG','pdf','PDF'])) {
            die('Unsupported image type');
        }
        return $ext;
    }

    public function vi_addtrait($mongo_connection,$mongo_database, $file_name, $req, $file)
    {
        $manager = new Manager($mongo_connection);
        $bucket=new Bucket($manager,$mongo_database);       
        $image_parts = explode(";base64,", $file);
        $image_base64 = base64_decode($image_parts[1]);
        $image_type_aux = explode("image/", $image_parts[0]);
        if(count($image_type_aux)>1) {
            $image_type = $image_type_aux[1];
        } else {
            $image_type_aux = explode("data:application/", $image_parts[0]);
            $image_type = $image_type_aux[1];
        }
        $file = base_path().'/public/temp_image/'.$file_name.".".$image_type ;
        file_put_contents($file, $image_base64);
        unset($image_parts);
        unset($image_base64);
        $resource = fopen($file, "a+");
        $file_id = $bucket->uploadFromStream($file_name, $resource);
        unlink($file);
        return $file_id;
    }

    public function deletetrait($mongo_connection,$mongo_database,$file_id)
    {
        try 
        {
            $all_data = array();
            $id = new ObjectId($file_id);
            $manager = new Manager($mongo_connection);
            $bucket = new Bucket($manager,$mongo_database);
            $stream = $bucket->delete($id);
        }
        catch(Exception $e) 
        {
            echo 'Message: ' .$e->getMessage();
        } 
    }

}
