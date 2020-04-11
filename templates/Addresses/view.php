<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Address $address
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Address'), ['action' => 'edit', $address->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Address'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="addresses view content">
            <h3><?= h($address->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($address->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($address->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($address->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address2') ?></th>
                    <td><?= h($address->address2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address3') ?></th>
                    <td><?= h($address->address3) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($address->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($address->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip') ?></th>
                    <td><?= h($address->zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($address->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shipping Account') ?></th>
                    <td><?= $address->has('shipping_account') ? $this->Html->link($address->shipping_account->name, ['controller' => 'ShippingAccounts', 'action' => 'view', $address->shipping_account->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Warehouse') ?></th>
                    <td><?= $address->has('warehouse') ? $this->Html->link($address->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $address->warehouse->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tenant') ?></th>
                    <td><?= $address->has('tenant') ? $this->Html->link($address->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $address->tenant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Person') ?></th>
                    <td><?= $address->has('person') ? $this->Html->link($address->person->id, ['controller' => 'People', 'action' => 'view', $address->person->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($address->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Warehouse Office Id') ?></th>
                    <td><?= $this->Number->format($address->warehouse_office_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tenant Office Id') ?></th>
                    <td><?= $this->Number->format($address->tenant_office_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old Address Id') ?></th>
                    <td><?= $this->Number->format($address->old_address_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($address->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($address->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Residence') ?></th>
                    <td><?= $address->residence ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Coms') ?></h4>
                <?php if (!empty($address->coms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Address Id') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Channel') ?></th>
                            <th><?= __('Primary') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Old Address Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($address->coms as $coms) : ?>
                        <tr>
                            <td><?= h($coms->id) ?></td>
                            <td><?= h($coms->address_id) ?></td>
                            <td><?= h($coms->type) ?></td>
                            <td><?= h($coms->channel) ?></td>
                            <td><?= h($coms->primary) ?></td>
                            <td><?= h($coms->created) ?></td>
                            <td><?= h($coms->modified) ?></td>
                            <td><?= h($coms->old_address_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Coms', 'action' => 'view', $coms->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Coms', 'action' => 'edit', $coms->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coms', 'action' => 'delete', $coms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coms->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Customers') ?></h4>
                <?php if (!empty($address->legacy_customers)) : ?>
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
                        <?php foreach ($address->legacy_customers as $legacyCustomers) : ?>
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
