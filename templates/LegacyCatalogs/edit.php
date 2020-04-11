<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCatalog $legacyCatalog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $legacyCatalog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCatalog->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Legacy Catalogs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyCatalogs form content">
            <?= $this->Form->create($legacyCatalog) ?>
            <fieldset>
                <legend><?= __('Edit Legacy Catalog') ?></legend>
                <?php
                    echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('parent_id', ['options' => $parentLegacyCatalogs, 'empty' => true]);
                    echo $this->Form->control('ancestor_list');
                    echo $this->Form->control('item_count');
                    echo $this->Form->control('lock');
                    echo $this->Form->control('sequence');
                    echo $this->Form->control('active');
                    echo $this->Form->control('customer_id');
                    echo $this->Form->control('customer_user_id');
                    echo $this->Form->control('sell_quantity');
                    echo $this->Form->control('sell_unit');
                    echo $this->Form->control('max_quantity');
                    echo $this->Form->control('price');
                    echo $this->Form->control('description');
                    echo $this->Form->control('type');
                    echo $this->Form->control('item_code');
                    echo $this->Form->control('customer_item_code');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
