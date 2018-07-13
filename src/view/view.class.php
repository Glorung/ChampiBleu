<?php

class view
{
    private $_head;
    private $_body;
    private $_script;

    public function __construct()
    {
        $this->_head = "";
        $this->_body = "";
        $this->_script = "";
    }

    public function addHead($data)
    {
        $this->_head .= $data;
    }

    public function addBody($data)
    {
        $this->_body .= $data;
    }

    public function addScript($data)
    {
        $this->_script .= $data;
    }

    public function viewAll()
    {
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<meta charset='utf-8'>";
        echo $this->_head;
        echo "</head>";
        echo "<body>";
        echo $this->_body;
        echo "</body>";
        echo "</html>";
        echo "<script>";
        echo $this->_script;
        echo "</script>";
    }

}
