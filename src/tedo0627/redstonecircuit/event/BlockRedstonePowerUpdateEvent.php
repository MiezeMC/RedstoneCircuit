<?php

namespace tedo0627\redstonecircuit\event;

use pocketmine\block\Block;
use pocketmine\event\block\BlockEvent;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;

class BlockRedstonePowerUpdateEvent extends BlockEvent implements Cancellable {
    use CancellableTrait;

    private bool $newPowered;
    private bool $powered;

    public function __construct(Block $block, bool $newPower, bool $powered) {
        parent::__construct($block);

        $this->newPowered = $newPower;
        $this->powered = $powered;
    }

    public function getNewPowered(): bool {
        return $this->newPowered;
    }

    public function setNewPowered(bool $powered): void {
        $this->newPowered = $powered;
    }

    public function getPowered(): bool {
        return $this->powered;
    }
}