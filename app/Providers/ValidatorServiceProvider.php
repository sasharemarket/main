<?php 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class ValidatorServiceProvider extends ServiceProvider {

    public function boot()
    {
        Validator::extend('filetypevalidation',function($attribute, $value, $params, $validator) {

            $image_parts = explode(";base64,", $value);
            $image_base64 = base64_decode($image_parts[1]);
            $image_type_aux = explode("image/", $image_parts[0]);
            if(count($image_type_aux)>1) {
                $image_type = $image_type_aux[1];
            } else {
                $image_type_aux = explode("data:application/", $image_parts[0]);
                $image_type = $image_type_aux[1];
            }

            if (!in_array($image_type, ['pdf','PDF','jpg','JPG','jpeg', 'JPEG','png','PNG'])) {
                return false;
            } else {
                return true;
            }
        });


        Validator::extend('filesizevalidation',function($attribute, $value, $params, $validator) {
            
            $image_parts = explode(";base64,", $value);
            $image_base64 = base64_decode($image_parts[1]);
            $image_type_aux = explode("image/", $image_parts[0]);
            if(count($image_type_aux)>1) {
                $image_type = $image_type_aux[1];
            } else {
                $image_type_aux = explode("data:application/", $image_parts[0]);
                $image_type = $image_type_aux[1];
            }

            if (!in_array($image_type, ['pdf','PDF','jpg','JPG','jpeg', 'JPEG','png','PNG'])) {
                return false;
            } else {
                if(strlen(base64_decode($value))>'3125250') { //3125248
                    return false;
                } else {
                    return true;
                }
            }
        });



        

    }

    public function register()
    {
        //
    }
}