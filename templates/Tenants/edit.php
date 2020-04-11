<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tenant $tenant
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tenant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tenants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tenants form content">
            <?= $this->Form->create($tenant) ?>
            <fieldset>
                <legend><?= __('Edit Tenant') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('warehouse_id', ['options' => $warehouses]);
                    echo $this->Form->control('customer_code');
                    echo $this->Form->control('token');
                    echo $this->Form->control('active');
                    echo $this->Form->control('old_user_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
