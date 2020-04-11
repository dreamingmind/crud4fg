<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShippingAccount $shippingAccount
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Shipping Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shippingAccounts form content">
            <?= $this->Form->create($shippingAccount) ?>
            <fieldset>
                <legend><?= __('Add Shipping Account') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('shipper');
                    echo $this->Form->control('account_number');
                    echo $this->Form->control('tenant_id', ['options' => $tenants, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
