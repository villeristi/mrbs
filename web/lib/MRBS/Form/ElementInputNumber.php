<?php
declare(strict_types=1);
namespace MRBS\Form;

class ElementInputNumber extends ElementInput
{

  public function __construct()
  {
    parent::__construct();
    $this->setAttributes(array('type' => 'number',
                               'step' => '1'));
  }

}
