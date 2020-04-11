<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Warehouse $warehouse
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $warehouse->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Warehouses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="warehouses form content">
            <?= $this->Form->create($warehouse) ?>
            <fieldset>
                <legend><?= __('Edit Warehouse') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('token');
                    echo $this->Form->control('active');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
