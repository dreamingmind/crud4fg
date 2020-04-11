<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Address $address
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="addresses form content">
            <?= $this->Form->create($address) ?>
            <fieldset>
                <legend><?= __('Add Address') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('company');
                    echo $this->Form->control('address');
                    echo $this->Form->control('address2');
                    echo $this->Form->control('address3');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('zip');
                    echo $this->Form->control('country');
                    echo $this->Form->control('residence');
                    echo $this->Form->control('shipping_account_id', ['options' => $shippingAccounts, 'empty' => true]);
                    echo $this->Form->control('warehouse_office_id');
                    echo $this->Form->control('warehouse_facility_id', ['options' => $warehouses, 'empty' => true]);
                    echo $this->Form->control('tenant_office_id');
                    echo $this->Form->control('tenant_id', ['options' => $tenants, 'empty' => true]);
                    echo $this->Form->control('person_id', ['options' => $people, 'empty' => true]);
                    echo $this->Form->control('old_address_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
