<?php
declare(strict_types=1);
namespace MRBS\Form;

class ElementInputSubmit extends ElementInput
{

  public function __construct()
  {
    parent::__construct();
    $this->setAttribute('type', 'submit');
  }

}
