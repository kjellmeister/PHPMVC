<?php
/**
* Holding a instance of CLydia to enable use of $this in subclasses.
*
* @package LydiaCore
*/
class CObject {

   public $config;
   public $request;
   public $data;
   public $db;
   public $session;
   public $views;

     /**
   * Constructor, can be instantiated by sending in the $ly reference.
   */
  protected function __construct($ly=null) {
    if(!$ly) {
      $ly = CLydia::Instance();
    } 
    $this->config   = &$ly->config;
    $this->request  = &$ly->request;
    $this->data     = &$ly->data;
    $this->db       = &$ly->db;
    $this->views    = &$ly->views;
    $this->session  = &$ly->session;
    $this->user     = &$ly->user;
  }
  
  protected function RedirectTo($urlOrController=null, $method=null)
  {
    $ly = CLydia::Instance();
    $ly->RedirectTo($urlOrController=null, $method=null);
  }
  
  protected function RedirectToController($method=null, $arguments=null)
  {
    $ly = CLydia::Instance();
    $ly->RedirectToController($method, $arguments);
  }
  
  protected function AddMessage($type, $message)
  {
    $ly = CLydia::Instance();
    $ly->AddMessage($type, $message);
  }
  
  protected function CreateUrl($urlOrController=null, $method=null, $arguments=null)
  {
    $ly = CLydia::Instance();
    return $ly->request->CreateUrl($urlOrController, $method, $arguments);
  }
  
  protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $ly = CLydia::Instance();
    $ly->RedirectToControllerMethod($controller, $method, $arguments);
  }

}
