<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyAddress $legacyAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Address'), ['action' => 'edit', $legacyAddress->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Address'), ['action' => 'delete', $legacyAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyAddress->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyAddresses view content">
            <h3><?= h($legacyAddress->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $legacyAddress->has('user') ? $this->Html->link($legacyAddress->user->id, ['controller' => 'Users', 'action' => 'view', $legacyAddress->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($legacyAddress->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($legacyAddress->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($legacyAddress->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address2') ?></th>
                    <td><?= h($legacyAddress->address2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address3') ?></th>
                    <td><?= h($legacyAddress->address3) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($legacyAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($legacyAddress->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip') ?></th>
                    <td><?= h($legacyAddress->zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($legacyAddress->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($legacyAddress->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($legacyAddress->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($legacyAddress->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($legacyAddress->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($legacyAddress->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fedex Acct') ?></th>
                    <td><?= h($legacyAddress->fedex_acct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ups Acct') ?></th>
                    <td><?= h($legacyAddress->ups_acct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyAddress->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence') ?></th>
                    <td><?= $this->Number->format($legacyAddress->sequence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($legacyAddress->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Epms Vendor Id') ?></th>
                    <td><?= $this->Number->format($legacyAddress->epms_vendor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tax Rate Id') ?></th>
                    <td><?= $this->Number->format($legacyAddress->tax_rate_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Id') ?></th>
                    <td><?= $this->Number->format($legacyAddress->customer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyAddress->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyAddress->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Residence') ?></th>
                    <td><?= $legacyAddress->residence ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
