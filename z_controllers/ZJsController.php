<?php

    class ZJsController extends z_controller {

        public function action_formfields(Request $req, Response $res) {
            return $res->render("zjs/form_fields.php");
        }

        public function action_formfeatures(Request $req, Response $res) {
            return $res->render("zjs/form_features.php");
        }

        public function action_request(Request $req, Response $res) { 
            return $res->render("zjs/request.php");
        }
    }
?>