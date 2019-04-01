<?php

class carte
{
  private $id_c;

  function __construct($id_c)
  {
    $this->id_c = $id_c;

  }
  function getid_c (){ return $this->id_c;}
}
?>
