<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCustomer $legacyCustomer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Customer'), ['action' => 'edit', $legacyCustomer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Customer'), ['action' => 'delete', $legacyCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCustomer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyCustomers view content">
            <h3><?= h($legacyCustomer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $legacyCustomer->has('user') ? $this->Html->link($legacyCustomer->user->id, ['controller' => 'Users', 'action' => 'view', $legacyCustomer->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Code') ?></th>
                    <td><?= h($legacyCustomer->customer_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Contact') ?></th>
                    <td><?= h($legacyCustomer->order_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Billing Contact') ?></th>
                    <td><?= h($legacyCustomer->billing_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= $legacyCustomer->has('address') ? $this->Html->link($legacyCustomer->address->name, ['controller' => 'Addresses', 'action' => 'view', $legacyCustomer->address->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rent Unit') ?></th>
                    <td><?= h($legacyCustomer->rent_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($legacyCustomer->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Type') ?></th>
                    <td><?= h($legacyCustomer->customer_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= $legacyCustomer->has('image') ? $this->Html->link($legacyCustomer->image->title, ['controller' => 'Images', 'action' => 'view', $legacyCustomer->image->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyCustomer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Release Hold') ?></th>
                    <td><?= $this->Number->format($legacyCustomer->release_hold) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rent Qty') ?></th>
                    <td><?= $this->Number->format($legacyCustomer->rent_qty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rent Price') ?></th>
                    <td><?= $this->Number->format($legacyCustomer->rent_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Pull Charge') ?></th>
                    <td><?= $this->Number->format($legacyCustomer->item_pull_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Pull Charge') ?></th>
                    <td><?= $this->Number->format($legacyCustomer->order_pull_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyCustomer->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyCustomer->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Allow Backorder') ?></th>
                    <td><?= $legacyCustomer->allow_backorder ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Allow Direct Pay') ?></th>
                    <td><?= $legacyCustomer->allow_direct_pay ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Taxable') ?></th>
                    <td><?= $legacyCustomer->taxable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
