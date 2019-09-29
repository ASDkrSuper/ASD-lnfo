<?php
/*
* 본 플러그인은 오류가 존재할수 있음을 알려드립니다,
* 플러그인 작동 , 오류 가 있는지 테스트를 하지않음,
* 오류제보는 ASDkr 로 해주시면 감사합니다, -ASD-
*/

namespace ASDinfo;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\item;
use pocketmine\Server;
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
	}
		
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		$command = $command->getName ();
		$player = $sender->getPlayer ();
		$player = $event->getPlayer();
		$name = $sender->getName ();
		$money = EconomyAPI::getInstance()->myMoney ($m);
		$rank = EconomyAPI::getInstance()->getRank($n);
		if ($command == "인포") {
		$player->sendMessage("§6[ §f인포 | info §6]");
		$player->sendMessage("§6내돈 : §f$m원 §6닉네임 : §f$n님");
		$player->sendMessage("§6접속자 : §f" . count(Server::getInstance()->getOnlinePlayers()) . "§f명");
		$player->addTitle("§b●§f서버인포§b●","§f인포를 확인합니다!");
		   return true;
		}
		return true;
	}//author : ASDkr
}