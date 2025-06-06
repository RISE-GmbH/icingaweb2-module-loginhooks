<?php
# Mikesch-mp/icingaweb2-module-grafana
namespace Icinga\Module\Loginhooks\ProvidedHook;


use Icinga\Module\Loginhooks\Hook\LoginFormModifierHook;
use ipl\Html\Html;

class LoginFormModifier extends LoginFormModifierHook
{

    public function renderAfterForm()
    {
        $html = Html::tag('p',[],"LOGINHOOK ON");
        return $html;
    }

}
