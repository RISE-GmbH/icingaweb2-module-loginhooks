<?php

namespace Icinga\Module\Loginhooks\Hook;



abstract class LoginFormModifierHook
{
    public function init(){

    }


    public function renderBeforeForm(){
        return "";
    }
    public function renderAfterForm(){
        return "";
    }
    public function manipulateLoginForm($form){
        return $form;
    }
}
