<?php

namespace ContainerU4ukGDj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'contao_manager.plugin_loader' => true,
            'kernel' => true,
        ];
        $this->methodMap = [
            'contao.csrf.token_manager' => 'getContao_Csrf_TokenManagerService',
            'contao.framework' => 'getContao_FrameworkService',
            'contao.routing.nested_matcher' => 'getContao_Routing_NestedMatcherService',
            'contao.routing.scope_matcher' => 'getContao_Routing_ScopeMatcherService',
            'contao.security.token_checker' => 'getContao_Security_TokenCheckerService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'event_dispatcher' => 'getEventDispatcherService',
            'fos_http_cache.cache_manager' => 'getFosHttpCache_CacheManagerService',
            'fos_http_cache.http.symfony_response_tagger' => 'getFosHttpCache_Http_SymfonyResponseTaggerService',
            'fos_http_cache.proxy_client.symfony' => 'getFosHttpCache_ProxyClient_SymfonyService',
            'http_kernel' => 'getHttpKernelService',
            'lexik_maintenance.driver.factory' => 'getLexikMaintenance_Driver_FactoryService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'translator' => 'getTranslatorService',
        ];
        $this->fileMap = [
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'assets.packages' => 'getAssets_PackagesService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand' => 'getDriverLockCommandService.php',
            'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand' => 'getDriverUnlockCommandService.php',
            'console.command.public_alias.contao.command.automator' => 'getConsole_Command_PublicAlias_Contao_Command_AutomatorService.php',
            'console.command.public_alias.contao.command.filesync' => 'getConsole_Command_PublicAlias_Contao_Command_FilesyncService.php',
            'console.command.public_alias.contao.command.install-web-dir' => 'getConsole_Command_PublicAlias_Contao_Command_InstallwebdirService.php',
            'console.command.public_alias.contao.command.lock' => 'getConsole_Command_PublicAlias_Contao_Command_LockService.php',
            'console.command.public_alias.contao.command.unlock' => 'getConsole_Command_PublicAlias_Contao_Command_UnlockService.php',
            'console.command.public_alias.contao.command.user_password_command' => 'getConsole_Command_PublicAlias_Contao_Command_UserPasswordCommandService.php',
            'console.command.public_alias.contao.command.version' => 'getConsole_Command_PublicAlias_Contao_Command_VersionService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'contao.assets.assets_context' => 'getContao_Assets_AssetsContextService.php',
            'contao.assets.files_context' => 'getContao_Assets_FilesContextService.php',
            'contao.command.install' => 'getContao_Command_InstallService.php',
            'contao.command.symlinks' => 'getContao_Command_SymlinksService.php',
            'contao.controller.backend_csv_import' => 'getContao_Controller_BackendCsvImportService.php',
            'contao.controller.insert_tags' => 'getContao_Controller_InsertTagsService.php',
            'contao.image.image_factory' => 'getContao_Image_ImageFactoryService.php',
            'contao.image.image_sizes' => 'getContao_Image_ImageSizesService.php',
            'contao.image.imagine' => 'getContao_Image_ImagineService.php',
            'contao.image.imagine_svg' => 'getContao_Image_ImagineSvgService.php',
            'contao.image.picture_factory' => 'getContao_Image_PictureFactoryService.php',
            'contao.image.picture_generator' => 'getContao_Image_PictureGeneratorService.php',
            'contao.image.resizer' => 'getContao_Image_ResizerService.php',
            'contao.install_tool' => 'getContao_InstallToolService.php',
            'contao.install_tool_user' => 'getContao_InstallToolUserService.php',
            'contao.installer' => 'getContao_InstallerService.php',
            'contao.listener.GgExw63' => 'getContao_Listener_GgExw63Service.php',
            'contao.listener.data_container_callback' => 'getContao_Listener_DataContainerCallbackService.php',
            'contao.listener.insert_tags.asset' => 'getContao_Listener_InsertTags_AssetService.php',
            'contao.listener.insert_tags.translation' => 'getContao_Listener_InsertTags_TranslationService.php',
            'contao.menu.backend_menu_builder' => 'getContao_Menu_BackendMenuBuilderService.php',
            'contao.menu.backend_menu_renderer' => 'getContao_Menu_BackendMenuRendererService.php',
            'contao.menu.renderer' => 'getContao_Menu_RendererService.php',
            'contao.opt-in' => 'getContao_OptinService.php',
            'contao.picker.builder' => 'getContao_Picker_BuilderService.php',
            'contao.resource_finder' => 'getContao_ResourceFinderService.php',
            'contao.resource_locator' => 'getContao_ResourceLocatorService.php',
            'contao.routing.url_generator' => 'getContao_Routing_UrlGeneratorService.php',
            'contao.security.frontend_preview_authenticator' => 'getContao_Security_FrontendPreviewAuthenticatorService.php',
            'contao.security.two_factor.authenticator' => 'getContao_Security_TwoFactor_AuthenticatorService.php',
            'contao.slug' => 'getContao_SlugService.php',
            'contao.slug.generator' => 'getContao_Slug_GeneratorService.php',
            'contao.slug.valid_characters' => 'getContao_Slug_ValidCharactersService.php',
            'contao_calendar.listener.generate_page' => 'getContaoCalendar_Listener_GeneratePageService.php',
            'contao_calendar.listener.insert_tags' => 'getContaoCalendar_Listener_InsertTagsService.php',
            'contao_faq.listener.insert_tags' => 'getContaoFaq_Listener_InsertTagsService.php',
            'contao_manager.routing_loader' => 'getContaoManager_RoutingLoaderService.php',
            'contao_news.listener.generate_page' => 'getContaoNews_Listener_GeneratePageService.php',
            'contao_news.listener.insert_tags' => 'getContaoNews_Listener_InsertTagsService.php',
            'filesystem' => 'getFilesystemService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService.php',
            'monolog.logger.contao' => 'getMonolog_Logger_ContaoService.php',
            'nelmio_security.csp_reporter_controller' => 'getNelmioSecurity_CspReporterControllerService.php',
            'nelmio_security.ua_parser.ua_php' => 'getNelmioSecurity_UaParser_UaPhpService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'scheb_two_factor.firewall_context' => 'getSchebTwoFactor_FirewallContextService.php',
            'scheb_two_factor.form_controller' => 'getSchebTwoFactor_FormControllerService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig' => 'getTwigService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
        ];
        $this->aliases = [
            'FOS\\HttpCacheBundle\\CacheManager' => 'fos_http_cache.cache_manager',
            'FOS\\HttpCacheBundle\\Http\\SymfonyResponseTagger' => 'fos_http_cache.http.symfony_response_tagger',
            'FOS\\HttpCache\\ResponseTagger' => 'fos_http_cache.http.symfony_response_tagger',
            'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\TwoFactorFirewallContext' => 'scheb_two_factor.firewall_context',
            'database_connection' => 'doctrine.dbal.default_connection',
            'mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle\\Security\\TwoFactor\\Trusted\\JwtTokenEncoder.php';
            include_once $this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle\\Security\\TwoFactor\\Trusted\\TrustedCookieResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\terminal42\\header-replay-bundle\\src\\EventListener\\HeaderReplayListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerNameParser.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\HttpKernel\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\UriSigner.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Session.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Storage\\SessionStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Storage\\NativeSessionStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Session\\Attribute\\ArrayAttributeBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceLocatorTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenGenerator\\TokenGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenStorage\\TokenStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenStorage\\ClearableTokenStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenStorage\\SessionTokenStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpCache\\SurrogateInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpCache\\AbstractSurrogate.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpCache\\Esi.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\SurrogateListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\FragmentListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Translation\\LocaleAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\TranslatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Translation\\TranslatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\IntlFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\MessageFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Translation\\TranslatorTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\IdentityTranslator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\TranslatorListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\EventListener\\FirewallListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\FirewallMapInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Security\\FirewallMap.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Logout\\LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\RememberMe\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\ResettableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Log\\DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\monolog-bridge\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\ProcessorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossedHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\RotatingFileHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\monolog-bridge\\Handler\\FingersCrossed\\HttpCodeActivationStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\monolog-bridge\\Handler\\ConsoleHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ConnectionRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\RegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle\\Drivers\\DriverFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle\\Drivers\\AbstractDriver.php';
            include_once $this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle\\Drivers\\DriverTtlInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle\\Drivers\\DatabaseDriver.php';
            include_once $this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle\\Listener\\MaintenanceListener.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\cors-bundle\\EventListener\\CorsListener.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\cors-bundle\\Options\\ResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\cors-bundle\\Options\\Resolver.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\cors-bundle\\Options\\ProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\cors-bundle\\Options\\ConfigProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Cors\\WebsiteRootsConfigProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\EventListener\\AbstractContentTypeRestrictableListener.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\EventListener\\ClickjackingListener.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\EventListener\\ContentSecurityPolicyListener.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\ContentSecurityPolicy\\DirectiveSet.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\ContentSecurityPolicy\\PolicyManager.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\ContentSecurityPolicy\\NonceGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\ContentSecurityPolicy\\ShaComputer.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\EventListener\\XssProtectionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\EventListener\\ContentTypeListener.php';
            include_once $this->targetDirs[3].'\\vendor\\nelmio\\security-bundle\\EventListener\\ReferrerPolicyListener.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\RuleMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\RuleMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\RequestMatcher\\UnsafeRequestMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\ResponseMatcher\\ResponseMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\ResponseMatcher\\NonErrorResponseMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\ProxyClient.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\HttpProxyClient.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\Invalidation\\PurgeCapable.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\Invalidation\\RefreshCapable.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\Invalidation\\TagCapable.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\Invalidation\\ClearCapable.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\Symfony.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ProxyClient\\Dispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\SymfonyCache\\KernelDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\CacheInvalidator.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\CacheManager.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\ResponseTagger.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\SymfonyResponseTagger.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\TagHeaderFormatter\\TagHeaderFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\TagHeaderFormatter\\MaxHeaderValueLengthFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache\\src\\TagHeaderFormatter\\CommaSeparatedTagHeaderFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\EventListener\\AbstractRuleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\EventListener\\TagListener.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\RequestMatcher\\CacheableRequestMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Http\\ResponseMatcher\\CacheableResponseMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\BackendLocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\BypassMaintenanceListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\ClearSessionDataListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\InsecureInstallationListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\LocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\MergeHttpHeadersListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\RefererIdListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\CsrfTokenManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\CsrfTokenManager.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Referer\\TokenGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\RequestTokenListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\StoreRefererListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\ToggleViewListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\CsrfTokenCookieListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\UserSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Csrf\\MemoryTokenStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Fragment\\FragmentRegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Fragment\\FragmentRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\ContaoFrameworkInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Framework\\ContaoFrameworkInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Framework\\ContaoFramework.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Monolog\\ContaoTableHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Monolog\\ContaoTableProcessor.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\Loader.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\FrontendLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\RouteProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\LegacyRouteProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\RouteProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\ScopeMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Security\\Authentication\\Token\\TokenChecker.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\ChainRouterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\ChainRouter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\FrozenParameterBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\VersatileGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\ChainedRouterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\Enhancer\\RouteEnhancerTrait.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\DynamicRouter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Generator\\ConfigurableRequirementsInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Generator\\UrlGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\ProviderBasedGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\Enhancer\\RouteEnhancerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\Enhancer\\InputEnhancer.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle\\Security\\Authentication\\AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\Matcher\\LegacyMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\NestedMatcher\\NestedMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\UrlMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\RedirectableUrlMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\RedirectableUrlMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\RedirectableUrlMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\NestedMatcher\\FinalMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\Matcher\\UrlMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony-cmf\\routing\\src\\NestedMatcher\\RouteFilterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\Matcher\\DomainFilter.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\Matcher\\PublishedFilter.php';
            include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Routing\\Matcher\\LanguageFilter.php';
        };
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /*
     * Gets the public 'contao.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getContao_Csrf_TokenManagerService()
    {
        return $this->services['contao.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(($this->privates['security.csrf.token_generator'] ?? ($this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator())), ($this->privates['contao.csrf.token_storage'] ?? ($this->privates['contao.csrf.token_storage'] = new \Contao\CoreBundle\Csrf\MemoryTokenStorage())));
    }

    /*
     * Gets the public 'contao.framework' shared service.
     *
     * @return \Contao\CoreBundle\Framework\ContaoFramework
     */
    protected function getContao_FrameworkService()
    {
        $this->services['contao.framework'] = $instance = new \Contao\CoreBundle\Framework\ContaoFramework(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService()), $this->targetDirs[3], 8183);

        $instance->setContainer($this);
        $instance->setHookListeners(['loadDataContainer' => [0 => [0 => [0 => 'contao.listener.data_container_callback', 1 => 'onLoadDataContainer']]], 'replaceInsertTags' => [0 => [0 => [0 => 'contao.listener.insert_tags.asset', 1 => 'onReplaceInsertTags'], 1 => [0 => 'contao.listener.insert_tags.translation', 1 => 'onReplaceInsertTags']]], 'initializeSystem' => [255 => [0 => [0 => 'contao.listener.GgExw63', 1 => 'onInitializeSystem']]]]);

        return $instance;
    }

    /*
     * Gets the public 'contao.routing.nested_matcher' shared service.
     *
     * @return \Contao\CoreBundle\Routing\Matcher\LegacyMatcher
     */
    protected function getContao_Routing_NestedMatcherService()
    {
        $a = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher(($this->privates['contao.routing.legacy_route_provider'] ?? $this->getContao_Routing_LegacyRouteProviderService()), new \Contao\CoreBundle\Routing\Matcher\UrlMatcher());
        $a->addRouteFilter(new \Contao\CoreBundle\Routing\Matcher\DomainFilter());
        $a->addRouteFilter(new \Contao\CoreBundle\Routing\Matcher\PublishedFilter(($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService())));
        $a->addRouteFilter(new \Contao\CoreBundle\Routing\Matcher\LanguageFilter(false));

        return $this->services['contao.routing.nested_matcher'] = new \Contao\CoreBundle\Routing\Matcher\LegacyMatcher(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), $a, '.html', false);
    }

    /*
     * Gets the public 'contao.routing.scope_matcher' shared service.
     *
     * @return \Contao\CoreBundle\Routing\ScopeMatcher
     */
    protected function getContao_Routing_ScopeMatcherService()
    {
        return $this->services['contao.routing.scope_matcher'] = new \Contao\CoreBundle\Routing\ScopeMatcher(($this->privates['contao.routing.backend_matcher'] ?? $this->getContao_Routing_BackendMatcherService()), ($this->privates['contao.routing.frontend_matcher'] ?? $this->getContao_Routing_FrontendMatcherService()));
    }

    /*
     * Gets the public 'contao.security.token_checker' shared service.
     *
     * @return \Contao\CoreBundle\Security\Authentication\Token\TokenChecker
     */
    protected function getContao_Security_TokenCheckerService()
    {
        return $this->services['contao.security.token_checker'] = new \Contao\CoreBundle\Security\Authentication\Token\TokenChecker(($this->services['session'] ?? $this->getSessionService()), ($this->services['security.authentication.trust_resolver'] ?? $this->getSecurity_Authentication_TrustResolverService()));
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], [], 'default', '');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contao.listener.doctrine_schema' => ['privates', 'contao.listener.doctrine_schema', 'getContao_Listener_DoctrineSchemaService.php', true],
        ]));
        $a->addEventListener([0 => 'onSchemaIndexDefinition'], 'contao.listener.doctrine_schema');
        $a->addEventListener([0 => 'postGenerateSchema'], 'contao.listener.doctrine_schema');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']))->createConnection(['driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => 3306, 'user' => 'root', 'password' => '', 'dbname' => 'uek4_beispiel', 'charset' => 'utf8mb4', 'driverOptions' => [], 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB']], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['scheb_two_factor.trusted_cookie_response_listener'] ?? $this->getSchebTwoFactor_TrustedCookieResponseListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['terminal42.header_replay.header_replay_listener'] ?? $this->getTerminal42_HeaderReplay_HeaderReplayListenerService());
        }, 1 => 'onKernelRequest'], -2048);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['terminal42.header_replay.header_replay_stop_propagation_listener'] ?? $this->load('getTerminal42_HeaderReplay_HeaderReplayStopPropagationListenerService.php'));
        }, 1 => 'onKernelTerminate'], 2048);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['http_exception_listener'] ?? $this->load('getHttpExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['lexik_maintenance.listener'] ?? $this->getLexikMaintenance_ListenerService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['lexik_maintenance.listener'] ?? $this->getLexikMaintenance_ListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.content_type_listener'] ?? ($this->privates['nelmio_security.content_type_listener'] = new \Nelmio\SecurityBundle\EventListener\ContentTypeListener(true)));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.referrer_policy_listener'] ?? $this->getNelmioSecurity_ReferrerPolicyListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('contao.backend_menu_build', [0 => function () {
            return ($this->privates['contao_manager.listener.backend_menu_listener'] ?? $this->load('getContaoManager_Listener_BackendMenuListenerService.php'));
        }, 1 => 'onBuild'], -10);
        $instance->addListener('contao_installation.initialize_application', [0 => function () {
            return ($this->privates['contao_manager.listener.initialize_application'] ?? ($this->privates['contao_manager.listener.initialize_application'] = new \Contao\ManagerBundle\EventListener\InitializeApplicationListener($this->targetDirs[3])));
        }, 1 => 'onInitializeApplication'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['contao_manager.listener.install_command'] ?? ($this->privates['contao_manager.listener.install_command'] = new \Contao\ManagerBundle\EventListener\InstallCommandListener($this->targetDirs[3])));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['contao.listener.add_to_search_index'] ?? $this->load('getContao_Listener_AddToSearchIndexService.php'));
        }, 1 => 'onKernelTerminate'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.backend_locale'] ?? $this->getContao_Listener_BackendLocaleService());
        }, 1 => 'onKernelRequest'], 7);
        $instance->addListener('contao.backend_menu_build', [0 => function () {
            return ($this->privates['contao.listener.backend_menu_listener'] ?? $this->load('getContao_Listener_BackendMenuListenerService.php'));
        }, 1 => 'onBuild'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.bypass_maintenance'] ?? $this->getContao_Listener_BypassMaintenanceService());
        }, 1 => 'onKernelRequest'], 6);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.clear_session_data'] ?? ($this->privates['contao.listener.clear_session_data'] = new \Contao\CoreBundle\EventListener\ClearSessionDataListener()));
        }, 1 => 'onKernelResponse'], -768);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['contao.listener.command_scheduler'] ?? $this->load('getContao_Listener_CommandSchedulerService.php'));
        }, 1 => 'onKernelTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['contao.listener.exception_converter'] ?? $this->load('getContao_Listener_ExceptionConverterService.php'));
        }, 1 => 'onKernelException'], 96);
        $instance->addListener('terminal42.header_replay', [0 => function () {
            return ($this->privates['contao.listener.header_replay.user_session'] ?? $this->load('getContao_Listener_HeaderReplay_UserSessionService.php'));
        }, 1 => 'onReplay'], 0);
        $instance->addListener('terminal42.header_replay', [0 => function () {
            return ($this->privates['contao.listener.header_replay.page_layout'] ?? $this->load('getContao_Listener_HeaderReplay_PageLayoutService.php'));
        }, 1 => 'onReplay'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.insecure_installation'] ?? ($this->privates['contao.listener.insecure_installation'] = new \Contao\CoreBundle\EventListener\InsecureInstallationListener()));
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.locale'] ?? $this->getContao_Listener_LocaleService());
        }, 1 => 'onKernelRequest'], 20);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.merge_http_headers'] ?? $this->getContao_Listener_MergeHttpHeadersService());
        }, 1 => 'onKernelResponse'], 256);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['contao.listener.pretty_error_screens'] ?? $this->load('getContao_Listener_PrettyErrorScreensService.php'));
        }, 1 => 'onKernelException'], -96);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.referer_id'] ?? $this->getContao_Listener_RefererIdService());
        }, 1 => 'onKernelRequest'], 20);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.request_token'] ?? $this->getContao_Listener_RequestTokenService());
        }, 1 => 'onKernelRequest'], 30);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['contao.listener.response_exception'] ?? ($this->privates['contao.listener.response_exception'] = new \Contao\CoreBundle\EventListener\ResponseExceptionListener()));
        }, 1 => 'onKernelException'], 64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.store_referer'] ?? $this->getContao_Listener_StoreRefererService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('security.switch_user', [0 => function () {
            return ($this->privates['contao.listener.switch_user'] ?? $this->load('getContao_Listener_SwitchUserService.php'));
        }, 1 => 'onSwitchUser'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.toggle_view'] ?? $this->getContao_Listener_ToggleViewService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.csrf_token_cookie'] ?? $this->getContao_Listener_CsrfTokenCookieService());
        }, 1 => 'onKernelRequest'], 36);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.csrf_token_cookie'] ?? $this->getContao_Listener_CsrfTokenCookieService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.user_session'] ?? $this->getContao_Listener_UserSessionService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('contao.preview_url_create', [0 => function () {
            return ($this->privates['contao_calendar.listener.preview_url_create'] ?? $this->load('getContaoCalendar_Listener_PreviewUrlCreateService.php'));
        }, 1 => 'onPreviewUrlCreate'], 0);
        $instance->addListener('contao.preview_url_convert', [0 => function () {
            return ($this->privates['contao_calendar.listener.preview_url_convert'] ?? $this->load('getContaoCalendar_Listener_PreviewUrlConvertService.php'));
        }, 1 => 'onPreviewUrlConvert'], 0);
        $instance->addListener('contao_installation.initialize_application', [0 => function () {
            return ($this->privates['contao.listener.initialize_application'] ?? $this->load('getContao_Listener_InitializeApplicationService.php'));
        }, 1 => 'onInitialize'], 0);
        $instance->addListener('contao.preview_url_create', [0 => function () {
            return ($this->privates['contao_news.listener.preview_url_create'] ?? $this->load('getContaoNews_Listener_PreviewUrlCreateService.php'));
        }, 1 => 'onPreviewUrlCreate'], 0);
        $instance->addListener('contao.preview_url_convert', [0 => function () {
            return ($this->privates['contao_news.listener.preview_url_convert'] ?? $this->load('getContaoNews_Listener_PreviewUrlConvertService.php'));
        }, 1 => 'onPreviewUrlConvert'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['esi_listener'] ?? $this->getEsiListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fragment.listener'] ?? $this->getFragment_ListenerService());
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.clickjacking_listener'] ?? $this->getNelmioSecurity_ClickjackingListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_security.csp_listener'] ?? $this->getNelmioSecurity_CspListenerService());
        }, 1 => 'onKernelRequest'], 512);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.csp_listener'] ?? $this->getNelmioSecurity_CspListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.xss_protection_listener'] ?? $this->getNelmioSecurity_XssProtectionListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('fos_http_cache.error.proxy_unreachable', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.log'] ?? $this->load('getFosHttpCache_EventListener_LogService.php'));
        }, 1 => 'onProxyUnreachableError'], 0);
        $instance->addListener('fos_http_cache.error.response', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.log'] ?? $this->load('getFosHttpCache_EventListener_LogService.php'));
        }, 1 => 'onProxyResponseError'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.tag'] ?? $this->getFosHttpCache_EventListener_TagService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.invalidation'] ?? $this->load('getFosHttpCache_EventListener_InvalidationService.php'));
        }, 1 => 'onKernelTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.invalidation'] ?? $this->load('getFosHttpCache_EventListener_InvalidationService.php'));
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.invalidation'] ?? $this->load('getFosHttpCache_EventListener_InvalidationService.php'));
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /*
     * Gets the public 'fos_http_cache.cache_manager' shared service.
     *
     * @return \FOS\HttpCacheBundle\CacheManager
     */
    protected function getFosHttpCache_CacheManagerService()
    {
        $this->services['fos_http_cache.cache_manager'] = $instance = new \FOS\HttpCacheBundle\CacheManager(($this->services['fos_http_cache.proxy_client.symfony'] ?? $this->getFosHttpCache_ProxyClient_SymfonyService()), ($this->services['router'] ?? $this->getRouterService()));

        if ($this->has('event_dispatcher')) {
            $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
        }
        $instance->setGenerateUrlType(0);

        return $instance;
    }

    /*
     * Gets the public 'fos_http_cache.http.symfony_response_tagger' shared service.
     *
     * @return \FOS\HttpCacheBundle\Http\SymfonyResponseTagger
     */
    protected function getFosHttpCache_Http_SymfonyResponseTaggerService()
    {
        return $this->services['fos_http_cache.http.symfony_response_tagger'] = new \FOS\HttpCacheBundle\Http\SymfonyResponseTagger(['header_formatter' => new \FOS\HttpCache\TagHeaderFormatter\MaxHeaderValueLengthFormatter(new \FOS\HttpCache\TagHeaderFormatter\CommaSeparatedTagHeaderFormatter('X-Cache-Tags', ','), 4096), 'strict' => false]);
    }

    /*
     * Gets the public 'fos_http_cache.proxy_client.symfony' shared service.
     *
     * @return \FOS\HttpCache\ProxyClient\Symfony
     */
    protected function getFosHttpCache_ProxyClient_SymfonyService()
    {
        return $this->services['fos_http_cache.proxy_client.symfony'] = new \FOS\HttpCache\ProxyClient\Symfony(new \FOS\HttpCache\SymfonyCache\KernelDispatcher(($this->services['kernel'] ?? $this->get('kernel', 1))), $this->parameters['fos_http_cache.proxy_client.symfony.options']);
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Contao\CoreBundle\HttpKernel\ControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), ($this->privates['contao.fragment.registry'] ?? ($this->privates['contao.fragment.registry'] = new \Contao\CoreBundle\Fragment\FragmentRegistry()))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['contao.model_argument_resolver'] ?? $this->load('getContao_ModelArgumentResolverService.php'));
            yield 1 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 2 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 3 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 4 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 5 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 6 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 7 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 8)));
    }

    /*
     * Gets the public 'lexik_maintenance.driver.factory' shared service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory
     */
    protected function getLexikMaintenance_Driver_FactoryService()
    {
        return $this->services['lexik_maintenance.driver.factory'] = new \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory(new \Lexik\Bundle\MaintenanceBundle\Drivers\DatabaseDriver(($this->services['doctrine'] ?? $this->getDoctrineService())), ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()), $this->getParameter('lexik_maintenance.driver'));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter
     */
    protected function getRouterService()
    {
        $a = ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());

        $this->services['router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter($a);

        $b = ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService());
        $c = new \Symfony\Bridge\Monolog\Logger('router');
        $c->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
        $c->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        $c->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));

        $d = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ]))->withContext('router.default', $this), 'contao_manager.routing_loader:loadFromPlugins', ['cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainerUrlMatcher', 'strict_requirements' => false, 'resource_type' => 'service'], $b, new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), $c, 'en');
        $d->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $e = ($this->privates['contao.routing.legacy_route_provider'] ?? $this->getContao_Routing_LegacyRouteProviderService());

        $f = new \Symfony\Cmf\Component\Routing\DynamicRouter($b, ($this->services['contao.routing.nested_matcher'] ?? $this->getContao_Routing_NestedMatcherService()), new \Symfony\Cmf\Component\Routing\ProviderBasedGenerator($e, $a), '', ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $e);
        $f->addRouteEnhancer(new \Contao\CoreBundle\Routing\Enhancer\InputEnhancer(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), false));

        $instance->setContext($b);
        $instance->add($d, '100');
        $instance->add($f, 20);

        return $instance;
    }

    /*
     * Gets the public 'security.authentication.trust_resolver' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Scheb\TwoFactorBundle\Security\Authentication\AuthenticationTrustResolver(new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL));
    }

    /*
     * Gets the public 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.contao_backend' => ['privates', 'security.firewall.map.context.contao_backend', 'getSecurity_Firewall_Map_Context_ContaoBackendService.php', true],
            'security.firewall.map.context.contao_frontend' => ['privates', 'security.firewall.map.context.contao_frontend', 'getSecurity_Firewall_Map_Context_ContaoFrontendService.php', true],
            'security.firewall.map.context.contao_install' => ['privates', 'security.firewall.map.context.contao_install', 'getSecurity_Firewall_Map_Context_ContaoInstallService.php', true],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.CzDeZkV'] ?? ($this->privates['.security.request_matcher.CzDeZkV'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt|error)|css|images|js)/')));
            yield 'security.firewall.map.context.contao_install' => ($this->privates['.security.request_matcher.2lQKaAK'] ?? ($this->privates['.security.request_matcher.2lQKaAK'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/contao/install$')));
            yield 'security.firewall.map.context.contao_backend' => ($this->privates['contao.routing.backend_matcher'] ?? $this->getContao_Routing_BackendMatcherService());
            yield 'security.firewall.map.context.contao_frontend' => ($this->privates['contao.routing.frontend_matcher'] ?? $this->getContao_Routing_FrontendMatcherService());
        }, 4));
    }

    /*
     * Gets the public 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

        $instance->registerListener('contao_backend', 'contao_backend_logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('contao_frontend', 'contao_frontend_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0)), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());

        $a = new \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag('_contao_be_attributes');
        $a->setName('contao_backend');
        $b = new \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag('_contao_fe_attributes');
        $b->setName('contao_frontend');

        $instance->registerBag($a);
        $instance->registerBag($b);

        return $instance;
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Contao\CoreBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Contao\CoreBundle\Translation\Translator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
    }

    /*
     * Gets the private 'contao.listener.backend_locale' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\BackendLocaleListener
     */
    protected function getContao_Listener_BackendLocaleService()
    {
        return $this->privates['contao.listener.backend_locale'] = new \Contao\CoreBundle\EventListener\BackendLocaleListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'contao.listener.bypass_maintenance' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\BypassMaintenanceListener
     */
    protected function getContao_Listener_BypassMaintenanceService()
    {
        return $this->privates['contao.listener.bypass_maintenance'] = new \Contao\CoreBundle\EventListener\BypassMaintenanceListener(($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService()));
    }

    /*
     * Gets the private 'contao.listener.csrf_token_cookie' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\CsrfTokenCookieListener
     */
    protected function getContao_Listener_CsrfTokenCookieService()
    {
        return $this->privates['contao.listener.csrf_token_cookie'] = new \Contao\CoreBundle\EventListener\CsrfTokenCookieListener(($this->privates['contao.csrf.token_storage'] ?? ($this->privates['contao.csrf.token_storage'] = new \Contao\CoreBundle\Csrf\MemoryTokenStorage())));
    }

    /*
     * Gets the private 'contao.listener.locale' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\LocaleListener
     */
    protected function getContao_Listener_LocaleService()
    {
        return $this->privates['contao.listener.locale'] = new \Contao\CoreBundle\EventListener\LocaleListener(($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), $this->parameters['contao.locales']);
    }

    /*
     * Gets the private 'contao.listener.merge_http_headers' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\MergeHttpHeadersListener
     */
    protected function getContao_Listener_MergeHttpHeadersService()
    {
        return $this->privates['contao.listener.merge_http_headers'] = new \Contao\CoreBundle\EventListener\MergeHttpHeadersListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
    }

    /*
     * Gets the private 'contao.listener.referer_id' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\RefererIdListener
     */
    protected function getContao_Listener_RefererIdService()
    {
        return $this->privates['contao.listener.referer_id'] = new \Contao\CoreBundle\EventListener\RefererIdListener(new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Contao\CoreBundle\Referer\TokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.listener.request_token' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\RequestTokenListener
     */
    protected function getContao_Listener_RequestTokenService()
    {
        return $this->privates['contao.listener.request_token'] = new \Contao\CoreBundle\EventListener\RequestTokenListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['contao.csrf.token_manager'] ?? $this->getContao_Csrf_TokenManagerService()), 'contao_csrf_token');
    }

    /*
     * Gets the private 'contao.listener.store_referer' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\StoreRefererListener
     */
    protected function getContao_Listener_StoreRefererService()
    {
        return $this->privates['contao.listener.store_referer'] = new \Contao\CoreBundle\EventListener\StoreRefererListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authentication.trust_resolver'] ?? $this->getSecurity_Authentication_TrustResolverService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.listener.toggle_view' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\ToggleViewListener
     */
    protected function getContao_Listener_ToggleViewService()
    {
        return $this->privates['contao.listener.toggle_view'] = new \Contao\CoreBundle\EventListener\ToggleViewListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.listener.user_session' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\UserSessionListener
     */
    protected function getContao_Listener_UserSessionService()
    {
        return $this->privates['contao.listener.user_session'] = new \Contao\CoreBundle\EventListener\UserSessionListener(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authentication.trust_resolver'] ?? $this->getSecurity_Authentication_TrustResolverService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'contao.monolog.handler' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\ContaoTableHandler
     */
    protected function getContao_Monolog_HandlerService()
    {
        $this->privates['contao.monolog.handler'] = $instance = new \Contao\CoreBundle\Monolog\ContaoTableHandler('debug', false);

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the private 'contao.monolog.processor' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\ContaoTableProcessor
     */
    protected function getContao_Monolog_ProcessorService()
    {
        return $this->privates['contao.monolog.processor'] = new \Contao\CoreBundle\Monolog\ContaoTableProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.routing.backend_matcher' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getContao_Routing_BackendMatcherService()
    {
        $this->privates['contao.routing.backend_matcher'] = $instance = new \Symfony\Component\HttpFoundation\RequestMatcher();

        $instance->matchAttribute('_scope', 'backend');

        return $instance;
    }

    /*
     * Gets the private 'contao.routing.frontend_matcher' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getContao_Routing_FrontendMatcherService()
    {
        $this->privates['contao.routing.frontend_matcher'] = $instance = new \Symfony\Component\HttpFoundation\RequestMatcher();

        $instance->matchAttribute('_scope', 'frontend');

        return $instance;
    }

    /*
     * Gets the private 'contao.routing.legacy_route_provider' shared service.
     *
     * @return \Contao\CoreBundle\Routing\LegacyRouteProvider
     */
    protected function getContao_Routing_LegacyRouteProviderService()
    {
        return $this->privates['contao.routing.legacy_route_provider'] = new \Contao\CoreBundle\Routing\LegacyRouteProvider(($this->privates['contao.routing.frontend_loader'] ?? ($this->privates['contao.routing.frontend_loader'] = new \Contao\CoreBundle\Routing\FrontendLoader(false, '.html'))), new \Contao\CoreBundle\Routing\RouteProvider(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), '.html', false));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'esi_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener
     */
    protected function getEsiListenerService()
    {
        return $this->privates['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener(($this->privates['esi'] ?? ($this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())));
    }

    /*
     * Gets the private 'fos_http_cache.event_listener.tag' shared service.
     *
     * @return \FOS\HttpCacheBundle\EventListener\TagListener
     */
    protected function getFosHttpCache_EventListener_TagService()
    {
        return $this->privates['fos_http_cache.event_listener.tag'] = new \FOS\HttpCacheBundle\EventListener\TagListener(($this->services['fos_http_cache.cache_manager'] ?? $this->getFosHttpCache_CacheManagerService()), ($this->services['fos_http_cache.http.symfony_response_tagger'] ?? $this->getFosHttpCache_Http_SymfonyResponseTaggerService()), new \FOS\HttpCacheBundle\Http\RuleMatcher(new \FOS\HttpCacheBundle\Http\RequestMatcher\CacheableRequestMatcher(), new \FOS\HttpCacheBundle\Http\ResponseMatcher\CacheableResponseMatcher([])), ($this->privates['fos_http_cache.rule_matcher.must_invalidate'] ?? $this->getFosHttpCache_RuleMatcher_MustInvalidateService()), NULL);
    }

    /*
     * Gets the private 'fos_http_cache.rule_matcher.must_invalidate' shared service.
     *
     * @return \FOS\HttpCacheBundle\Http\RuleMatcher
     */
    protected function getFosHttpCache_RuleMatcher_MustInvalidateService()
    {
        return $this->privates['fos_http_cache.rule_matcher.must_invalidate'] = new \FOS\HttpCacheBundle\Http\RuleMatcher(new \FOS\HttpCacheBundle\Http\RequestMatcher\UnsafeRequestMatcher(), new \FOS\HttpCacheBundle\Http\ResponseMatcher\NonErrorResponseMatcher());
    }

    /*
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->privates['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('2c68ae793b72808e441efe92c1bf2d934981357c725c665bd1e94d2501b27a03'))), '/_fragment');
    }

    /*
     * Gets the private 'lexik_maintenance.listener' shared service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener
     */
    protected function getLexikMaintenance_ListenerService()
    {
        return $this->privates['lexik_maintenance.listener'] = new \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener(($this->services['lexik_maintenance.driver.factory'] ?? $this->getLexikMaintenance_Driver_FactoryService()), '^/contao($|/)', NULL, NULL, [], [], NULL, $this->parameters['lexik_maintenance.authorized.attributes'], 503, 'Service Temporarily Unavailable', 'Service Temporarily Unavailable', false);
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->privates['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'\\logs/prod.log'), 10, 200, true, NULL);

        $b = ($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()));

        $a->pushProcessor($b);
        $a->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => ['code' => 400, 'urls' => []], 1 => ['code' => 401, 'urls' => []], 2 => ['code' => 403, 'urls' => []], 3 => ['code' => 404, 'urls' => []]], 400), 0, true, true, NULL);

        $instance->pushProcessor($b);

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        $instance->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        $instance->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));

        return $instance;
    }

    /*
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider([], $this->parameters['nelmio_cors.defaults']), 1 => new \Contao\CoreBundle\Cors\WebsiteRootsConfigProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()))]));
    }

    /*
     * Gets the private 'nelmio_security.clickjacking_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ClickjackingListener
     */
    protected function getNelmioSecurity_ClickjackingListenerService()
    {
        return $this->privates['nelmio_security.clickjacking_listener'] = new \Nelmio\SecurityBundle\EventListener\ClickjackingListener($this->parameters['nelmio_security.clickjacking.paths'], []);
    }

    /*
     * Gets the private 'nelmio_security.csp_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ContentSecurityPolicyListener
     */
    protected function getNelmioSecurity_CspListenerService()
    {
        $a = new \Nelmio\SecurityBundle\ContentSecurityPolicy\PolicyManager();

        return $this->privates['nelmio_security.csp_listener'] = new \Nelmio\SecurityBundle\EventListener\ContentSecurityPolicyListener(\Nelmio\SecurityBundle\ContentSecurityPolicy\DirectiveSet::fromConfig($a, ['enabled' => true, 'hosts' => [], 'content_types' => [], 'report_endpoint' => ['log_channel' => NULL, 'log_formatter' => 'nelmio_security.csp_report.log_formatter', 'log_level' => 'notice', 'filters' => ['domains' => true, 'schemes' => true, 'browser_bugs' => true, 'injected_scripts' => true], 'dismiss' => []], 'compat_headers' => true, 'report_logger_service' => 'logger', 'hash' => ['algorithm' => 'sha256']], 'report'), \Nelmio\SecurityBundle\ContentSecurityPolicy\DirectiveSet::fromConfig($a, ['enabled' => true, 'hosts' => [], 'content_types' => [], 'report_endpoint' => ['log_channel' => NULL, 'log_formatter' => 'nelmio_security.csp_report.log_formatter', 'log_level' => 'notice', 'filters' => ['domains' => true, 'schemes' => true, 'browser_bugs' => true, 'injected_scripts' => true], 'dismiss' => []], 'compat_headers' => true, 'report_logger_service' => 'logger', 'hash' => ['algorithm' => 'sha256']], 'enforce'), new \Nelmio\SecurityBundle\ContentSecurityPolicy\NonceGenerator(16), ($this->privates['nelmio_security.sha_computer'] ?? ($this->privates['nelmio_security.sha_computer'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer('sha256'))), true, [], []);
    }

    /*
     * Gets the private 'nelmio_security.referrer_policy_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ReferrerPolicyListener
     */
    protected function getNelmioSecurity_ReferrerPolicyListenerService()
    {
        return $this->privates['nelmio_security.referrer_policy_listener'] = new \Nelmio\SecurityBundle\EventListener\ReferrerPolicyListener($this->parameters['nelmio_security.referrer_policy.policies']);
    }

    /*
     * Gets the private 'nelmio_security.xss_protection_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\XssProtectionListener
     */
    protected function getNelmioSecurity_XssProtectionListenerService()
    {
        return $this->privates['nelmio_security.xss_protection_listener'] = \Nelmio\SecurityBundle\EventListener\XssProtectionListener::fromConfig(['enabled' => true, 'mode_block' => true, 'report_uri' => NULL]);
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'scheb_two_factor.trusted_cookie_response_listener' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener
     */
    protected function getSchebTwoFactor_TrustedCookieResponseListenerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['scheb_two_factor.trusted_cookie_response_listener'] = $this->createProxy('TrustedCookieResponseListener_c7f9b85', function () {
                return \TrustedCookieResponseListener_c7f9b85::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSchebTwoFactor_TrustedCookieResponseListenerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener(($this->privates['scheb_two_factor.trusted_token_storage'] ?? $this->getSchebTwoFactor_TrustedTokenStorageService()), 5184000, 'trusted_device', false, 'lax', NULL);
    }

    /*
     * Gets the private 'scheb_two_factor.trusted_token_storage' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage
     */
    protected function getSchebTwoFactor_TrustedTokenStorageService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['scheb_two_factor.trusted_token_storage'] = $this->createProxy('TrustedDeviceTokenStorage_fc7b3c4', function () {
                return \TrustedDeviceTokenStorage_fc7b3c4::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSchebTwoFactor_TrustedTokenStorageService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\JwtTokenEncoder('2c68ae793b72808e441efe92c1bf2d934981357c725c665bd1e94d2501b27a03'), 'trusted_device', 5184000);
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(($this->services['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'session' => ['services', 'session', 'getSessionService', false],
        ]));
    }

    /*
     * Gets the private 'terminal42.header_replay.header_replay_listener' shared service.
     *
     * @return \Terminal42\HeaderReplay\EventListener\HeaderReplayListener
     */
    protected function getTerminal42_HeaderReplay_HeaderReplayListenerService()
    {
        return $this->privates['terminal42.header_replay.header_replay_listener'] = new \Terminal42\HeaderReplay\EventListener\HeaderReplayListener(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false, 'resource_files' => ['ar' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.ar.xliff')], 'az' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.az.xlf')], 'be' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.be.xlf')], 'bg' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.bg.xlf')], 'ca' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.ca.xliff')], 'cs' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.cs.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.cs.yml'), 3 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.cs.xlf')], 'da' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.da.xliff')], 'de' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.de.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.de.yml'), 3 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.de.xlf')], 'el' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.el.xlf')], 'en' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.en.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.en.yml'), 3 => ($this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle/Resources/translations\\maintenance.en.yml'), 4 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.en.xlf')], 'es' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.es.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.es.yml'), 3 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.es.xlf')], 'eu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.eu.xliff')], 'fa' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.fa.xlf')], 'fr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.fr.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.fr.yml'), 3 => ($this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle/Resources/translations\\maintenance.fr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.fr.xlf')], 'gl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.gl.xlf')], 'he' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.he.xlf')], 'hr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.hr.yml')], 'hu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.hu.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.hu.yml')], 'id' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.id.xliff')], 'it' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.it.xliff')], 'ja' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.ja.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.ja.xlf')], 'lb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.lb.xlf')], 'lt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.lt.xliff')], 'lv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.lv.xlf')], 'nb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.nb.xlf')], 'nl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.nl.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.nl.yml'), 3 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.nl.xlf')], 'nn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.no.xlf')], 'pl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.pl.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.pl.yml')], 'pt_BR' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.pt_BR.xliff')], 'pt_PT' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.pt_PT.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.pt_PT.xliff')], 'ro' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.ro.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.ro.yml')], 'ru' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.ru.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.ru.yml'), 3 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.ru.xlf')], 'sk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.sk.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.sk.yml')], 'sl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.sl.xliff')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.sr_Latn.xliff')], 'sv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.sv.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.sv.yml')], 'th' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.th.xlf')], 'tl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.tr.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.tr.xlf')], 'uk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.uk.xliff'), 2 => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle/Resources/translations\\messages.uk.yml')], 'vi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.vi.xliff')], 'zh_CN' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security\\Core/Resources/translations\\security.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.zh_CN.xliff')], 'bs_Latn_BA' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.bs_Latn_BA.xliff')], 'eo' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.eo.xliff')], 'fi' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.fi.xliff')], 'hr_HR' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.hr_HR.xliff')], 'ky' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.ky.xliff')], 'pt' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.pt.xliff')], 'sr_Latin' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.sr_Latin.xliff')], 'zh' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.zh.xliff'), 1 => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src/Resources/translations\\messages.zh.xlf')], 'zh_HK' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.zh_HK.xliff')], 'zh_TW' => [0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle/Resources/translations\\time.zh_TW.xliff')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /*
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'translator.default_path' => false,
        'twig.default_path' => false,
        'lexik_maintenance.driver' => false,
        'contao.web_dir' => false,
        'contao.image.target_dir' => false,
        'contao.resources_paths' => false,
    ];
    private $dynamicParameters = [];

    /*
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\logs'); break;
            case 'kernel.bundles_metadata': $value = [
                'KnpMenuBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'KnpTimeBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-time-bundle\\Knp\\Bundle\\TimeBundle'),
                    'namespace' => 'Knp\\Bundle\\TimeBundle',
                ],
                'SchebTwoFactorBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\scheb\\two-factor-bundle'),
                    'namespace' => 'Scheb\\TwoFactorBundle',
                ],
                'HeaderReplayBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\terminal42\\header-replay-bundle\\src'),
                    'namespace' => 'Terminal42\\HeaderReplay',
                ],
                'CmfRoutingBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony-cmf\\routing-bundle\\src'),
                    'namespace' => 'Symfony\\Cmf\\Bundle\\RoutingBundle',
                ],
                'FrameworkBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'DoctrineBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'LexikMaintenanceBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\lexik\\maintenance-bundle'),
                    'namespace' => 'Lexik\\Bundle\\MaintenanceBundle',
                ],
                'NelmioCorsBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\nelmio\\cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'NelmioSecurityBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\nelmio\\security-bundle'),
                    'namespace' => 'Nelmio\\SecurityBundle',
                ],
                'FOSHttpCacheBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\http-cache-bundle\\src'),
                    'namespace' => 'FOS\\HttpCacheBundle',
                ],
                'ContaoManagerBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\manager-bundle\\src'),
                    'namespace' => 'Contao\\ManagerBundle',
                ],
                'ContaoCoreBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src'),
                    'namespace' => 'Contao\\CoreBundle',
                ],
                'ContaoCalendarBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\calendar-bundle\\src'),
                    'namespace' => 'Contao\\CalendarBundle',
                ],
                'ContaoCommentsBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\comments-bundle\\src'),
                    'namespace' => 'Contao\\CommentsBundle',
                ],
                'ContaoFaqBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\faq-bundle\\src'),
                    'namespace' => 'Contao\\FaqBundle',
                ],
                'ContaoListingBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\listing-bundle\\src'),
                    'namespace' => 'Contao\\ListingBundle',
                ],
                'ContaoInstallationBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src'),
                    'namespace' => 'Contao\\InstallationBundle',
                ],
                'ContaoNewsBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\news-bundle\\src'),
                    'namespace' => 'Contao\\NewsBundle',
                ],
                'ContaoNewsletterBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\contao\\newsletter-bundle\\src'),
                    'namespace' => 'Contao\\NewsletterBundle',
                ],
            ]; break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/app/Resources/views'); break;
            case 'lexik_maintenance.driver': $value = [
                'class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\FileDriver',
                'options' => [
                    'file_path' => ($this->targetDirs[3].'/var/maintenance_lock'),
                ],
                'ttl' => NULL,
            ]; break;
            case 'contao.web_dir': $value = ($this->targetDirs[3].'/web'); break;
            case 'contao.image.target_dir': $value = ($this->targetDirs[3].'/assets/images'); break;
            case 'contao.resources_paths': $value = [
                0 => ($this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src/Resources/contao'),
                1 => ($this->targetDirs[3].'\\vendor\\contao\\calendar-bundle\\src/Resources/contao'),
                2 => ($this->targetDirs[3].'\\vendor\\contao\\comments-bundle\\src/Resources/contao'),
                3 => ($this->targetDirs[3].'\\vendor\\contao\\faq-bundle\\src/Resources/contao'),
                4 => ($this->targetDirs[3].'\\vendor\\contao\\listing-bundle\\src/Resources/contao'),
                5 => ($this->targetDirs[3].'\\vendor\\contao\\news-bundle\\src/Resources/contao'),
                6 => ($this->targetDirs[3].'\\vendor\\contao\\newsletter-bundle\\src/Resources/contao'),
            ]; break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.bundles' => [
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'KnpTimeBundle' => 'Knp\\Bundle\\TimeBundle\\KnpTimeBundle',
                'SchebTwoFactorBundle' => 'Scheb\\TwoFactorBundle\\SchebTwoFactorBundle',
                'HeaderReplayBundle' => 'Terminal42\\HeaderReplay\\HeaderReplayBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'LexikMaintenanceBundle' => 'Lexik\\Bundle\\MaintenanceBundle\\LexikMaintenanceBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'NelmioSecurityBundle' => 'Nelmio\\SecurityBundle\\NelmioSecurityBundle',
                'FOSHttpCacheBundle' => 'FOS\\HttpCacheBundle\\FOSHttpCacheBundle',
                'ContaoManagerBundle' => 'Contao\\ManagerBundle\\ContaoManagerBundle',
                'ContaoCoreBundle' => 'Contao\\CoreBundle\\ContaoCoreBundle',
                'ContaoCalendarBundle' => 'Contao\\CalendarBundle\\ContaoCalendarBundle',
                'ContaoCommentsBundle' => 'Contao\\CommentsBundle\\ContaoCommentsBundle',
                'ContaoFaqBundle' => 'Contao\\FaqBundle\\ContaoFaqBundle',
                'ContaoListingBundle' => 'Contao\\ListingBundle\\ContaoListingBundle',
                'ContaoInstallationBundle' => 'Contao\\InstallationBundle\\ContaoInstallationBundle',
                'ContaoNewsBundle' => 'Contao\\NewsBundle\\ContaoNewsBundle',
                'ContaoNewsletterBundle' => 'Contao\\NewsletterBundle\\ContaoNewsletterBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainer',
            'database_host' => 'localhost',
            'database_port' => 3306,
            'database_user' => 'root',
            'database_password' => '',
            'database_name' => 'uek4_beispiel',
            'secret' => '2c68ae793b72808e441efe92c1bf2d934981357c725c665bd1e94d2501b27a03',
            'mailer_transport' => 'sendmail',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'mailer_port' => 25,
            'mailer_encryption' => NULL,
            'locale' => 'en',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'time.templating.helper.time.class' => 'Knp\\Bundle\\TimeBundle\\Templating\\Helper\\TimeHelper',
            'time.datetime_formatter.class' => 'Knp\\Bundle\\TimeBundle\\DateTimeFormatter',
            'time.twig.extension.time.class' => 'Knp\\Bundle\\TimeBundle\\Twig\\Extension\\TimeExtension',
            'scheb_two_factor.model_manager_name' => NULL,
            'scheb_two_factor.email.sender_email' => 'no-reply@example.com',
            'scheb_two_factor.email.sender_name' => NULL,
            'scheb_two_factor.email.template' => '@SchebTwoFactor/Authentication/form.html.twig',
            'scheb_two_factor.email.digits' => 4,
            'scheb_two_factor.google.server_name' => NULL,
            'scheb_two_factor.google.issuer' => NULL,
            'scheb_two_factor.google.template' => '@SchebTwoFactor/Authentication/form.html.twig',
            'scheb_two_factor.google.digits' => 6,
            'scheb_two_factor.trusted_device.enabled' => false,
            'scheb_two_factor.trusted_device.cookie_name' => 'trusted_device',
            'scheb_two_factor.trusted_device.lifetime' => 5184000,
            'scheb_two_factor.trusted_device.extend_lifetime' => false,
            'scheb_two_factor.trusted_device.cookie_secure' => false,
            'scheb_two_factor.trusted_device.cookie_same_site' => 'lax',
            'scheb_two_factor.trusted_device.cookie_domain' => NULL,
            'scheb_two_factor.security_tokens' => [
                0 => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken',
            ],
            'scheb_two_factor.ip_whitelist' => [

            ],
            'cmf_routing.replace_symfony_router' => true,
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => '2c68ae793b72808e441efe92c1bf2d934981357c725c665bd1e94d2501b27a03',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'translator.logging' => false,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'contao_manager.routing_loader:loadFromPlugins',
            'router.cache_class_prefix' => 'appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
                'monolog.handler.contao' => NULL,
            ],
            'swiftmailer.mailer.default.transport.name' => 'sendmail',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [

            ],
            'doctrine.default_entity_manager' => '',
            'doctrine.dbal.connection_factory.types' => [
                'binary_string' => [
                    'class' => 'Contao\\CoreBundle\\Doctrine\\DBAL\\Types\\BinaryStringType',
                    'commented' => true,
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'lexik_maintenance.listener.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Listener\\MaintenanceListener',
            'lexik_maintenance.driver_factory.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DriverFactory',
            'lexik_maintenance.driver.database.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DatabaseDriver',
            'lexik_maintenance.authorized.path' => '^/contao($|/)',
            'lexik_maintenance.authorized.host' => NULL,
            'lexik_maintenance.authorized.ips' => NULL,
            'lexik_maintenance.authorized.query' => [

            ],
            'lexik_maintenance.authorized.cookie' => [

            ],
            'lexik_maintenance.authorized.route' => NULL,
            'lexik_maintenance.authorized.attributes' => [
                '_bypass_maintenance' => true,
            ],
            'lexik_maintenance.response.http_code' => 503,
            'lexik_maintenance.response.http_status' => 'Service Temporarily Unavailable',
            'lexik_maintenance.response.exception_message' => 'Service Temporarily Unavailable',
            'nelmio_cors.map' => [

            ],
            'nelmio_cors.defaults' => [
                'allow_origin' => [

                ],
                'allow_credentials' => false,
                'allow_headers' => [

                ],
                'expose_headers' => [

                ],
                'allow_methods' => [

                ],
                'max_age' => 0,
                'hosts' => [

                ],
                'origin_regex' => false,
                'forced_allow_origin_value' => NULL,
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'nelmio_security.clickjacking.paths' => [
                '^/.*' => [
                    'header' => 'SAMEORIGIN',
                ],
            ],
            'nelmio_security.clickjacking.content_types' => [

            ],
            'nelmio_security.nonce_generator.number_of_bytes' => 16,
            'nelmio_security.csp.hash_algorithm' => 'sha256',
            'nelmio_security.csp.report_log_level' => 'notice',
            'nelmio_security.content_type.nosniff' => true,
            'nelmio_security.referrer_policy.policies' => [
                0 => 'no-referrer-when-downgrade',
                1 => 'strict-origin-when-cross-origin',
            ],
            'fos_http_cache.cacheable.response.additional_status' => [

            ],
            'fos_http_cache.proxy_client.symfony.options' => [
                'tags_header' => 'X-Cache-Tags',
                'tags_method' => 'PURGETAGS',
                'purge_method' => 'PURGE',
            ],
            'fos_http_cache.cache_manager.generate_url_type' => 0,
            'fos_http_cache.compiler_pass.tag_annotations' => false,
            'fos_http_cache.tag_handler.response_header' => 'X-Cache-Tags',
            'fos_http_cache.tag_handler.separator' => ',',
            'fos_http_cache.tag_handler.strict' => false,
            'contao_manager.manager_path' => 'contao-manager.phar.php',
            'contao.prepend_locale' => false,
            'contao.encryption_key' => '2c68ae793b72808e441efe92c1bf2d934981357c725c665bd1e94d2501b27a03',
            'contao.url_suffix' => '.html',
            'contao.upload_path' => 'files',
            'contao.csrf_token_name' => 'contao_csrf_token',
            'contao.pretty_error_screens' => true,
            'contao.error_level' => 8183,
            'contao.locales' => [
                0 => 'en',
                1 => 'cs',
                2 => 'de',
                3 => 'es',
                4 => 'fa',
                5 => 'fr',
                6 => 'it',
                7 => 'ja',
                8 => 'lv',
                9 => 'nl',
                10 => 'pl',
                11 => 'ru',
                12 => 'sl',
                13 => 'sr',
                14 => 'zh',
            ],
            'contao.image.bypass_cache' => false,
            'contao.image.valid_extensions' => [
                0 => 'jpg',
                1 => 'jpeg',
                2 => 'gif',
                3 => 'png',
                4 => 'tif',
                5 => 'tiff',
                6 => 'bmp',
                7 => 'svg',
                8 => 'svgz',
            ],
            'contao.image.imagine_options' => [
                'jpeg_quality' => 80,
                'interlace' => 'plane',
            ],
            'contao.image.reject_large_uploads' => false,
            'contao.security.two_factor.enforce_backend' => false,
            'kernel.packages' => [
                'ausi/slug-generator' => '1.1.0',
                'bacon/bacon-qr-code' => '2.0.0',
                'beberlei/assert' => '3.2.1',
                'clue/stream-filter' => '1.4.1',
                'composer/ca-bundle' => '1.1.4',
                'contao-components/ace' => '1.4.4',
                'contao-components/chosen' => '1.2.1',
                'contao-components/colorbox' => '1.6.4.1',
                'contao-components/colorpicker' => '1.5.0',
                'contao-components/compass' => '0.12.2.1',
                'contao-components/contao' => '8.0.3',
                'contao-components/datepicker' => '2.3.0',
                'contao-components/dropzone' => '5.5.0',
                'contao-components/highlight' => '9.15.6',
                'contao-components/html5shiv' => '3.7.3',
                'contao-components/installer' => '1.3.1',
                'contao-components/jquery' => '3.4.1',
                'contao-components/jquery-ui' => '1.12.1.1',
                'contao-components/mediabox' => '1.5.4.2',
                'contao-components/mediaelement' => '4.2.10',
                'contao-components/mootools' => '1.6.0.5',
                'contao-components/respimage' => '1.4.2',
                'contao-components/simplemodal' => '2.1.0',
                'contao-components/swipe' => '2.1.2',
                'contao-components/tablesort' => '3.4.11',
                'contao-components/tablesorter' => '2.1.0',
                'contao-components/tinymce4' => '4.9.4',
                'contao/calendar-bundle' => '4.7.6',
                'contao/comments-bundle' => '4.7.6',
                'contao/conflicts' => 'dev-master',
                'contao/core-bundle' => '4.7.6',
                'contao/faq-bundle' => '4.7.6',
                'contao/image' => '0.3.9',
                'contao/imagine-svg' => '0.2.2',
                'contao/installation-bundle' => '4.7.6',
                'contao/listing-bundle' => '4.7.6',
                'contao/manager-bundle' => '4.7.6',
                'contao/manager-plugin' => '2.7.0',
                'contao/news-bundle' => '4.7.6',
                'contao/newsletter-bundle' => '4.7.6',
                'dasprid/enum' => '1.0.0',
                'doctrine/annotations' => '1.6.1',
                'doctrine/cache' => '1.8.0',
                'doctrine/collections' => '1.6.1',
                'doctrine/dbal' => '2.8.1',
                'doctrine/doctrine-bundle' => '1.11.1',
                'doctrine/doctrine-cache-bundle' => '1.3.5',
                'doctrine/event-manager' => '1.0.0',
                'doctrine/inflector' => '1.3.0',
                'doctrine/lexer' => '1.0.1',
                'doctrine/persistence' => '1.1.1',
                'doctrine/reflection' => '1.0.0',
                'egulias/email-validator' => '2.1.8',
                'friendsofsymfony/http-cache' => '2.7.0',
                'friendsofsymfony/http-cache-bundle' => '2.6.1',
                'guzzlehttp/guzzle' => '6.3.3',
                'guzzlehttp/promises' => '1.3.1',
                'guzzlehttp/psr7' => '1.5.2',
                'imagine/imagine' => '1.2.0',
                'jdorn/sql-formatter' => '1.2.17',
                'knplabs/knp-menu' => '2.3.0',
                'knplabs/knp-menu-bundle' => '2.2.1',
                'knplabs/knp-time-bundle' => '1.9.1',
                'lcobucci/jwt' => '3.3.1',
                'leafo/scssphp' => '0.7.8',
                'league/uri' => '5.3.0',
                'league/uri-components' => '1.8.2',
                'league/uri-hostname-parser' => '1.1.1',
                'league/uri-interfaces' => '1.1.1',
                'league/uri-manipulations' => '1.5.0',
                'league/uri-parser' => '1.4.1',
                'league/uri-schemes' => '1.2.1',
                'lexik/maintenance-bundle' => '2.1.5',
                'matthiasmullie/minify' => '1.3.61',
                'matthiasmullie/path-converter' => '1.1.2',
                'michelf/php-markdown' => '1.8.0',
                'monolog/monolog' => '1.24.0',
                'nelmio/cors-bundle' => '1.5.5',
                'nelmio/security-bundle' => '2.7.0',
                'ocramius/package-versions' => '1.4.0',
                'ocramius/proxy-manager' => '2.1.1',
                'oyejorge/less.php' => '1.7.0.14',
                'paragonie/constant_time_encoding' => '2.2.3',
                'paragonie/random_compat' => '9.99.99',
                'patchwork/utf8' => '1.3.1',
                'php-http/client-common' => '1.9.1',
                'php-http/discovery' => '1.6.1',
                'php-http/guzzle6-adapter' => '1.1.1',
                'php-http/httplug' => '1.1.0',
                'php-http/message' => '1.7.2',
                'php-http/message-factory' => '1.0.2',
                'php-http/promise' => '1.0.0',
                'phpspec/php-diff' => '1.1.0',
                'phpunit/php-token-stream' => '3.0.1',
                'psr/cache' => '1.0.1',
                'psr/container' => '1.0.0',
                'psr/http-message' => '1.0.1',
                'psr/log' => '1.1.0',
                'psr/simple-cache' => '1.0.1',
                'ralouphie/getallheaders' => '2.0.5',
                'scheb/two-factor-bundle' => '3.19.0',
                'sensiolabs/ansi-to-html' => '1.1.3',
                'simplepie/simplepie' => '1.5.2',
                'sonata-project/google-authenticator' => '2.2.0',
                'spomky-labs/otphp' => '9.1.4',
                'swiftmailer/swiftmailer' => '6.2.1',
                'symfony-cmf/routing' => '2.1.0',
                'symfony-cmf/routing-bundle' => '2.1.1',
                'symfony/asset' => '4.2.9',
                'symfony/cache' => '4.2.9',
                'symfony/config' => '4.2.9',
                'symfony/console' => '4.2.9',
                'symfony/contracts' => '1.1.1',
                'symfony/debug' => '4.2.9',
                'symfony/debug-bundle' => '4.2.9',
                'symfony/dependency-injection' => '4.2.9',
                'symfony/doctrine-bridge' => '4.2.9',
                'symfony/dotenv' => '4.2.9',
                'symfony/event-dispatcher' => '4.2.9',
                'symfony/expression-language' => '4.2.9',
                'symfony/filesystem' => '4.2.9',
                'symfony/finder' => '4.2.9',
                'symfony/framework-bundle' => '4.2.9',
                'symfony/http-foundation' => '4.2.9',
                'symfony/http-kernel' => '4.2.9',
                'symfony/inflector' => '4.2.9',
                'symfony/lock' => '4.2.9',
                'symfony/monolog-bridge' => '4.2.9',
                'symfony/monolog-bundle' => '3.3.1',
                'symfony/options-resolver' => '4.2.9',
                'symfony/polyfill-ctype' => '1.11.0',
                'symfony/polyfill-iconv' => '1.11.0',
                'symfony/polyfill-intl-idn' => '1.11.0',
                'symfony/polyfill-mbstring' => '1.11.0',
                'symfony/polyfill-php72' => '1.11.0',
                'symfony/process' => '4.2.9',
                'symfony/property-access' => '4.2.9',
                'symfony/proxy-manager-bridge' => '4.2.9',
                'symfony/routing' => '4.2.9',
                'symfony/security' => '4.2.9',
                'symfony/security-bundle' => '4.2.9',
                'symfony/swiftmailer-bundle' => '3.2.7',
                'symfony/templating' => '4.2.9',
                'symfony/translation' => '4.2.9',
                'symfony/twig-bridge' => '4.2.9',
                'symfony/twig-bundle' => '4.2.9',
                'symfony/var-dumper' => '4.2.9',
                'symfony/var-exporter' => '4.2.9',
                'symfony/web-profiler-bundle' => '4.2.9',
                'symfony/yaml' => '4.2.9',
                'terminal42/header-replay-bundle' => '1.5.3',
                'toflar/psr6-symfony-http-cache-store' => '1.1.2',
                'true/punycode' => '2.1.1',
                'twig/twig' => '2.10.0',
                'ua-parser/uap-php' => '3.8.8',
                'webmozart/assert' => '1.4.0',
                'webmozart/path-util' => '2.3.0',
                'zendframework/zend-code' => '3.3.1',
                'zendframework/zend-eventmanager' => '3.2.1',
                '__root__' => 'No version set (parsed as 1.0.0)',
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand',
                5 => 'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand',
                6 => 'console.command.public_alias.contao.command.install-web-dir',
                7 => 'console.command.public_alias.contao.command.automator',
                8 => 'console.command.public_alias.contao.command.filesync',
                9 => 'contao.command.install',
                10 => 'contao.command.symlinks',
                11 => 'console.command.public_alias.contao.command.user_password_command',
                12 => 'console.command.public_alias.contao.command.version',
                13 => 'console.command.public_alias.contao.command.lock',
                14 => 'console.command.public_alias.contao.command.unlock',
            ],
        ];
    }
}
