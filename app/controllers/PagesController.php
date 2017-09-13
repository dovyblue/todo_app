<?php

namespace App\Controller;

class PagesController
{
  public function home()
  {
    return views("index");
  }

  public function about()
  {
    return views("about");
  }

  public function contact()
  {
    return views("contact");
  }
}