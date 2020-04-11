<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCatalog $legacyCatalog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Catalog'), ['action' => 'edit', $legacyCatalog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Catalog'), ['action' => 'delete', $legacyCatalog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCatalog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Catalogs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Catalog'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyCatalogs view content">
            <h3><?= h($legacyCatalog->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $legacyCatalog->has('item') ? $this->Html->link($legacyCatalog->item->name, ['controller' => 'Items', 'action' => 'view', $legacyCatalog->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($legacyCatalog->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parent Legacy Catalog') ?></th>
                    <td><?= $legacyCatalog->has('parent_legacy_catalog') ? $this->Html->link($legacyCatalog->parent_legacy_catalog->name, ['controller' => 'LegacyCatalogs', 'action' => 'view', $legacyCatalog->parent_legacy_catalog->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ancestor List') ?></th>
                    <td><?= h($legacyCatalog->ancestor_list) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sell Unit') ?></th>
                    <td><?= h($legacyCatalog->sell_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Code') ?></th>
                    <td><?= h($legacyCatalog->item_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Item Code') ?></th>
                    <td><?= h($legacyCatalog->customer_item_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Count') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->item_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lock') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->lock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->sequence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Id') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->customer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer User Id') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->customer_user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sell Quantity') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->sell_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Quantity') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->max_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $this->Number->format($legacyCatalog->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyCatalog->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyCatalog->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($legacyCatalog->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($legacyCatalog->comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($legacyCatalog->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Verified') ?></th>
                            <th><?= __('Old User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($legacyCatalog->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->person_id) ?></td>
                            <td><?= h($users->verified) ?></td>
                            <td><?= h($users->old_user_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Catalogs') ?></h4>
                <?php if (!empty($legacyCatalog->child_legacy_catalogs)) : ?>
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
                        <?php foreach ($legacyCatalog->child_legacy_catalogs as $childLegacyCatalogs) : ?>
                        <tr>
                            <td><?= h($childLegacyCatalogs->id) ?></td>
                            <td><?= h($childLegacyCatalogs->created) ?></td>
                            <td><?= h($childLegacyCatalogs->modified) ?></td>
                            <td><?= h($childLegacyCatalogs->item_id) ?></td>
                            <td><?= h($childLegacyCatalogs->name) ?></td>
                            <td><?= h($childLegacyCatalogs->parent_id) ?></td>
                            <td><?= h($childLegacyCatalogs->ancestor_list) ?></td>
                            <td><?= h($childLegacyCatalogs->item_count) ?></td>
                            <td><?= h($childLegacyCatalogs->lock) ?></td>
                            <td><?= h($childLegacyCatalogs->sequence) ?></td>
                            <td><?= h($childLegacyCatalogs->active) ?></td>
                            <td><?= h($childLegacyCatalogs->customer_id) ?></td>
                            <td><?= h($childLegacyCatalogs->customer_user_id) ?></td>
                            <td><?= h($childLegacyCatalogs->sell_quantity) ?></td>
                            <td><?= h($childLegacyCatalogs->sell_unit) ?></td>
                            <td><?= h($childLegacyCatalogs->max_quantity) ?></td>
                            <td><?= h($childLegacyCatalogs->price) ?></td>
                            <td><?= h($childLegacyCatalogs->description) ?></td>
                            <td><?= h($childLegacyCatalogs->type) ?></td>
                            <td><?= h($childLegacyCatalogs->item_code) ?></td>
                            <td><?= h($childLegacyCatalogs->customer_item_code) ?></td>
                            <td><?= h($childLegacyCatalogs->comment) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyCatalogs', 'action' => 'view', $childLegacyCatalogs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyCatalogs', 'action' => 'edit', $childLegacyCatalogs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyCatalogs', 'action' => 'delete', $childLegacyCatalogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childLegacyCatalogs->id)]) ?>
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
