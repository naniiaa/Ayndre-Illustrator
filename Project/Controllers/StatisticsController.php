<?php

include_once "Models/Statistics.php";
include_once "Controller.php";

    class StatisticsController extends Controller {

        public function route() {
            $this->render("Statistics", "view");
        }
       

    }

