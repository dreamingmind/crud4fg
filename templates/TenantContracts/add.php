<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TenantContract $tenantContract
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tenant Contracts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tenantContracts form content">
            <?= $this->Form->create($tenantContract) ?>
            <fieldset>
                <legend><?= __('Add Tenant Contract') ?></legend>
                <?php
                    echo $this->Form->control('tenant_id', ['options' => $tenants]);
                    echo $this->Form->control('monthly_service_fee');
                    echo $this->Form->control('rental_qty');
                    echo $this->Form->control('rental_unit');
                    echo $this->Form->control('rental_price');
                    echo $this->Form->control('order_pull_charge');
                    echo $this->Form->control('order_additional_item_charge');
                    echo $this->Form->control('replen_charge');
                    echo $this->Form->control('replen_additional_item_charge');
                    echo $this->Form->control('unload_hourly');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
