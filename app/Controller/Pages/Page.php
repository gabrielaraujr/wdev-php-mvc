<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{
  /**
   * M�todo respons�vel por renderizar o topo da p�gina
   * @return string
   */
  private static function getHeader()
  {
    return View::render('pages/header');
  }

  /**
   * M�todo respons�vel por retornar o conte�do (view) da nossa home
   * @return string
   */
  public static function getPage($title, $content)
  {
    return View::render('pages/page', [
      'title'   => $title,
      'header'  => self::getHeader(),
      'content' => $content,
      'footer'  => self::getFooter()
    ]);
  }

  /**
   * M�todo respons�vel por renderizar o rodap� da p�gina
   * @return string
   */
  private static function getFooter()
  {
    return View::render('pages/footer');
  }
}
