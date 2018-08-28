<?php

namespace App;

use Auth;

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

}