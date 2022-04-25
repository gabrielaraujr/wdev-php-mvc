<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page {
  
  /**
   * Método responsável por retornar o conteúdo (view) da nossa página genérica
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