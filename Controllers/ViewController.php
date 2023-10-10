<?php
    require_once './Models/ViewsModel.php';
    class ViewController extends ViewsModel
    {
        public function getPlantillaController(){
            return require_once "./Views/plantilla.php";
        }

        public function getViewController(){
            if (isset($_GET['url'])) {
                $ruta = explode('/',$_GET['url']);
                $respuesta = ViewsModel::getViewsModel($ruta[0]);
                echo $respuesta;
            }else{
                $respuesta='login';
            }
            return $respuesta;
        }
    }
    