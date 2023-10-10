<?php
    class ViewsModel 
    {
        public function __construct() {
           
        }
        protected static function getViewsModel($views){
            $whiteList=['HomeView'];
           
            if(in_array($views."View",$whiteList)){
                
                if (is_file('./Views/Contents/'.$views.'View.php')) {
                    # code...
                    
                    $content = './Views/Contents/'.$views.'View.php';
                } else {
                    # code...
                    $content = '404';
                }
                
            }elseif($views==='login' || $views === 'index'){
                $content = "login";
            }else{
                $content = '404';
            }
            return $content;
        }
    }
    