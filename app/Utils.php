<?php

namespace App;

class Utils
{
  
  public static function checkFile($uploadedFile) {
    if(strtolower($uploadedFile->getClientOriginalExtension()) == 'php')
      return false;
    return true;
  }

  public static function clearFileName($filename) {
    return preg_replace('/[^a-zA-Z0-9_.-]/', '', $filename);
  }

  public static function clearFolderName($filename) {
    return preg_replace('/[^a-zA-Z0-9_-]/', '', $filename);
  }

}