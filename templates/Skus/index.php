<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skus[]|\Cake\Collection\CollectionInterface $skus
 */
?>
<div class="skus index content">
    <?= $this->Html->link(__('New Skus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Skus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('sku_code') ?></th>
                    <th><?= $this->Paginator->sort('alternate_sku_code') ?></th>
                    <th><?= $this->Paginator->sort('items_per_sku_unit') ?></th>
                    <th><?= $this->Paginator->sort('sku_unit') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('sku_type') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('old_catalog_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($skus as $skus): ?>
                <tr>
                    <td><?= $this->Number->format($skus->id) ?></td>
                    <td><?= h($skus->name) ?></td>
                    <td><?= h($skus->sku_code) ?></td>
                    <td><?= h($skus->alternate_sku_code) ?></td>
                    <td><?= $this->Number->format($skus->items_per_sku_unit) ?></td>
                    <td><?= h($skus->sku_unit) ?></td>
                    <td><?= $this->Number->format($skus->price) ?></td>
                    <td><?= h($skus->sku_type) ?></td>
                    <td><?= $this->Number->format($skus->active) ?></td>
                    <td><?= $skus->has('store') ? $this->Html->link($skus->store->name, ['controller' => 'Stores', 'action' => 'view', $skus->store->id]) : '' ?></td>
                    <td><?= $skus->has('item') ? $this->Html->link($skus->item->name, ['controller' => 'Items', 'action' => 'view', $skus->item->id]) : '' ?></td>
                    <td><?= h($skus->created) ?></td>
                    <td><?= h($skus->modified) ?></td>
                    <td><?= $this->Number->format($skus->old_catalog_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $skus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $skus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skus->id)]) ?>
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
