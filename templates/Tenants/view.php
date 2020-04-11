<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tenant $tenant
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tenant'), ['action' => 'edit', $tenant->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tenant'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tenants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tenant'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tenants view content">
            <h3><?= h($tenant->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tenant->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Warehouse') ?></th>
                    <td><?= $tenant->has('warehouse') ? $this->Html->link($tenant->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $tenant->warehouse->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Code') ?></th>
                    <td><?= h($tenant->customer_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($tenant->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tenant->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($tenant->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old User Id') ?></th>
                    <td><?= $this->Number->format($tenant->old_user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tenant->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tenant->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Addresses') ?></h4>
                <?php if (!empty($tenant->addresses)) : ?>
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
                        <?php foreach ($tenant->addresses as $addresses) : ?>
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
            <div class="related">
                <h4><?= __('Related Items') ?></h4>
                <?php if (!empty($tenant->items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Item Code') ?></th>
                            <th><?= __('Alternate Item Code') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Item Unit') ?></th>
                            <th><?= __('Non Stock') ?></th>
                            <th><?= __('Reorder Quantity') ?></th>
                            <th><?= __('Reorder Trigger Level') ?></th>
                            <th><?= __('Tenant Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Old Item Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tenant->items as $items) : ?>
                        <tr>
                            <td><?= h($items->id) ?></td>
                            <td><?= h($items->name) ?></td>
                            <td><?= h($items->item_code) ?></td>
                            <td><?= h($items->alternate_item_code) ?></td>
                            <td><?= h($items->description) ?></td>
                            <td><?= h($items->active) ?></td>
                            <td><?= h($items->item_unit) ?></td>
                            <td><?= h($items->non_stock) ?></td>
                            <td><?= h($items->reorder_quantity) ?></td>
                            <td><?= h($items->reorder_trigger_level) ?></td>
                            <td><?= h($items->tenant_id) ?></td>
                            <td><?= h($items->created) ?></td>
                            <td><?= h($items->modified) ?></td>
                            <td><?= h($items->old_item_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related People') ?></h4>
                <?php if (!empty($tenant->people)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Tenant Id') ?></th>
                            <th><?= __('Warehouse Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Old User Id') ?></th>
                            <th><?= __('Pronoun') ?></th>
                            <th><?= __('Cart Session') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tenant->people as $people) : ?>
                        <tr>
                            <td><?= h($people->id) ?></td>
                            <td><?= h($people->person_id) ?></td>
                            <td><?= h($people->tenant_id) ?></td>
                            <td><?= h($people->warehouse_id) ?></td>
                            <td><?= h($people->first_name) ?></td>
                            <td><?= h($people->last_name) ?></td>
                            <td><?= h($people->role) ?></td>
                            <td><?= h($people->parent_id) ?></td>
                            <td><?= h($people->old_user_id) ?></td>
                            <td><?= h($people->pronoun) ?></td>
                            <td><?= h($people->cart_session) ?></td>
                            <td><?= h($people->created) ?></td>
                            <td><?= h($people->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Shipping Accounts') ?></h4>
                <?php if (!empty($tenant->shipping_accounts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Shipper') ?></th>
                            <th><?= __('Account Number') ?></th>
                            <th><?= __('Tenant Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tenant->shipping_accounts as $shippingAccounts) : ?>
                        <tr>
                            <td><?= h($shippingAccounts->id) ?></td>
                            <td><?= h($shippingAccounts->name) ?></td>
                            <td><?= h($shippingAccounts->shipper) ?></td>
                            <td><?= h($shippingAccounts->account_number) ?></td>
                            <td><?= h($shippingAccounts->tenant_id) ?></td>
                            <td><?= h($shippingAccounts->created) ?></td>
                            <td><?= h($shippingAccounts->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ShippingAccounts', 'action' => 'view', $shippingAccounts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ShippingAccounts', 'action' => 'edit', $shippingAccounts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShippingAccounts', 'action' => 'delete', $shippingAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingAccounts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Stores') ?></h4>
                <?php if (!empty($tenant->stores)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Tenant Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tenant->stores as $stores) : ?>
                        <tr>
                            <td><?= h($stores->id) ?></td>
                            <td><?= h($stores->name) ?></td>
                            <td><?= h($stores->tenant_id) ?></td>
                            <td><?= h($stores->active) ?></td>
                            <td><?= h($stores->created) ?></td>
                            <td><?= h($stores->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Stores', 'action' => 'view', $stores->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Stores', 'action' => 'edit', $stores->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stores', 'action' => 'delete', $stores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stores->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tenant Contracts') ?></h4>
                <?php if (!empty($tenant->tenant_contracts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tenant Id') ?></th>
                            <th><?= __('Monthly Service Fee') ?></th>
                            <th><?= __('Rental Qty') ?></th>
                            <th><?= __('Rental Unit') ?></th>
                            <th><?= __('Rental Price') ?></th>
                            <th><?= __('Order Pull Charge') ?></th>
                            <th><?= __('Order Additional Item Charge') ?></th>
                            <th><?= __('Replen Charge') ?></th>
                            <th><?= __('Replen Additional Item Charge') ?></th>
                            <th><?= __('Unload Hourly') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tenant->tenant_contracts as $tenantContracts) : ?>
                        <tr>
                            <td><?= h($tenantContracts->id) ?></td>
                            <td><?= h($tenantContracts->tenant_id) ?></td>
                            <td><?= h($tenantContracts->monthly_service_fee) ?></td>
                            <td><?= h($tenantContracts->rental_qty) ?></td>
                            <td><?= h($tenantContracts->rental_unit) ?></td>
                            <td><?= h($tenantContracts->rental_price) ?></td>
                            <td><?= h($tenantContracts->order_pull_charge) ?></td>
                            <td><?= h($tenantContracts->order_additional_item_charge) ?></td>
                            <td><?= h($tenantContracts->replen_charge) ?></td>
                            <td><?= h($tenantContracts->replen_additional_item_charge) ?></td>
                            <td><?= h($tenantContracts->unload_hourly) ?></td>
                            <td><?= h($tenantContracts->created) ?></td>
                            <td><?= h($tenantContracts->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TenantContracts', 'action' => 'view', $tenantContracts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TenantContracts', 'action' => 'edit', $tenantContracts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TenantContracts', 'action' => 'delete', $tenantContracts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenantContracts->id)]) ?>
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
