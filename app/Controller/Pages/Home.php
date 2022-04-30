<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{
  /**
   * Método responsável por retornar o conteúdo (view) da nossa página genérica
   * @return string
   */
  public static function getHome()
  {
    $obOrganization = new Organization;

    $content = View::render('pages/home', [
      'name'        => $obOrganization->name,
      'description' => $obOrganization->description,
      'site'        => $obOrganization->site
    ]);

    return parent::getPage('W DEV - Canal - HOME', $content);
  }
}
