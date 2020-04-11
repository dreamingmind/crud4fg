<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCatalog[]|\Cake\Collection\CollectionInterface $legacyCatalogs
 */
?>
<div class="legacyCatalogs index content">
    <?= $this->Html->link(__('New Legacy Catalog'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Catalogs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('ancestor_list') ?></th>
                    <th><?= $this->Paginator->sort('item_count') ?></th>
                    <th><?= $this->Paginator->sort('lock') ?></th>
                    <th><?= $this->Paginator->sort('sequence') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('customer_user_id') ?></th>
                    <th><?= $this->Paginator->sort('sell_quantity') ?></th>
                    <th><?= $this->Paginator->sort('sell_unit') ?></th>
                    <th><?= $this->Paginator->sort('max_quantity') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('item_code') ?></th>
                    <th><?= $this->Paginator->sort('customer_item_code') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyCatalogs as $legacyCatalog): ?>
                <tr>
                    <td><?= $this->Number->format($legacyCatalog->id) ?></td>
                    <td><?= h($legacyCatalog->created) ?></td>
                    <td><?= h($legacyCatalog->modified) ?></td>
                    <td><?= $legacyCatalog->has('item') ? $this->Html->link($legacyCatalog->item->name, ['controller' => 'Items', 'action' => 'view', $legacyCatalog->item->id]) : '' ?></td>
                    <td><?= h($legacyCatalog->name) ?></td>
                    <td><?= $legacyCatalog->has('parent_legacy_catalog') ? $this->Html->link($legacyCatalog->parent_legacy_catalog->name, ['controller' => 'LegacyCatalogs', 'action' => 'view', $legacyCatalog->parent_legacy_catalog->id]) : '' ?></td>
                    <td><?= h($legacyCatalog->ancestor_list) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->item_count) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->lock) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->sequence) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->active) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->customer_id) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->customer_user_id) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->sell_quantity) ?></td>
                    <td><?= h($legacyCatalog->sell_unit) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->max_quantity) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->price) ?></td>
                    <td><?= $this->Number->format($legacyCatalog->type) ?></td>
                    <td><?= h($legacyCatalog->item_code) ?></td>
                    <td><?= h($legacyCatalog->customer_item_code) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyCatalog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyCatalog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyCatalog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCatalog->id)]) ?>
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
