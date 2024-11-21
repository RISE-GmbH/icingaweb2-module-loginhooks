<?php

namespace Icinga\Module\Oidc\Hook;



abstract class OnUserSaveHook
{
    public function init(){

    }


    public function renderBeforeForm(){
        return "";
    }
    public function renderAfterForm(){
        return "";
    }
}
