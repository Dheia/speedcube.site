<?php

namespace Speedcube\Speedcube;

use Backend;
use System\Classes\PluginBase;

/**
 * Speedcube Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = [
        'GivingTeam.Auth',
        'RainLab.User',
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Speedcube',
            'description' => 'A place for speed cubing',
            'author'      => 'Speedcube',
            'icon'        => 'icon-cube'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'speedcube.speedcube.access_solves' => [
                'tab' => 'Speedcube',
                'label' => 'Manage solves'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'speedcube' => [
                'icon' => 'icon-cube',
                'label' => 'Speedcube',
                'order' => 500,
                'permissions' => ['speedcube.speedcube.*'],
                'sideMenu' => [
                    'solves' => [
                        'icon' => 'icon-clock-o',
                        'label' => 'Solves',
                        'permissions' => ['speedcube.speedcube.access_solves'],
                        'url' => Backend::url('speedcube/speedcube/solves'),
                    ],
                ],
                'url' => Backend::url('speedcube/speedcube/solves'),
            ],
        ];
    }
}