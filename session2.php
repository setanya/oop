<?php
require_once 'Session.php';
require_once 'Flash.php';
$obj = new Session();
echo $obj->setSession('login', '147852369');
echo $obj->getSession('login');
$flash = new Flash($obj);
echo $flash->getMessege('login');

