<?php
class Model
{
    public $db;

    function __construct() {

		$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    }

    public function load($model) {
		
            $model_name = 'Model_'.$model;

            // load file with model

            $model_file = strtolower($model_name).'.php';
            $model_path = "models/".$model_file;

            if(file_exists($model_path))
            {
                include "models/".$model_file;

                return new $model_name;

            } else {
                Application::ErrorPage404('no model found');

            }
    }

    public function get_data()
    {


    }
}