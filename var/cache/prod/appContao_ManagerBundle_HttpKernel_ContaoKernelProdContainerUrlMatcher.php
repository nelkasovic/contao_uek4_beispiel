<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/contao/install' => [[['_route' => 'contao_install', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\InstallationBundle\\Controller\\InstallationController::installAction'], null, null, null, false, false, null]],
            '/contao' => [
                [['_route' => 'contao_backend', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::mainAction'], null, null, null, false, false, null],
                [['_route' => 'contao_backend_redirect', '_scope' => 'backend', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'contao_backend', 'permanent' => true], null, null, null, true, false, null],
            ],
            '/contao/login' => [[['_route' => 'contao_backend_login', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::loginAction'], null, null, null, false, false, null]],
            '/contao/logout' => [[['_route' => 'contao_backend_logout', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::logoutAction'], null, null, null, false, false, null]],
            '/contao/password' => [[['_route' => 'contao_backend_password', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::passwordAction'], null, null, null, false, false, null]],
            '/contao/preview' => [[['_route' => 'contao_backend_preview', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::previewAction'], null, null, null, false, false, null]],
            '/contao/confirm' => [[['_route' => 'contao_backend_confirm', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::confirmAction'], null, null, null, false, false, null]],
            '/contao/file' => [[['_route' => 'contao_backend_file', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::fileAction'], null, null, null, false, false, null]],
            '/contao/help' => [[['_route' => 'contao_backend_help', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::helpAction'], null, null, null, false, false, null]],
            '/contao/page' => [[['_route' => 'contao_backend_page', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pageAction'], null, null, null, false, false, null]],
            '/contao/popup' => [[['_route' => 'contao_backend_popup', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::popupAction'], null, null, null, false, false, null]],
            '/contao/switch' => [[['_route' => 'contao_backend_switch', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::switchAction'], null, null, null, false, false, null]],
            '/contao/alerts' => [[['_route' => 'contao_backend_alerts', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::alertsAction'], null, null, null, false, false, null]],
            '/contao/picker' => [[['_route' => 'contao_backend_picker', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pickerAction'], null, null, null, false, false, null]],
            '/contao/two-factor' => [[['_route' => 'contao_backend_two_factor', '_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::twoFactorAuthenticationAction'], null, null, null, false, false, null]],
            '/_contao/cron' => [[['_route' => 'contao_frontend_cron', '_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::cronAction'], null, null, null, false, false, null]],
            '/_contao/share' => [[['_route' => 'contao_frontend_share', '_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::shareAction'], null, null, null, false, false, null]],
            '/_contao/login' => [[['_route' => 'contao_frontend_login', '_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::loginAction'], null, null, null, false, false, null]],
            '/_contao/logout' => [[['_route' => 'contao_frontend_logout', '_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::logoutAction'], null, null, null, false, false, null]],
            '/_contao/initialize' => [[['_route' => 'contao_initialize', '_controller' => 'Contao\\CoreBundle\\Controller\\InitializeController::indexAction'], null, null, null, false, false, null]],
        ];
    }
}
