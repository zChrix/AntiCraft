<?php
namespace AntiCraft;
use pocketmine\event\inventory\CraftItemEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;

class AntiCraft extends PluginBase implements Listener
{
    public $config;
    public function onEnable()
    {
        Server::getInstance()->getLogger()->info("PLugin enable by Refaltor");
        Server::getInstance()->getPluginManager()->registerEvents($this, $this);

        //Configuration

        @mkdir($this->getDataFolder());
        if(!file_exists($this->getDataFolder() . "config.yml")) {
        $this->saveResource("config.yml");
        }
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
    }

    public function onDisable()
    {
        Server::getInstance()->getLogger()->info("Plugin disable by Refaltor");
    }

    public function AntiCraft(CraftItemEvent $event)
    {
        $player = $event->getPlayer();
        $config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        foreach ($event->getOutputs() as $item)
        {
            if ($item->getId() === $config->get("1-ID") and $item->getDamage() === $config->get("1-META"))
            {
                $event->setCancelled();
                $player->sendPopup($config->get("1-message"));
            }

            if ($item->getId() === $config->get("2-ID") and $item->getDamage() === $config->get("2-META"))
            {
                $event->setCancelled();
                $player->sendPopup($config->get("2-message"));
            }

            if ($item->getId() === $config->get("3-ID") and $item->getDamage() === $config->get("3-META"))
            {
                $event->setCancelled();
                $player->sendPopup($config->get("3-message"));
            }

            if ($item->getId() === $config->get("4-ID") and $item->getDamage() === $config->get("4-META"))
            {
                $event->setCancelled();
                $player->sendPopup($config->get("4-message"));
            }

            if ($item->getId() === $config->get("5-ID") and $item->getDamage() === $config->get("5-META"))
            {
                $event->setCancelled();
                $player->sendPopup($config->get("5-message"));
            }

            if ($item->getId() === $config->get("6-ID") and $item->getDamage() === $config->get("6-META"))
            {
                $event->setCancelled();
                $player->sendPopup($config->get("6-message"));
            }
        }
    }
}