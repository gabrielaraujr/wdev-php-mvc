<?php

namespace App\Http;

class Response
{
  /**
   * C�digo do Status HTTP
   * @var integer
   */
  private $httpCode = 200;

  /**
   * Cabe�alho do Response
   * @var array
   */
  private $headers = [];

  /**
   * Tipo de conte�do que est� sendo retornado
   * @var string
   */
  private $contentType = 'text/html';

  /**
   * Conte�do do Response
   * @var mixed
   */
  private $content;

  /**
   * M�todo respons�vel por iniciar a classe e definir os valores
   * @param integer $httpCode
   * @param mixed   $content
   * @param string  $contentType
   */
  public function __construct($httpCode, $content, $contentType = 'text/html')
  {
    $this->httpCode = $httpCode;
    $this->content  = $content;
    $this->setContentType($contentType);
  }

  /**
   * M�todo respons�vel por alterar o content type do response
   * @param string $contentType
   */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
    $this->addHeader('Content-Type', $contentType);
  }

  /**
   *  M�todo respons�vel por adicionar um registro no cabe�alho do response
   * @param string $key
   * @param string $value
   */
  public function addHeader($key, $value)
  {
    $this->headers[$key] = $value;
  }
}
