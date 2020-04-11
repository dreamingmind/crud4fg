<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyItem $legacyItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $legacyItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $legacyItem->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Legacy Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyItems form content">
            <?= $this->Form->create($legacyItem) ?>
            <fieldset>
                <legend><?= __('Edit Legacy Item') ?></legend>
                <?php
                    echo $this->Form->control('item_code');
                    echo $this->Form->control('customer_item_code');
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('description_2');
                    echo $this->Form->control('color');
                    echo $this->Form->control('price');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('reorder_qty');
                    echo $this->Form->control('available_qty');
                    echo $this->Form->control('pending_qty');
                    echo $this->Form->control('reorder_level');
                    echo $this->Form->control('minimum');
                    echo $this->Form->control('non_stock');
                    echo $this->Form->control('customer_owned');
                    echo $this->Form->control('catalog_count');
                    echo $this->Form->control('active');
                    echo $this->Form->control('vendor_id');
                    echo $this->Form->control('cost');
                    echo $this->Form->control('po_item_code');
                    echo $this->Form->control('po_description');
                    echo $this->Form->control('po_unit');
                    echo $this->Form->control('po_quantity');
                    echo $this->Form->control('location_id');
                    echo $this->Form->control('max_quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
