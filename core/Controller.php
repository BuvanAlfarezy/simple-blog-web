<?php

class Controller {
    public function view($view, $data = [])
    {
        extract($data);

        require_once "../app/View/header.php";
        require_once "../app/View/$view.php";
        require_once "../app/View/footer.php";
    }
}