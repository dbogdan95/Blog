<?php
class Controller_Main extends Controller
{
    function action_index($param=null)
    {	
		$model = $this->model->load('api');
		$posts = null;
		
		if($model->get_topics($posts))
			$this->data['posts'] = $posts;
		else	
			unset($this->data['posts']);
		
		$this->view->generate('main_view.php', 'template_view.php', $this->data);		
    }
}
?>