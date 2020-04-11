<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyBudget $legacyBudget
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Legacy Budgets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyBudgets form content">
            <?= $this->Form->create($legacyBudget) ?>
            <fieldset>
                <legend><?= __('Add Legacy Budget') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('use_budget');
                    echo $this->Form->control('budget');
                    echo $this->Form->control('remaining_budget');
                    echo $this->Form->control('use_item_budget');
                    echo $this->Form->control('item_budget');
                    echo $this->Form->control('remaining_item_budget');
                    echo $this->Form->control('budget_month');
                    echo $this->Form->control('current');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
