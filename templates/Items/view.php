<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items view content">
            <h3><?= h($item->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($item->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Code') ?></th>
                    <td><?= h($item->item_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alternate Item Code') ?></th>
                    <td><?= h($item->alternate_item_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($item->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Unit') ?></th>
                    <td><?= h($item->item_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tenant') ?></th>
                    <td><?= $item->has('tenant') ? $this->Html->link($item->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $item->tenant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($item->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($item->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Non Stock') ?></th>
                    <td><?= $this->Number->format($item->non_stock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reorder Quantity') ?></th>
                    <td><?= $this->Number->format($item->reorder_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reorder Trigger Level') ?></th>
                    <td><?= $this->Number->format($item->reorder_trigger_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old Item Id') ?></th>
                    <td><?= $this->Number->format($item->old_item_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($item->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($item->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Images') ?></h4>
                <?php if (!empty($item->images)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Img File') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Alt') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th><?= __('Sku Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Old Image Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->images as $images) : ?>
                        <tr>
                            <td><?= h($images->id) ?></td>
                            <td><?= h($images->img_file) ?></td>
                            <td><?= h($images->title) ?></td>
                            <td><?= h($images->alt) ?></td>
                            <td><?= h($images->dir) ?></td>
                            <td><?= h($images->sku_id) ?></td>
                            <td><?= h($images->item_id) ?></td>
                            <td><?= h($images->person_id) ?></td>
                            <td><?= h($images->created) ?></td>
                            <td><?= h($images->modified) ?></td>
                            <td><?= h($images->old_image_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Inventories') ?></h4>
                <?php if (!empty($item->inventories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('On Order Quantity') ?></th>
                            <th><?= __('On Replenishment Quantity') ?></th>
                            <th><?= __('Available Quantity') ?></th>
                            <th><?= __('Pending Quantity') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Old Item Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->inventories as $inventories) : ?>
                        <tr>
                            <td><?= h($inventories->id) ?></td>
                            <td><?= h($inventories->quantity) ?></td>
                            <td><?= h($inventories->on_order_quantity) ?></td>
                            <td><?= h($inventories->on_replenishment_quantity) ?></td>
                            <td><?= h($inventories->available_quantity) ?></td>
                            <td><?= h($inventories->pending_quantity) ?></td>
                            <td><?= h($inventories->item_id) ?></td>
                            <td><?= h($inventories->created) ?></td>
                            <td><?= h($inventories->modified) ?></td>
                            <td><?= h($inventories->old_item_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Inventories', 'action' => 'view', $inventories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Inventories', 'action' => 'edit', $inventories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inventories', 'action' => 'delete', $inventories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Catalogs') ?></h4>
                <?php if (!empty($item->legacy_catalogs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Ancestor List') ?></th>
                            <th><?= __('Item Count') ?></th>
                            <th><?= __('Lock') ?></th>
                            <th><?= __('Sequence') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Customer User Id') ?></th>
                            <th><?= __('Sell Quantity') ?></th>
                            <th><?= __('Sell Unit') ?></th>
                            <th><?= __('Max Quantity') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Item Code') ?></th>
                            <th><?= __('Customer Item Code') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->legacy_catalogs as $legacyCatalogs) : ?>
                        <tr>
                            <td><?= h($legacyCatalogs->id) ?></td>
                            <td><?= h($legacyCatalogs->created) ?></td>
                            <td><?= h($legacyCatalogs->modified) ?></td>
                            <td><?= h($legacyCatalogs->item_id) ?></td>
                            <td><?= h($legacyCatalogs->name) ?></td>
                            <td><?= h($legacyCatalogs->parent_id) ?></td>
                            <td><?= h($legacyCatalogs->ancestor_list) ?></td>
                            <td><?= h($legacyCatalogs->item_count) ?></td>
                            <td><?= h($legacyCatalogs->lock) ?></td>
                            <td><?= h($legacyCatalogs->sequence) ?></td>
                            <td><?= h($legacyCatalogs->active) ?></td>
                            <td><?= h($legacyCatalogs->customer_id) ?></td>
                            <td><?= h($legacyCatalogs->customer_user_id) ?></td>
                            <td><?= h($legacyCatalogs->sell_quantity) ?></td>
                            <td><?= h($legacyCatalogs->sell_unit) ?></td>
                            <td><?= h($legacyCatalogs->max_quantity) ?></td>
                            <td><?= h($legacyCatalogs->price) ?></td>
                            <td><?= h($legacyCatalogs->description) ?></td>
                            <td><?= h($legacyCatalogs->type) ?></td>
                            <td><?= h($legacyCatalogs->item_code) ?></td>
                            <td><?= h($legacyCatalogs->customer_item_code) ?></td>
                            <td><?= h($legacyCatalogs->comment) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyCatalogs', 'action' => 'view', $legacyCatalogs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyCatalogs', 'action' => 'edit', $legacyCatalogs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyCatalogs', 'action' => 'delete', $legacyCatalogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCatalogs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Images') ?></h4>
                <?php if (!empty($item->legacy_images)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Img File') ?></th>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Mimetype') ?></th>
                            <th><?= __('Filesize') ?></th>
                            <th><?= __('Width') ?></th>
                            <th><?= __('Height') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Alt') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->legacy_images as $legacyImages) : ?>
                        <tr>
                            <td><?= h($legacyImages->img_file) ?></td>
                            <td><?= h($legacyImages->id) ?></td>
                            <td><?= h($legacyImages->modified) ?></td>
                            <td><?= h($legacyImages->created) ?></td>
                            <td><?= h($legacyImages->mimetype) ?></td>
                            <td><?= h($legacyImages->filesize) ?></td>
                            <td><?= h($legacyImages->width) ?></td>
                            <td><?= h($legacyImages->height) ?></td>
                            <td><?= h($legacyImages->title) ?></td>
                            <td><?= h($legacyImages->date) ?></td>
                            <td><?= h($legacyImages->alt) ?></td>
                            <td><?= h($legacyImages->item_id) ?></td>
                            <td><?= h($legacyImages->dir) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyImages', 'action' => 'view', $legacyImages->]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyImages', 'action' => 'edit', $legacyImages->]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyImages', 'action' => 'delete', $legacyImages->], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyImages->)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Skus') ?></h4>
                <?php if (!empty($item->skus)) : ?>
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
                        <?php foreach ($item->skus as $skus) : ?>
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
