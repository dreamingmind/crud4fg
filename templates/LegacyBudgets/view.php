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
            <?= $this->Html->link(__('Edit Legacy Budget'), ['action' => 'edit', $legacyBudget->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Budget'), ['action' => 'delete', $legacyBudget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyBudget->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Budgets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Budget'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyBudgets view content">
            <h3><?= h($legacyBudget->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $legacyBudget->has('user') ? $this->Html->link($legacyBudget->user->id, ['controller' => 'Users', 'action' => 'view', $legacyBudget->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Budget Month') ?></th>
                    <td><?= h($legacyBudget->budget_month) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyBudget->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Budget') ?></th>
                    <td><?= $this->Number->format($legacyBudget->budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remaining Budget') ?></th>
                    <td><?= $this->Number->format($legacyBudget->remaining_budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Budget') ?></th>
                    <td><?= $this->Number->format($legacyBudget->item_budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remaining Item Budget') ?></th>
                    <td><?= $this->Number->format($legacyBudget->remaining_item_budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyBudget->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyBudget->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Use Budget') ?></th>
                    <td><?= $legacyBudget->use_budget ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Use Item Budget') ?></th>
                    <td><?= $legacyBudget->use_item_budget ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Current') ?></th>
                    <td><?= $legacyBudget->current ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
