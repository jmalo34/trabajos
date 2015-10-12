<?php
class Trabajo
{
    private $title;

    function __construct($title)
    {
        $this->title = $title;
    }

    function setTitle($new_title)
    {
        $this->title = $new_title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function save()
    {
        array_push($_SESSION['my_resume'], $this);
    }

    static function getAll()
    {
        return $_SESSION['my_resume'];
    }

    static function deleteAll()
    {
        $_SESSION['my_resume'] = array();
    }
}
 ?>
