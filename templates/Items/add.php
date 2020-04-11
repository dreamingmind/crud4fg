<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items form content">
            <?= $this->Form->create($item) ?>
            <fieldset>
                <legend><?= __('Add Item') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('item_code');
                    echo $this->Form->control('alternate_item_code');
                    echo $this->Form->control('description');
                    echo $this->Form->control('active');
                    echo $this->Form->control('item_unit');
                    echo $this->Form->control('non_stock');
                    echo $this->Form->control('reorder_quantity');
                    echo $this->Form->control('reorder_trigger_level');
                    echo $this->Form->control('tenant_id', ['options' => $tenants]);
                    echo $this->Form->control('old_item_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
