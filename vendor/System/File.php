<?php

namespace System;

class File{
    
    /**
     * Directory Separator
     * 
     * @const string
     */
    const DS = DIRECTORY_SEPARATOR;

    /** 
     * Root Path
     * 
     * @var string
    */
    private $root;

    /**
     * constractor
     * 
     * @param string $root
     */
    public function __construct($root)
    {
        $this->root = $root;
    }

    /**
     * Determine wether the given file path exists
     * 
     * 
     * @param string $file
     * @return bool  
     */
    public function exists($file)
    {
        // return file_exists($file);
        return file_exists($this->to($file));
    }
    
    /**
     * Required the given file
     * 
     * 
     * @param string $file
     * @return void 
     */
    public function Requireing($file)
    {
        // require $file;
        require $this->to($file);
    }


    /**
     * Genrate Full Path to the given path in vendor folder
     * 
     * 
     * @param string $path
     * @return string
     */

     public function toVendor($path)
     {
        return $this->to('vendor/' . $path);
     }


     /**
      * 
      * Genrate full path to given path 
      * 
      * @param $path
      * @return string
      */

      function to($path)
      {
          return $this->root . static::DS . str_replace(['/', '\\'], static::DS, $path);
      }

  

}

