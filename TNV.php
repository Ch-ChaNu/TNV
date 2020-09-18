<?php

/**
 * @name TNV
 * @version α1
 * @main TNV\TNV
 * @api 3.0.0
 * @author ChaNu
 */

namespace TNV;


use pocketmine\form\FormValidationException;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\form\Form;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class TNV extends PluginBase implements Listener{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

public function hand(PlayerItemHeldEvent $event){
        $p = $event->getPlayer();
        $i = $event->getItem()->getId();
        $d = $event->getItem()->getDamage();

        if ($i == 50 and $d == 2){
            $p->sendTip("§l[NV] Get NightVision Effect");
            $p->addEffect(new EffectInstance(Effect::getEffect(16),999999,1,false));
        }
}

}

