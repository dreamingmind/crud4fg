<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyAddress[]|\Cake\Collection\CollectionInterface $legacyAddresses
 */
?>
<div class="legacyAddresses index content">
    <?= $this->Html->link(__('New Legacy Address'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Addresses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('company') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('address2') ?></th>
                    <th><?= $this->Paginator->sort('address3') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('zip') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('sequence') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('epms_vendor_id') ?></th>
                    <th><?= $this->Paginator->sort('tax_rate_id') ?></th>
                    <th><?= $this->Paginator->sort('fedex_acct') ?></th>
                    <th><?= $this->Paginator->sort('ups_acct') ?></th>
                    <th><?= $this->Paginator->sort('residence') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyAddresses as $legacyAddress): ?>
                <tr>
                    <td><?= $this->Number->format($legacyAddress->id) ?></td>
                    <td><?= $legacyAddress->has('user') ? $this->Html->link($legacyAddress->user->id, ['controller' => 'Users', 'action' => 'view', $legacyAddress->user->id]) : '' ?></td>
                    <td><?= h($legacyAddress->name) ?></td>
                    <td><?= h($legacyAddress->company) ?></td>
                    <td><?= h($legacyAddress->address) ?></td>
                    <td><?= h($legacyAddress->address2) ?></td>
                    <td><?= h($legacyAddress->address3) ?></td>
                    <td><?= h($legacyAddress->city) ?></td>
                    <td><?= h($legacyAddress->state) ?></td>
                    <td><?= h($legacyAddress->zip) ?></td>
                    <td><?= h($legacyAddress->country) ?></td>
                    <td><?= $this->Number->format($legacyAddress->sequence) ?></td>
                    <td><?= $this->Number->format($legacyAddress->active) ?></td>
                    <td><?= h($legacyAddress->type) ?></td>
                    <td><?= h($legacyAddress->first_name) ?></td>
                    <td><?= h($legacyAddress->last_name) ?></td>
                    <td><?= h($legacyAddress->email) ?></td>
                    <td><?= h($legacyAddress->phone) ?></td>
                    <td><?= $this->Number->format($legacyAddress->epms_vendor_id) ?></td>
                    <td><?= $this->Number->format($legacyAddress->tax_rate_id) ?></td>
                    <td><?= h($legacyAddress->fedex_acct) ?></td>
                    <td><?= h($legacyAddress->ups_acct) ?></td>
                    <td><?= h($legacyAddress->residence) ?></td>
                    <td><?= $this->Number->format($legacyAddress->customer_id) ?></td>
                    <td><?= h($legacyAddress->created) ?></td>
                    <td><?= h($legacyAddress->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyAddress->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyAddress->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyAddress->id)]) ?>
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
