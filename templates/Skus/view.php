<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skus $skus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Skus'), ['action' => 'edit', $skus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Skus'), ['action' => 'delete', $skus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Skus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Skus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skus view content">
            <h3><?= h($skus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($skus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sku Code') ?></th>
                    <td><?= h($skus->sku_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alternate Sku Code') ?></th>
                    <td><?= h($skus->alternate_sku_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sku Unit') ?></th>
                    <td><?= h($skus->sku_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sku Type') ?></th>
                    <td><?= h($skus->sku_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $skus->has('store') ? $this->Html->link($skus->store->name, ['controller' => 'Stores', 'action' => 'view', $skus->store->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $skus->has('item') ? $this->Html->link($skus->item->name, ['controller' => 'Items', 'action' => 'view', $skus->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($skus->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Items Per Sku Unit') ?></th>
                    <td><?= $this->Number->format($skus->items_per_sku_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($skus->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($skus->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old Catalog Id') ?></th>
                    <td><?= $this->Number->format($skus->old_catalog_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($skus->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($skus->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($skus->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
