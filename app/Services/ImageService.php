<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService
{
  public static function upload($imageFile, $folderName)
  {
    $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();
    $fileName = uniqid(rand().'_');//ランダムのファイル名を作成
    $extension = $imageFile->extension();//拡張子の取得
    $fileNameToStore = $fileName. '.' . $extension;//ファイル名拡張子をつける
    Storage::put('public/'.$folderName.'/'.$fileNameToStore, $resizedImage );

    return $fileNameToStore;
  }
}