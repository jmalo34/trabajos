<?php
class Trabajo
{
    private $title;
    private $duties;
    private $company;
    private $location;

    function __construct($title, $duties, $company, $location)
    {
        $this->title = $title;
        $this->duties = $duties;
        $this->company = $company;
        $this->location = $location;
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

    function setCompany($new_company)
    {
        $this->company = $new_company;
    }

    function getCompany()
    {
        return $this->company;
    }

    function setLocation($new_location)
    {
        $this->location = $new_location;
    }

    function getLocation()
    {
        return $this->location;
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
