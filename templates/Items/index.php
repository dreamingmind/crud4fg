<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="items index content">
    <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('item_code') ?></th>
                    <th><?= $this->Paginator->sort('alternate_item_code') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('item_unit') ?></th>
                    <th><?= $this->Paginator->sort('non_stock') ?></th>
                    <th><?= $this->Paginator->sort('reorder_quantity') ?></th>
                    <th><?= $this->Paginator->sort('reorder_trigger_level') ?></th>
                    <th><?= $this->Paginator->sort('tenant_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('old_item_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $this->Number->format($item->id) ?></td>
                    <td><?= h($item->name) ?></td>
                    <td><?= h($item->item_code) ?></td>
                    <td><?= h($item->alternate_item_code) ?></td>
                    <td><?= h($item->description) ?></td>
                    <td><?= $this->Number->format($item->active) ?></td>
                    <td><?= h($item->item_unit) ?></td>
                    <td><?= $this->Number->format($item->non_stock) ?></td>
                    <td><?= $this->Number->format($item->reorder_quantity) ?></td>
                    <td><?= $this->Number->format($item->reorder_trigger_level) ?></td>
                    <td><?= $item->has('tenant') ? $this->Html->link($item->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $item->tenant->id]) : '' ?></td>
                    <td><?= h($item->created) ?></td>
                    <td><?= h($item->modified) ?></td>
                    <td><?= $this->Number->format($item->old_item_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
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
