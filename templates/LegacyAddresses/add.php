<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyAddress $legacyAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Legacy Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyAddresses form content">
            <?= $this->Form->create($legacyAddress) ?>
            <fieldset>
                <legend><?= __('Add Legacy Address') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('company');
                    echo $this->Form->control('address');
                    echo $this->Form->control('address2');
                    echo $this->Form->control('address3');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('zip');
                    echo $this->Form->control('country');
                    echo $this->Form->control('sequence');
                    echo $this->Form->control('active');
                    echo $this->Form->control('type');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('epms_vendor_id');
                    echo $this->Form->control('tax_rate_id');
                    echo $this->Form->control('fedex_acct');
                    echo $this->Form->control('ups_acct');
                    echo $this->Form->control('residence');
                    echo $this->Form->control('customer_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
