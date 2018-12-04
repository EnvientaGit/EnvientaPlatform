<?php

namespace App;

use Auth;

class Utils
{

    /**
     * @param $uploadedFile
     * @param string $enabledMimes
     * @return bool
     */
  public static function checkFile($uploadedFile, $enabledMimes = '*') {
    $checked = false;
    if ($enabledMimes != '*' && is_array($enabledMimes)) {
      if($uploadedFile->getPathName() && in_array(mime_content_type($uploadedFile->getPathName()), $enabledMimes)) 
        $checked = true;
    } else {
      $checked = true;
    }
    var_dump($checked);
    if($checked === true && strtolower($uploadedFile->getClientOriginalExtension()) == 'php')
      $checked = false;
    return $checked;
  }

  public static function clearFileName($filename) {
    return preg_replace('/[^a-zA-Z0-9_.-]/', '', $filename);
  }

  public static function clearFolderName($filename) {
    return preg_replace('/[^a-zA-Z0-9_-]/', '', $filename);
  }

	public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
    
  public static function themeResPath($name) {
    return url('/themes/' . $_SERVER['HTTP_HOST'] . '/' . config('themes.' . str_replace('.', '_', $_SERVER['HTTP_HOST']) . '.' . $name));
  }

  public static function themePath($name) {
    return url('/themes/' . $_SERVER['HTTP_HOST'] . '/' . $name);
  }

  public static function userAvatar() {
    return Auth::user()->avatarUrl ? Auth::user()->avatarUrl : "https://www.gravatar.com/avatar/" . md5( strtolower( trim( Auth::user()->email ) ) ) . "?s=40";
  }

  public static function userAvatarBig() {
    return Auth::user()->avatarUrl ? Auth::user()->avatarUrl : "https://www.gravatar.com/avatar/" . md5( strtolower( trim( Auth::user()->email ) ) ) . "?s=200";
  }

  public static function userProfile() {
    return Auth::user()->profileUrl ? Auth::user()->profileUrl : "https://www.gravatar.com/" . md5( strtolower( trim( Auth::user()->email ) ) );
  }

  public static function booleanArrayToStr($booleanArray) {
    $result = "";
    for($i = 0; $i < count($booleanArray); $i++)
      $result .= $booleanArray[$i] ? "1" : "0";
    return $result;
  }

  public static function strToBooleanArray($str, $min) {
    $result = array();
    $strArray = str_split($str);
    foreach ($strArray as $char)
      array_push($result, $char == "1");
    for($i=count($result); $i<$min; $i++)
      array_push($result, false);
    return $result;
  }

  public static function random_str($length, $keyspace = '0123456789')
  {
      $str = '';
      $max = mb_strlen($keyspace, '8bit') - 1;
      for ($i = 0; $i < $length; ++$i) {
          $str .= $keyspace[random_int(0, $max)];
      }
      return $str;
  }

}