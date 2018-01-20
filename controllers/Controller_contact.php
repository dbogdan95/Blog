<?php

class Controller_Contact extends Controller
{
    function action_index($param=null)
    {
        $this->view->generate('contact_view.php', 'template_view.php', $this->data);
    }

	function action_send($param=null)
	{
		if(isset($_POST["submit"]))
		{
	 		$name = $_POST["name"];
			$email = $_POST["email"];
			$subject = $_POST["subject"];
			$message = $_POST["message"];		
			
			mail(CONTACT_ADDRESS , $subject , $name.'<br>'.$email.'<hr>'.$message);
			header("Location: //:contact");
		}
	}
}
