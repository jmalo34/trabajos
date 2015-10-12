<?php
class Trabajo
{
    private $title;
    private $duties;

    function __construct($title, $duties)
    {
        $this->title = $title;
        $this->duties = $duties;
    }

    function setTitle($new_title)
    {
        $this->title = $new_title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setDuties($new_duties)
    {
        $this->duties = $new_duties;
    }

    function getDuties()
    {
        return $this->duties;
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
