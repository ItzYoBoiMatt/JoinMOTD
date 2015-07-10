<?php

namespace xhfx/join;

use pocketmine\plugin\PluginBase;  
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent; // Why you need this on JoinMOTD?
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\player\Player;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{ //Class name needs to be same as the file name.

        public function onLoad(){
                $this->getLogger()->info(TextFormat::DARKRED . "Join MOTD has Been Loaded!!!");
        }
        public function onEnable(){
                $this->getServer()->getPluginManager()->registerEvents($this, $this);
                $this->getLogger()->info(TextFormat::DARKRED . "Join MOTD has been Enabled!");
                $this->saveDefaultConfig(); //Saves the config if you need one.
        }
        public function onDisable(){
                $this->getLogger()->info(TextFormat::DARKRED . "Join MOTD has been disabled.");
        }
        public function onJoin(PlayerJoinEvent $event){
          foreach ($config["messages"] as $message){
                  $event->getPlayer()->sendMessage($message);
          }
      }
  }
