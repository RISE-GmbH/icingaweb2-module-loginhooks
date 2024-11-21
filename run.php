<?php

use Icinga\Application\Icinga;

/** @var $this \Icinga\Application\Modules\Module */


    $this->addRoute('authentication/login', new Zend_Controller_Router_Route_Static(
        'authentication/login',
        [
            'controller'    => 'authentication',
            'action'        => 'login',
            'module'        => 'loginhooks'
        ]
    ));
//$this->provideHook('loginhooks/LoginFormModifier', \Icinga\Module\Loginhooks\ProvidedHook\LoginFormModifier::class, true);




