<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUser $legacyUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Legacy Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyUsers form content">
            <?= $this->Form->create($legacyUser) ?>
            <fieldset>
                <legend><?= __('Add Legacy User') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('active');
                    echo $this->Form->control('username');
                    echo $this->Form->control('role');
                    echo $this->Form->control('parent_id', ['options' => $parentLegacyUsers, 'empty' => true]);
                    echo $this->Form->control('ancestor_list');
                    echo $this->Form->control('lock');
                    echo $this->Form->control('sequence');
                    echo $this->Form->control('folder');
                    echo $this->Form->control('session_change');
                    echo $this->Form->control('verified');
                    echo $this->Form->control('logged_in');
                    echo $this->Form->control('cart_session');
                    echo $this->Form->control('use_budget');
                    echo $this->Form->control('budget');
                    echo $this->Form->control('use_item_budget');
                    echo $this->Form->control('item_budget');
                    echo $this->Form->control('rollover_item_budget');
                    echo $this->Form->control('rollover_budget');
                    echo $this->Form->control('use_item_limit_budget');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
