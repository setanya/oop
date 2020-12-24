<?php


class Flash
{
    private $session;
     public function __construct(Session $objSes){//только объект класса Session

         $this->session = $objSes;
     }
     public function setMessege($rte, $value){//
         $this->session->setSession($rte, $value);
     }
     public function getMessege($k){
        return $this->session->getSession($k);
     }
}