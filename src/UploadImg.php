<?php

namespace UploadIMG;

trait UploadImg
{
    public function photo($img, $path)
    {
        $imgname = md5(time()) . '.' . explode('/', $img['type'])[1];
        $this->filename = $imgname;
        move_uploaded_file($img['tmp_name'], $path . $imgname);
    }
}