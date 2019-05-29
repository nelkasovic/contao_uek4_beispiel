<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ManagerPlugin;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Contao\ManagerPlugin\Config\ExtensionPluginInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;

/**
 * This class has been auto-generated. It will be overwritten at every run of
 * "composer install" or "composer update".
 *
 * @see \Contao\ManagerPlugin\Composer\Installer
 */
class PluginLoader
{
    public const BUNDLE_PLUGINS = BundlePluginInterface::class;
    public const CONFIG_PLUGINS = ConfigPluginInterface::class;
    public const EXTENSION_PLUGINS = ExtensionPluginInterface::class;
    public const ROUTING_PLUGINS = RoutingPluginInterface::class;

    /**
     * @var array
     */
    private $plugins;

    /**
     * @var array
     */
    private $disabled = [];

    public function __construct(string $installedJson = null, array $plugins = null)
    {
        if (null !== $installedJson) {
            @trigger_error('Passing the path to the Composer installed.json as first argument is no longer supported in version 2.3.', E_USER_DEPRECATED);
        }

        $this->plugins = $plugins ?: [
            'contao/core-bundle' => new \Contao\CoreBundle\ContaoManager\Plugin(),
            'contao/calendar-bundle' => new \Contao\CalendarBundle\ContaoManager\Plugin(),
            'contao/comments-bundle' => new \Contao\CommentsBundle\ContaoManager\Plugin(),
            'contao/faq-bundle' => new \Contao\FaqBundle\ContaoManager\Plugin(),
            'contao/listing-bundle' => new \Contao\ListingBundle\ContaoManager\Plugin(),
            'contao/installation-bundle' => new \Contao\InstallationBundle\ContaoManager\Plugin(),
            'contao/news-bundle' => new \Contao\NewsBundle\ContaoManager\Plugin(),
            'contao/newsletter-bundle' => new \Contao\NewsletterBundle\ContaoManager\Plugin(),
            'contao/manager-bundle' => new \Contao\ManagerBundle\ContaoManager\Plugin(),
        ];
    }

    /**
     * Returns all active plugin instances.
     *
     * @return array<string,BundlePluginInterface>
     */
    public function getInstances(): array
    {
        return array_diff_key($this->plugins, array_flip($this->disabled));
    }

    /**
     * Returns the active plugin instances of a given type (see class constants).
     *
     * @return array<string,BundlePluginInterface>
     */
    public function getInstancesOf(string $type, bool $reverseOrder = false): array
    {
        $plugins = array_filter(
            $this->getInstances(),
            function ($plugin) use ($type) {
                return is_a($plugin, $type);
            }
        );

        if ($reverseOrder) {
            $plugins = array_reverse($plugins, true);
        }

        return array_diff_key($plugins, array_flip($this->disabled));
    }

    /**
     * @return string[]
     */
    public function getDisabledPackages(): array
    {
        return $this->disabled;
    }

    public function setDisabledPackages(array $packages): void
    {
        $this->disabled = $packages;
    }
}
