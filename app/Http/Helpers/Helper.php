<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

function getsetting($name)
{
    $setting=Setting::where('name',$name)->first()->value;
    return $setting;

}

    function changeDateFormate($date,$date_format){
        return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
    }

    function getImage($image)
    {
        if (is_null($image)) {
            return '';
        }
        return url('/') . '/storage/' . $image;
    }
    function uploadImage($file, $dir = 'coursePics')
    {
       return \Storage::disk('public')->putFile($dir, $file);    }


?>
