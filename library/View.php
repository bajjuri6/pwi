<?php

class View {
    public function render($file){
            require APP_PATH.'/layout/header.php';
            require APP_PATH.'/views/'.$file.'.php';
            require APP_PATH.'/layout/footer.php';
    }

}