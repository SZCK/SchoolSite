<?php
    /**
     * XDO Bridge dataFetch
     * 
     * For TZQSYZX SchoolSite
     * By SZCK Team
     * 
     * Author: xtl<xtl@xtlsoft.top>
     * 
     * License: MIT
     * 
     */
    
    /* function XDOBridge_main_thread() */
    
    //Use Define
    use XDO\XDO;
    
    //Error Report
    error_reporting(E_ALL &~ E_NOTICE);
    
    //Define Consts
    define("SysDir",dirname(__FILE__).'/');
    define("XDODIR",SysDir.'XDO/');
    define("DataDir",SysDir.'data/');
    define("ConfigJsonPath",SysDir.'config.json');
    
    //Load config
    $Config = json_decode(file_get_contents(ConfigJsonPath),1);
    
    //Include XDO
    require_once XDODIR.'Autoload.php';
    XDO::setDir(DataDir);
    
    //Action Deal
    if(isset($Config['ActionRoute'][$_GET["a"]])){
        ($Config['ActionRoute'][$_GET["a"]])();
    }
    
    
    
    
    //////////////////////DEAL/FUNCTION/////////////////////
    function _XDOBridge_get(){
        global $Config;
        if($Config['Allow'][explode(".",$_GET['r'])[0]]['get']){
            die(json_encode(XDO::Database($Config['DB'])->get($_GET['r'])));
        }else{
            die("{\"#0\":{\"return\":\"error\",\"error\":\"Permission Denied.\"}}");
        }
    }