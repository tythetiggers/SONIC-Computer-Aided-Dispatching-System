<?php

namespace SCADS\Core\Controllers\Home;

use SCADS\App\Templating\TemplatingEngine;


class HomeController
{

  protected $templatingEngine;
  public function __construct()
  {
    $this->templatingEngine = new TemplatingEngine();
  }
  public function execute()
  {
    $data = [
      'title' => 'Home',
      'content' => 'Welcome to my app!',
    ];

    return $this->templatingEngine->render('index', $data);

  }
}
