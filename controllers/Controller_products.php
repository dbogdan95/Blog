<?php
class Controller_Products extends Controller
{
    function action_index($limit=null)
    {
        //load our model
        $products_model = $this->model->load('products');

        $this->data['products'] = $products_model->get_products($limit, 0);

        $this->view->generate('products_view.php', 'template_view.php', $this->data);

    }

    function action_add_product()
    {
        die('Here will be the logic for adding an product');

        //load our model

        $main_model = $this->model->load('products');

        //validate and sanitize data

        $isValid = true;

        $title = get_post('storyTitle');
        $body  = get_post('storyBody');
        $category_id  = get_post('storyCategory');

        //uploadfile

        //$file = upload_file('storyImage');

        if($isValid ) {
            $res = $main_model->add_story($title, $body, '', $category_id);
            echo json_encode($res);
        } else {
            echo 'error';
        }

        //no view here - just redirect

        //header("location:/");
    }
}
