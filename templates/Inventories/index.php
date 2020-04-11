<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory[]|\Cake\Collection\CollectionInterface $inventories
 */
?>
<div class="inventories index content">
    <?= $this->Html->link(__('New Inventory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inventories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('on_order_quantity') ?></th>
                    <th><?= $this->Paginator->sort('on_replenishment_quantity') ?></th>
                    <th><?= $this->Paginator->sort('available_quantity') ?></th>
                    <th><?= $this->Paginator->sort('pending_quantity') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('old_item_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventories as $inventory): ?>
                <tr>
                    <td><?= $this->Number->format($inventory->id) ?></td>
                    <td><?= $this->Number->format($inventory->quantity) ?></td>
                    <td><?= $this->Number->format($inventory->on_order_quantity) ?></td>
                    <td><?= $this->Number->format($inventory->on_replenishment_quantity) ?></td>
                    <td><?= $this->Number->format($inventory->available_quantity) ?></td>
                    <td><?= $this->Number->format($inventory->pending_quantity) ?></td>
                    <td><?= $inventory->has('item') ? $this->Html->link($inventory->item->name, ['controller' => 'Items', 'action' => 'view', $inventory->item->id]) : '' ?></td>
                    <td><?= h($inventory->created) ?></td>
                    <td><?= h($inventory->modified) ?></td>
                    <td><?= $this->Number->format($inventory->old_item_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inventory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?>
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
