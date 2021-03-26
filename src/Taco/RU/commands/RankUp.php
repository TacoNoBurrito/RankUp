<?php namespace Taco\RU\commands;

use Taco\RU\Main;
use pocketmine\{command\PluginCommand, command\CommandSender, plugin\Plugin};

class RankUp extends PluginCommand {

	/**
	 * RankUp constructor.
	 * @param Main $plugin
	 */
	public function __construct(Main $plugin) {
		parent::__construct("rankup", $plugin);
		$this->setDescription("Ascend through the ranks!");
		$this->setAliases(["ru"]);
	}

	/**
	 * @param CommandSender $sender
	 * @param string $commandLabel
	 * @param array $args
	 * @return bool
	 */
	public function execute(CommandSender $sender, string $commandLabel, array $args) : bool {
		Main::getInstance()->getAPI()->rankUp($sender);
		return true;
	}
}