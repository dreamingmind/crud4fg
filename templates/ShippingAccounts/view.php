<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShippingAccount $shippingAccount
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Shipping Account'), ['action' => 'edit', $shippingAccount->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Shipping Account'), ['action' => 'delete', $shippingAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingAccount->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Shipping Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Shipping Account'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shippingAccounts view content">
            <h3><?= h($shippingAccount->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($shippingAccount->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shipper') ?></th>
                    <td><?= h($shippingAccount->shipper) ?></td>
                </tr>
                <tr>
                    <th><?= __('Account Number') ?></th>
                    <td><?= h($shippingAccount->account_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tenant') ?></th>
                    <td><?= $shippingAccount->has('tenant') ? $this->Html->link($shippingAccount->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $shippingAccount->tenant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($shippingAccount->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($shippingAccount->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($shippingAccount->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Addresses') ?></h4>
                <?php if (!empty($shippingAccount->addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Company') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Address2') ?></th>
                            <th><?= __('Address3') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Zip') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('Residence') ?></th>
                            <th><?= __('Shipping Account Id') ?></th>
                            <th><?= __('Warehouse Office Id') ?></th>
                            <th><?= __('Warehouse Facility Id') ?></th>
                            <th><?= __('Tenant Office Id') ?></th>
                            <th><?= __('Tenant Id') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Old Address Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($shippingAccount->addresses as $addresses) : ?>
                        <tr>
                            <td><?= h($addresses->id) ?></td>
                            <td><?= h($addresses->name) ?></td>
                            <td><?= h($addresses->company) ?></td>
                            <td><?= h($addresses->address) ?></td>
                            <td><?= h($addresses->address2) ?></td>
                            <td><?= h($addresses->address3) ?></td>
                            <td><?= h($addresses->city) ?></td>
                            <td><?= h($addresses->state) ?></td>
                            <td><?= h($addresses->zip) ?></td>
                            <td><?= h($addresses->country) ?></td>
                            <td><?= h($addresses->residence) ?></td>
                            <td><?= h($addresses->shipping_account_id) ?></td>
                            <td><?= h($addresses->warehouse_office_id) ?></td>
                            <td><?= h($addresses->warehouse_facility_id) ?></td>
                            <td><?= h($addresses->tenant_office_id) ?></td>
                            <td><?= h($addresses->tenant_id) ?></td>
                            <td><?= h($addresses->person_id) ?></td>
                            <td><?= h($addresses->old_address_id) ?></td>
                            <td><?= h($addresses->created) ?></td>
                            <td><?= h($addresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>
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
