<?php
class Model_Products extends Model
{
    function get_products($limit=30, $offset=0)
    {
        $sth = $this->db->prepare("SELECT id,name, price,details, image from products ");

        //$sth->bindValue(':limit', $limit);
        //$sth->bindValue(':offset', $offset);
        $sth->execute(array(
            ':limit'       => $limit,
        ));

        $products = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }





































    function add_story($title, $body, $image, $category_id = null)
    {
        $statement = $this->db->prepare("insert into stories (title, body, image, category_id) values (:storyTitle, :storyBody, :storyImage, :storyCategory)");
        $statement->execute(
            array(
                ':storyTitle'       => $title,
                ':storyBody'        => $body,
                ':storyImage'       => $image,
                ':storyCategory'    => $category_id
            )
        );
    }

    function get_full_stories()
    {
        $stories = $this->db->query("SELECT * from stories join categories on stories.category_id = categories.category_id ORDER BY created_at DESC");
        return $stories;
    }

    function get_stories_categories()
    {
        return $this->db->query("SELECT * from categories");
    }

}