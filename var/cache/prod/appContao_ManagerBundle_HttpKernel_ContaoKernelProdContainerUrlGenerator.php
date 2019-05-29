<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'contao_install' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\InstallationBundle\\Controller\\InstallationController::installAction'], [], [['text', '/contao/install']], [], []],
        'contao_backend' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::mainAction'], [], [['text', '/contao']], [], []],
        'contao_backend_login' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::loginAction'], [], [['text', '/contao/login']], [], []],
        'contao_backend_logout' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::logoutAction'], [], [['text', '/contao/logout']], [], []],
        'contao_backend_password' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::passwordAction'], [], [['text', '/contao/password']], [], []],
        'contao_backend_preview' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::previewAction'], [], [['text', '/contao/preview']], [], []],
        'contao_backend_confirm' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::confirmAction'], [], [['text', '/contao/confirm']], [], []],
        'contao_backend_file' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::fileAction'], [], [['text', '/contao/file']], [], []],
        'contao_backend_help' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::helpAction'], [], [['text', '/contao/help']], [], []],
        'contao_backend_page' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pageAction'], [], [['text', '/contao/page']], [], []],
        'contao_backend_popup' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::popupAction'], [], [['text', '/contao/popup']], [], []],
        'contao_backend_switch' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::switchAction'], [], [['text', '/contao/switch']], [], []],
        'contao_backend_alerts' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::alertsAction'], [], [['text', '/contao/alerts']], [], []],
        'contao_backend_picker' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pickerAction'], [], [['text', '/contao/picker']], [], []],
        'contao_backend_two_factor' => [[], ['_scope' => 'backend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::twoFactorAuthenticationAction'], [], [['text', '/contao/two-factor']], [], []],
        'contao_frontend_cron' => [[], ['_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::cronAction'], [], [['text', '/_contao/cron']], [], []],
        'contao_frontend_share' => [[], ['_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::shareAction'], [], [['text', '/_contao/share']], [], []],
        'contao_frontend_login' => [[], ['_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::loginAction'], [], [['text', '/_contao/login']], [], []],
        'contao_frontend_logout' => [[], ['_scope' => 'frontend', '_token_check' => true, '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::logoutAction'], [], [['text', '/_contao/logout']], [], []],
        'contao_initialize' => [[], ['_controller' => 'Contao\\CoreBundle\\Controller\\InitializeController::indexAction'], [], [['text', '/_contao/initialize']], [], []],
        'contao_backend_redirect' => [[], ['_scope' => 'backend', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'contao_backend', 'permanent' => true], [], [['text', '/contao/']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
