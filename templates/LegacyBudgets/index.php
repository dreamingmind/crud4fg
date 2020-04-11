<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyBudget[]|\Cake\Collection\CollectionInterface $legacyBudgets
 */
?>
<div class="legacyBudgets index content">
    <?= $this->Html->link(__('New Legacy Budget'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Budgets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('use_budget') ?></th>
                    <th><?= $this->Paginator->sort('budget') ?></th>
                    <th><?= $this->Paginator->sort('remaining_budget') ?></th>
                    <th><?= $this->Paginator->sort('use_item_budget') ?></th>
                    <th><?= $this->Paginator->sort('item_budget') ?></th>
                    <th><?= $this->Paginator->sort('remaining_item_budget') ?></th>
                    <th><?= $this->Paginator->sort('budget_month') ?></th>
                    <th><?= $this->Paginator->sort('current') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyBudgets as $legacyBudget): ?>
                <tr>
                    <td><?= $this->Number->format($legacyBudget->id) ?></td>
                    <td><?= $legacyBudget->has('user') ? $this->Html->link($legacyBudget->user->id, ['controller' => 'Users', 'action' => 'view', $legacyBudget->user->id]) : '' ?></td>
                    <td><?= h($legacyBudget->use_budget) ?></td>
                    <td><?= $this->Number->format($legacyBudget->budget) ?></td>
                    <td><?= $this->Number->format($legacyBudget->remaining_budget) ?></td>
                    <td><?= h($legacyBudget->use_item_budget) ?></td>
                    <td><?= $this->Number->format($legacyBudget->item_budget) ?></td>
                    <td><?= $this->Number->format($legacyBudget->remaining_item_budget) ?></td>
                    <td><?= h($legacyBudget->budget_month) ?></td>
                    <td><?= h($legacyBudget->current) ?></td>
                    <td><?= h($legacyBudget->created) ?></td>
                    <td><?= h($legacyBudget->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyBudget->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyBudget->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyBudget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyBudget->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
