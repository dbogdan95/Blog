<?php
class Controller_About extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('about_view.php', 'template_view.php', $this->data);

    }


}
