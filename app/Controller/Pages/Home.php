<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page {
  
  /**
   * M�todo respons�vel por retornar o conte�do (view) da nossa p�gina gen�rica
   * @return string
   */
  public static function getHome() {
    $obOrganization = new Organization;

    $content = View::render('pages/home', [
      'name' => $obOrganization->name,
      'description' => $obOrganization->description,
      'site' => $obOrganization->site
    ]);

    return parent::getPage('W DEV - Canal - HOME', $content);
  }

}