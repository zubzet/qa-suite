<?php

    class RenderingController extends z_controller {

        public function action_mail(Request $req, Response $res) {
            $res->sendEmail(
                "admin@zierhut-it.de",
                "TestEmail",
                "rendering/testmail.php",
                "de",
                [
                    "custom_value" => "TestValue"
                ]
            );
        }

        public function action_mailuser(Request $req, Response $res) {
            $res->sendEmailToUser(
                3,
                "TestEmail",
                "rendering/testmail.php",
                [
                    "custom_value" => "TestValue"
                ],
                "rendering/mail_layout.php"
            );
        }

        public function action_maillayout(Request $req, Response $res) {
            $res->sendEmail(
                "admin@zierhut-it.de",
                "TestEmail",
                "rendering/testmail.php",
                "de",
                [
                    "custom_value" => "TestValue"
                ],
                "rendering/mail_layout"
            );
        }

    }

?>