<?php

namespace ErosionYT\Barebones;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    protected function onEnable(): void
    {
        $this->getLogger()->alert("Plugin has loaded");
    }

    protected function onDisable(): void
    {
        $this->getLogger()->alert("Plugin has unloaded");
    }
}