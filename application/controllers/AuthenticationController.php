<?php
/* Icinga Web 2 | (c) 2013 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Loginhooks\Controllers;

use Exception;
use Icinga\Application\Hook;

use Icinga\Application\Icinga;
use Icinga\Application\Logger;
use Icinga\Module\Loginhooks\Hook\LoginFormModifierHook;


/**
 * Application wide controller for authentication
 */
class AuthenticationController extends \Icinga\Controllers\AuthenticationController
{
    /**
     * Log into the application
     */
    public function loginAction()
    {

        $this->view->addHelperPath(Icinga::app()->getBaseDir()
                . DIRECTORY_SEPARATOR . "application/views/helpers/");
        $this->view->addScriptPath(Icinga::app()->getBaseDir()
            . DIRECTORY_SEPARATOR . "application/views/scripts/");
        parent::loginAction();

        $form = $this->view->form;
        $before =[];
        $after =[];

        foreach (Hook::all('loginhooks/LoginFormModifier') as $hook) {
            /** @var LoginFormModifierHook $hook */
            try {
                $hook->init();
                $before[]= $hook->renderBeforeForm();
                $after[]= $hook->renderAfterForm();
                $form=$hook->manipulateLoginForm($form);
            } catch (Exception $e) {
                Logger::error(
                    'Failed to propagate use loginformhook "%s". An error occurred: %s',
                    get_class($hook),
                    $e
                );
            }
        }
        $this->view->form=
            implode("\n",$before) . $form . implode("\n",$after);

    }

}
