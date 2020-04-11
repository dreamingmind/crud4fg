<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCustomer $legacyCustomer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Legacy Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyCustomers form content">
            <?= $this->Form->create($legacyCustomer) ?>
            <fieldset>
                <legend><?= __('Add Legacy Customer') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('customer_code');
                    echo $this->Form->control('order_contact');
                    echo $this->Form->control('billing_contact');
                    echo $this->Form->control('allow_backorder');
                    echo $this->Form->control('allow_direct_pay');
                    echo $this->Form->control('address_id', ['options' => $addresses, 'empty' => true]);
                    echo $this->Form->control('release_hold');
                    echo $this->Form->control('taxable');
                    echo $this->Form->control('rent_qty');
                    echo $this->Form->control('rent_unit');
                    echo $this->Form->control('rent_price');
                    echo $this->Form->control('item_pull_charge');
                    echo $this->Form->control('order_pull_charge');
                    echo $this->Form->control('token');
                    echo $this->Form->control('customer_type');
                    echo $this->Form->control('image_id', ['options' => $images, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
