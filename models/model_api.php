<?php
class Model_Api extends Model
{
    function get_topics(&$topic)
    {
        $topic = $this->db->query("SELECT id, title, content, autor FROM posts ORDER BY id DESC");
        return !($topic->num_rows == 0);
    }

    function get_topic($id, &$topic)
    {
        $res = $this->db->query("SELECT id, title, content, autor FROM posts WHERE id = ".$this->db->real_escape_string($id));
		
		$b = ($res->num_rows > 0);
		if($b)
		{
			$topic = $res->fetch_row();
		}
		return $b;
    }	
	
    function add_topic($title, $autor, $body)
    {
		$title = $this->db->real_escape_string($title);
		$body = $this->db->real_escape_string($body);
		$autor = $this->db->real_escape_string($autor);
		
		$this->db->query("insert into posts (title, content, autor) values (".$title.", ".$body.", ".$autor.")");
    }

/*     function get_full_stories()
    {
        $stories = $this->db->query("SELECT * from stories join categories on stories.category_id = categories.category_id ORDER BY created_at DESC");
        return $stories;
    }

    function get_stories_categories()
    {
        return $this->db->query("SELECT * from categories");
    } */
}