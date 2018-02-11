<?php

namespace App;

class Utils
{
  
  public static function checkFile($uploadedFile) {
    if(strtolower($uploadedFile->getClientOriginalExtension()) == 'php')
      return false;
    return true;
  }

}