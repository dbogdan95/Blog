<?php
class Controller_Topic extends Controller
{
    function action_index($param=null)
    {	
		header("Location: \\");		
    }
	
	function action_view($param=null)
	{
		if(isset($param))
		{
			$model = $this->model->load('api');
		
			if($model->get_topic($param, $this->data['post']))
				$this->view->generate('topic_view.php', 'template_view.php', $this->data);
			else
				Application::ErrorPage404('topic not exists');
		}
		else
		{
			Application::ErrorPage404('no topic to view');
		} 
	}
}
?>