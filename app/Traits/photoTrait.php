<?php
namespace App\Traits;
trait photoTrait
{
    public function setImgAttribute($value)
{
    if (is_file($value))
        {
        $this->attributes['img'] = uploadImage($value);
        }
        else
        {
            $this->attributes['img'] = $value;
        }
 }
}
