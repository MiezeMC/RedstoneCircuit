<?php

namespace tedo0627\redstonecircuit\event;

use pocketmine\block\RedstoneRepeater;
use pocketmine\event\block\BlockEvent;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;

class BlockRedstoneRepeaterUpdatePowerEvent extends BlockEvent implements Cancellable
{
    use CancellableTrait;

    /**
     * @param RedstoneRepeater $block
     * @param bool $oldPower
     * @param bool $newPower
     */
    public function __construct(RedstoneRepeater $block, private bool $oldPower, private bool $newPower)
    {
        parent::__construct($block);
    }

    /**
     * @return bool
     */
    public function getOldPower(): bool
    {
        return $this->oldPower;
    }

    /**
     * @param bool $oldPower
     */
    public function setOldPower(bool $oldPower): void
    {
        $this->oldPower = $oldPower;
    }

    /**
     * @return bool
     */
    public function getNewPower(): bool
    {
        return $this->newPower;
    }

    /**
     * @param bool $newPower
     */
    public function setNewPower(bool $newPower): void
    {
        $this->newPower = $newPower;
    }
}