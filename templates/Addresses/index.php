<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Address[]|\Cake\Collection\CollectionInterface $addresses
 */
?>
<div class="addresses index content">
    <?= $this->Html->link(__('New Address'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Addresses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('company') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('address2') ?></th>
                    <th><?= $this->Paginator->sort('address3') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('zip') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('residence') ?></th>
                    <th><?= $this->Paginator->sort('shipping_account_id') ?></th>
                    <th><?= $this->Paginator->sort('warehouse_office_id') ?></th>
                    <th><?= $this->Paginator->sort('warehouse_facility_id') ?></th>
                    <th><?= $this->Paginator->sort('tenant_office_id') ?></th>
                    <th><?= $this->Paginator->sort('tenant_id') ?></th>
                    <th><?= $this->Paginator->sort('person_id') ?></th>
                    <th><?= $this->Paginator->sort('old_address_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($addresses as $address): ?>
                <tr>
                    <td><?= $this->Number->format($address->id) ?></td>
                    <td><?= h($address->name) ?></td>
                    <td><?= h($address->company) ?></td>
                    <td><?= h($address->address) ?></td>
                    <td><?= h($address->address2) ?></td>
                    <td><?= h($address->address3) ?></td>
                    <td><?= h($address->city) ?></td>
                    <td><?= h($address->state) ?></td>
                    <td><?= h($address->zip) ?></td>
                    <td><?= h($address->country) ?></td>
                    <td><?= h($address->residence) ?></td>
                    <td><?= $address->has('shipping_account') ? $this->Html->link($address->shipping_account->name, ['controller' => 'ShippingAccounts', 'action' => 'view', $address->shipping_account->id]) : '' ?></td>
                    <td><?= $this->Number->format($address->warehouse_office_id) ?></td>
                    <td><?= $address->has('warehouse') ? $this->Html->link($address->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $address->warehouse->id]) : '' ?></td>
                    <td><?= $this->Number->format($address->tenant_office_id) ?></td>
                    <td><?= $address->has('tenant') ? $this->Html->link($address->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $address->tenant->id]) : '' ?></td>
                    <td><?= $address->has('person') ? $this->Html->link($address->person->id, ['controller' => 'People', 'action' => 'view', $address->person->id]) : '' ?></td>
                    <td><?= $this->Number->format($address->old_address_id) ?></td>
                    <td><?= h($address->created) ?></td>
                    <td><?= h($address->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $address->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>
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
