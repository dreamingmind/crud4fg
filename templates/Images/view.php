<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="images view content">
            <h3><?= h($image->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Img File') ?></th>
                    <td><?= h($image->img_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($image->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alt') ?></th>
                    <td><?= h($image->alt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dir') ?></th>
                    <td><?= h($image->dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skus') ?></th>
                    <td><?= $image->has('skus') ? $this->Html->link($image->skus->name, ['controller' => 'Skus', 'action' => 'view', $image->skus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $image->has('item') ? $this->Html->link($image->item->name, ['controller' => 'Items', 'action' => 'view', $image->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Person') ?></th>
                    <td><?= $image->has('person') ? $this->Html->link($image->person->id, ['controller' => 'People', 'action' => 'view', $image->person->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($image->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old Image Id') ?></th>
                    <td><?= $this->Number->format($image->old_image_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($image->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($image->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Legacy Customers') ?></h4>
                <?php if (!empty($image->legacy_customers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Customer Code') ?></th>
                            <th><?= __('Order Contact') ?></th>
                            <th><?= __('Billing Contact') ?></th>
                            <th><?= __('Allow Backorder') ?></th>
                            <th><?= __('Allow Direct Pay') ?></th>
                            <th><?= __('Address Id') ?></th>
                            <th><?= __('Release Hold') ?></th>
                            <th><?= __('Taxable') ?></th>
                            <th><?= __('Rent Qty') ?></th>
                            <th><?= __('Rent Unit') ?></th>
                            <th><?= __('Rent Price') ?></th>
                            <th><?= __('Item Pull Charge') ?></th>
                            <th><?= __('Order Pull Charge') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Customer Type') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($image->legacy_customers as $legacyCustomers) : ?>
                        <tr>
                            <td><?= h($legacyCustomers->id) ?></td>
                            <td><?= h($legacyCustomers->user_id) ?></td>
                            <td><?= h($legacyCustomers->customer_code) ?></td>
                            <td><?= h($legacyCustomers->order_contact) ?></td>
                            <td><?= h($legacyCustomers->billing_contact) ?></td>
                            <td><?= h($legacyCustomers->allow_backorder) ?></td>
                            <td><?= h($legacyCustomers->allow_direct_pay) ?></td>
                            <td><?= h($legacyCustomers->address_id) ?></td>
                            <td><?= h($legacyCustomers->release_hold) ?></td>
                            <td><?= h($legacyCustomers->taxable) ?></td>
                            <td><?= h($legacyCustomers->rent_qty) ?></td>
                            <td><?= h($legacyCustomers->rent_unit) ?></td>
                            <td><?= h($legacyCustomers->rent_price) ?></td>
                            <td><?= h($legacyCustomers->item_pull_charge) ?></td>
                            <td><?= h($legacyCustomers->order_pull_charge) ?></td>
                            <td><?= h($legacyCustomers->token) ?></td>
                            <td><?= h($legacyCustomers->customer_type) ?></td>
                            <td><?= h($legacyCustomers->image_id) ?></td>
                            <td><?= h($legacyCustomers->created) ?></td>
                            <td><?= h($legacyCustomers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyCustomers', 'action' => 'view', $legacyCustomers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyCustomers', 'action' => 'edit', $legacyCustomers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyCustomers', 'action' => 'delete', $legacyCustomers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCustomers->id)]) ?>
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
