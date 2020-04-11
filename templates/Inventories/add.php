<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Inventories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventories form content">
            <?= $this->Form->create($inventory) ?>
            <fieldset>
                <legend><?= __('Add Inventory') ?></legend>
                <?php
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('on_order_quantity');
                    echo $this->Form->control('on_replenishment_quantity');
                    echo $this->Form->control('available_quantity');
                    echo $this->Form->control('pending_quantity');
                    echo $this->Form->control('item_id', ['options' => $items]);
                    echo $this->Form->control('old_item_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
