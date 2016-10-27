<?php
require_once 'Template.php';
class Template implements iTemplate
{
   public $lo, $ol, $lol;
  
   public function sum($lo, $ol)
    {
		$this->lo = $lo;
		$this->ol = $ol;
        $this->lol=$this->lo + $this->ol;
    }
   public function out()
    {
        return $this->lol;
    }
};
?>