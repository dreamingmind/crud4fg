<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stores view content">
            <h3><?= h($store->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($store->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tenant') ?></th>
                    <td><?= $store->has('tenant') ? $this->Html->link($store->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $store->tenant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($store->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($store->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($store->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($store->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Skus') ?></h4>
                <?php if (!empty($store->skus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Sku Code') ?></th>
                            <th><?= __('Alternate Sku Code') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Items Per Sku Unit') ?></th>
                            <th><?= __('Sku Unit') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Sku Type') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Old Catalog Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($store->skus as $skus) : ?>
                        <tr>
                            <td><?= h($skus->id) ?></td>
                            <td><?= h($skus->name) ?></td>
                            <td><?= h($skus->sku_code) ?></td>
                            <td><?= h($skus->alternate_sku_code) ?></td>
                            <td><?= h($skus->description) ?></td>
                            <td><?= h($skus->items_per_sku_unit) ?></td>
                            <td><?= h($skus->sku_unit) ?></td>
                            <td><?= h($skus->price) ?></td>
                            <td><?= h($skus->sku_type) ?></td>
                            <td><?= h($skus->active) ?></td>
                            <td><?= h($skus->store_id) ?></td>
                            <td><?= h($skus->item_id) ?></td>
                            <td><?= h($skus->created) ?></td>
                            <td><?= h($skus->modified) ?></td>
                            <td><?= h($skus->old_catalog_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Skus', 'action' => 'view', $skus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Skus', 'action' => 'edit', $skus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skus', 'action' => 'delete', $skus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skus->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
