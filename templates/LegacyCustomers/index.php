<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCustomer[]|\Cake\Collection\CollectionInterface $legacyCustomers
 */
?>
<div class="legacyCustomers index content">
    <?= $this->Html->link(__('New Legacy Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('customer_code') ?></th>
                    <th><?= $this->Paginator->sort('order_contact') ?></th>
                    <th><?= $this->Paginator->sort('billing_contact') ?></th>
                    <th><?= $this->Paginator->sort('allow_backorder') ?></th>
                    <th><?= $this->Paginator->sort('allow_direct_pay') ?></th>
                    <th><?= $this->Paginator->sort('address_id') ?></th>
                    <th><?= $this->Paginator->sort('release_hold') ?></th>
                    <th><?= $this->Paginator->sort('taxable') ?></th>
                    <th><?= $this->Paginator->sort('rent_qty') ?></th>
                    <th><?= $this->Paginator->sort('rent_unit') ?></th>
                    <th><?= $this->Paginator->sort('rent_price') ?></th>
                    <th><?= $this->Paginator->sort('item_pull_charge') ?></th>
                    <th><?= $this->Paginator->sort('order_pull_charge') ?></th>
                    <th><?= $this->Paginator->sort('token') ?></th>
                    <th><?= $this->Paginator->sort('customer_type') ?></th>
                    <th><?= $this->Paginator->sort('image_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyCustomers as $legacyCustomer): ?>
                <tr>
                    <td><?= $this->Number->format($legacyCustomer->id) ?></td>
                    <td><?= $legacyCustomer->has('user') ? $this->Html->link($legacyCustomer->user->id, ['controller' => 'Users', 'action' => 'view', $legacyCustomer->user->id]) : '' ?></td>
                    <td><?= h($legacyCustomer->customer_code) ?></td>
                    <td><?= h($legacyCustomer->order_contact) ?></td>
                    <td><?= h($legacyCustomer->billing_contact) ?></td>
                    <td><?= h($legacyCustomer->allow_backorder) ?></td>
                    <td><?= h($legacyCustomer->allow_direct_pay) ?></td>
                    <td><?= $legacyCustomer->has('address') ? $this->Html->link($legacyCustomer->address->name, ['controller' => 'Addresses', 'action' => 'view', $legacyCustomer->address->id]) : '' ?></td>
                    <td><?= $this->Number->format($legacyCustomer->release_hold) ?></td>
                    <td><?= h($legacyCustomer->taxable) ?></td>
                    <td><?= $this->Number->format($legacyCustomer->rent_qty) ?></td>
                    <td><?= h($legacyCustomer->rent_unit) ?></td>
                    <td><?= $this->Number->format($legacyCustomer->rent_price) ?></td>
                    <td><?= $this->Number->format($legacyCustomer->item_pull_charge) ?></td>
                    <td><?= $this->Number->format($legacyCustomer->order_pull_charge) ?></td>
                    <td><?= h($legacyCustomer->token) ?></td>
                    <td><?= h($legacyCustomer->customer_type) ?></td>
                    <td><?= $legacyCustomer->has('image') ? $this->Html->link($legacyCustomer->image->title, ['controller' => 'Images', 'action' => 'view', $legacyCustomer->image->id]) : '' ?></td>
                    <td><?= h($legacyCustomer->created) ?></td>
                    <td><?= h($legacyCustomer->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyCustomer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyCustomer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCustomer->id)]) ?>
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
