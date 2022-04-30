<?php

namespace App\Http;

class Request
{
  /**
   * M�todo HTTP da requisi��o
   * @var string
   */
  private $httpMethod;

  /**
   * URI da p�gina
   * @var string
   */
  private $uri;

  /**
   * Par�metros da URL ($_GET)
   * @var array
   */
  private $queryParams = [];

  /**
   * Vari�veis recebidas no POST dap�gina ($_POST)
   * @var array
   */
  private $postVars = [];

  /**
   * Cabe�alho da requisi��o
   * @var array
   */
  private $headers = [];

  /**
   * Construtor da classe
   */
  public function __construct()
  {
    $this->queryParams = $_GET ?? [];
    $this->postVars    = $_POST ?? [];
    $this->headers     = getallheaders();
    $this->httpMethod  = $_SERVER['REQUEST_METHOD'] ?? '';
    $this->uri         = $_SERVER['REQUEST_URI'] ?? '';
  }

  /**
   * M�todo respons�vel por retornar o m�todo HTTP da requisi��o
   * @return string
   */
  public function getHttpMethod()
  {
    return $this->httpMethod;
  }

  /**
   * M�todo respons�vel por retornar a URI da requisi��o
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }

  /**
   * M�todo respons�vel por retornar os headers da requisi��o
   * @return array
   */
  public function getHeaders()
  {
    return $this->headers;
  }

  /**
   * M�todo respons�vel por retornar os par�metros da URL da requisi��o
   * @return array
   */
  public function getQueryParams()
  {
    return $this->queryParams;
  }

  /**
   * M�todo respons�vel por retornar as vari�veis POST da requisi��o
   * @return array
   */
  public function getPostVars()
  {
    return $this->postVars;
  }
}
