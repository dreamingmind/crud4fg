<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skus $skus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Skus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skus form content">
            <?= $this->Form->create($skus) ?>
            <fieldset>
                <legend><?= __('Add Skus') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('sku_code');
                    echo $this->Form->control('alternate_sku_code');
                    echo $this->Form->control('description');
                    echo $this->Form->control('items_per_sku_unit');
                    echo $this->Form->control('sku_unit');
                    echo $this->Form->control('price');
                    echo $this->Form->control('sku_type');
                    echo $this->Form->control('active');
                    echo $this->Form->control('store_id', ['options' => $stores]);
                    echo $this->Form->control('item_id', ['options' => $items]);
                    echo $this->Form->control('old_catalog_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
