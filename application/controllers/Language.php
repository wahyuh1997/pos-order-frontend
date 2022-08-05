<?php

class Language extends CI_Controller
{
  function switch_lang($param)
  {
    $cookie = [
      'name'    => 'language',
      'value'   => $param,
      'expire'  => '864700',
    ];

    set_cookie($cookie);
  }
}
