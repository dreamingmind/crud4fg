<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyItem $legacyItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Item'), ['action' => 'edit', $legacyItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Item'), ['action' => 'delete', $legacyItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyItems view content">
            <h3><?= h($legacyItem->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item Code') ?></th>
                    <td><?= h($legacyItem->item_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Item Code') ?></th>
                    <td><?= h($legacyItem->customer_item_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($legacyItem->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($legacyItem->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Item Code') ?></th>
                    <td><?= h($legacyItem->po_item_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Unit') ?></th>
                    <td><?= h($legacyItem->po_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($legacyItem->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= $this->Number->format($legacyItem->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($legacyItem->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reorder Qty') ?></th>
                    <td><?= $this->Number->format($legacyItem->reorder_qty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Available Qty') ?></th>
                    <td><?= $this->Number->format($legacyItem->available_qty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pending Qty') ?></th>
                    <td><?= $this->Number->format($legacyItem->pending_qty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reorder Level') ?></th>
                    <td><?= $this->Number->format($legacyItem->reorder_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Minimum') ?></th>
                    <td><?= $this->Number->format($legacyItem->minimum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Catalog Count') ?></th>
                    <td><?= $this->Number->format($legacyItem->catalog_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($legacyItem->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vendor Id') ?></th>
                    <td><?= $this->Number->format($legacyItem->vendor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($legacyItem->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Quantity') ?></th>
                    <td><?= $this->Number->format($legacyItem->po_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location Id') ?></th>
                    <td><?= $this->Number->format($legacyItem->location_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Quantity') ?></th>
                    <td><?= $this->Number->format($legacyItem->max_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyItem->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyItem->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Non Stock') ?></th>
                    <td><?= $legacyItem->non_stock ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Owned') ?></th>
                    <td><?= $legacyItem->customer_owned ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($legacyItem->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description 2') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($legacyItem->description_2)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($legacyItem->po_description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
