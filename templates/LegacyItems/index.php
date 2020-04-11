<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyItem[]|\Cake\Collection\CollectionInterface $legacyItems
 */
?>
<div class="legacyItems index content">
    <?= $this->Html->link(__('New Legacy Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('item_code') ?></th>
                    <th><?= $this->Paginator->sort('customer_item_code') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('reorder_qty') ?></th>
                    <th><?= $this->Paginator->sort('available_qty') ?></th>
                    <th><?= $this->Paginator->sort('pending_qty') ?></th>
                    <th><?= $this->Paginator->sort('reorder_level') ?></th>
                    <th><?= $this->Paginator->sort('minimum') ?></th>
                    <th><?= $this->Paginator->sort('non_stock') ?></th>
                    <th><?= $this->Paginator->sort('customer_owned') ?></th>
                    <th><?= $this->Paginator->sort('catalog_count') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('vendor_id') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('po_item_code') ?></th>
                    <th><?= $this->Paginator->sort('po_unit') ?></th>
                    <th><?= $this->Paginator->sort('po_quantity') ?></th>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('max_quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyItems as $legacyItem): ?>
                <tr>
                    <td><?= $this->Number->format($legacyItem->id) ?></td>
                    <td><?= h($legacyItem->created) ?></td>
                    <td><?= h($legacyItem->modified) ?></td>
                    <td><?= h($legacyItem->item_code) ?></td>
                    <td><?= h($legacyItem->customer_item_code) ?></td>
                    <td><?= h($legacyItem->name) ?></td>
                    <td><?= h($legacyItem->color) ?></td>
                    <td><?= $this->Number->format($legacyItem->price) ?></td>
                    <td><?= $this->Number->format($legacyItem->weight) ?></td>
                    <td><?= $this->Number->format($legacyItem->quantity) ?></td>
                    <td><?= $this->Number->format($legacyItem->reorder_qty) ?></td>
                    <td><?= $this->Number->format($legacyItem->available_qty) ?></td>
                    <td><?= $this->Number->format($legacyItem->pending_qty) ?></td>
                    <td><?= $this->Number->format($legacyItem->reorder_level) ?></td>
                    <td><?= $this->Number->format($legacyItem->minimum) ?></td>
                    <td><?= h($legacyItem->non_stock) ?></td>
                    <td><?= h($legacyItem->customer_owned) ?></td>
                    <td><?= $this->Number->format($legacyItem->catalog_count) ?></td>
                    <td><?= $this->Number->format($legacyItem->active) ?></td>
                    <td><?= $this->Number->format($legacyItem->vendor_id) ?></td>
                    <td><?= $this->Number->format($legacyItem->cost) ?></td>
                    <td><?= h($legacyItem->po_item_code) ?></td>
                    <td><?= h($legacyItem->po_unit) ?></td>
                    <td><?= $this->Number->format($legacyItem->po_quantity) ?></td>
                    <td><?= $this->Number->format($legacyItem->location_id) ?></td>
                    <td><?= $this->Number->format($legacyItem->max_quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyItem->id)]) ?>
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
