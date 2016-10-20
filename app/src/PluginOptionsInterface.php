<?php
namespace Anchorcms;

/**
 * Interface PluginOptionsInterface
 *
 * @package Anchorcms
 */
interface PluginOptionsInterface
{
    public function init();

    public function populate();
}
