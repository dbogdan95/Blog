<?php
class View
{
    function generate($content_view, $template_view, $data = null)
    {
        if($data) {
            extract($data);
        }

        include 'views/templates/'.$template_view;
    }
}