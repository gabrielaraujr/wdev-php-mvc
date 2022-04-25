<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page {
  
  /**
   * M�todo respons�vel por retornar o conte�do (view) da nossa p�gina gen�rica
   * @return string
   */
  public static function getHome() {
    $content = View::render('pages/home', [
      'name' => 'WDEV - Canal',
      'description' => 'Canal do youtube: https://youtube.com.br/wdevoficial',
      'site' => 'https://youtube.com.br/wdevoficial'
    ]);

    return parent::getPage('W DEV - Canal - HOME', $content);
  }

}