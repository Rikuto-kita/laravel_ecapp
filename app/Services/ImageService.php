<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService
{
  public static function upload($imageFile, $folderName){
    if(is_array($imageFile)){
      $file = $imageFile['image']; // 配列なので[‘key’] で取得
    }else{
      $file = $imageFile;//配列でなければ$imageFileに入れる
    }
    $resizedImage = InterventionImage::make($file)->resize(1920, 1080)->encode();
    $fileName = uniqid(rand().'_');//ランダムのファイル名を作成
    $extension = $file->extension();//拡張子の取得
    $fileNameToStore = $fileName. '.' . $extension;//ファイル名拡張子をつける
    Storage::put('public/'.$folderName.'/'.$fileNameToStore, $resizedImage );

    return $fileNameToStore;
  }
}