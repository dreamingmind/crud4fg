<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person') ?></th>
                    <td><?= $user->has('person') ? $this->Html->link($user->person->id, ['controller' => 'People', 'action' => 'view', $user->person->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($user->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old User Id') ?></th>
                    <td><?= $this->Number->format($user->old_user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Verified') ?></th>
                    <td><?= $user->verified ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Legacy Catalogs') ?></h4>
                <?php if (!empty($user->legacy_catalogs)) : ?>
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
                        <?php foreach ($user->legacy_catalogs as $legacyCatalogs) : ?>
                        <tr>
                            <td><?= h($legacyCatalogs->id) ?></td>
                            <td><?= h($legacyCatalogs->created) ?></td>
                            <td><?= h($legacyCatalogs->modified) ?></td>
                            <td><?= h($legacyCatalogs->item_id) ?></td>
                            <td><?= h($legacyCatalogs->name) ?></td>
                            <td><?= h($legacyCatalogs->parent_id) ?></td>
                            <td><?= h($legacyCatalogs->ancestor_list) ?></td>
                            <td><?= h($legacyCatalogs->item_count) ?></td>
                            <td><?= h($legacyCatalogs->lock) ?></td>
                            <td><?= h($legacyCatalogs->sequence) ?></td>
                            <td><?= h($legacyCatalogs->active) ?></td>
                            <td><?= h($legacyCatalogs->customer_id) ?></td>
                            <td><?= h($legacyCatalogs->customer_user_id) ?></td>
                            <td><?= h($legacyCatalogs->sell_quantity) ?></td>
                            <td><?= h($legacyCatalogs->sell_unit) ?></td>
                            <td><?= h($legacyCatalogs->max_quantity) ?></td>
                            <td><?= h($legacyCatalogs->price) ?></td>
                            <td><?= h($legacyCatalogs->description) ?></td>
                            <td><?= h($legacyCatalogs->type) ?></td>
                            <td><?= h($legacyCatalogs->item_code) ?></td>
                            <td><?= h($legacyCatalogs->customer_item_code) ?></td>
                            <td><?= h($legacyCatalogs->comment) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyCatalogs', 'action' => 'view', $legacyCatalogs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyCatalogs', 'action' => 'edit', $legacyCatalogs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyCatalogs', 'action' => 'delete', $legacyCatalogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCatalogs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Addresses') ?></h4>
                <?php if (!empty($user->legacy_addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Company') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Address2') ?></th>
                            <th><?= __('Address3') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Zip') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('Sequence') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Epms Vendor Id') ?></th>
                            <th><?= __('Tax Rate Id') ?></th>
                            <th><?= __('Fedex Acct') ?></th>
                            <th><?= __('Ups Acct') ?></th>
                            <th><?= __('Residence') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->legacy_addresses as $legacyAddresses) : ?>
                        <tr>
                            <td><?= h($legacyAddresses->id) ?></td>
                            <td><?= h($legacyAddresses->user_id) ?></td>
                            <td><?= h($legacyAddresses->name) ?></td>
                            <td><?= h($legacyAddresses->company) ?></td>
                            <td><?= h($legacyAddresses->address) ?></td>
                            <td><?= h($legacyAddresses->address2) ?></td>
                            <td><?= h($legacyAddresses->address3) ?></td>
                            <td><?= h($legacyAddresses->city) ?></td>
                            <td><?= h($legacyAddresses->state) ?></td>
                            <td><?= h($legacyAddresses->zip) ?></td>
                            <td><?= h($legacyAddresses->country) ?></td>
                            <td><?= h($legacyAddresses->sequence) ?></td>
                            <td><?= h($legacyAddresses->active) ?></td>
                            <td><?= h($legacyAddresses->type) ?></td>
                            <td><?= h($legacyAddresses->first_name) ?></td>
                            <td><?= h($legacyAddresses->last_name) ?></td>
                            <td><?= h($legacyAddresses->email) ?></td>
                            <td><?= h($legacyAddresses->phone) ?></td>
                            <td><?= h($legacyAddresses->epms_vendor_id) ?></td>
                            <td><?= h($legacyAddresses->tax_rate_id) ?></td>
                            <td><?= h($legacyAddresses->fedex_acct) ?></td>
                            <td><?= h($legacyAddresses->ups_acct) ?></td>
                            <td><?= h($legacyAddresses->residence) ?></td>
                            <td><?= h($legacyAddresses->customer_id) ?></td>
                            <td><?= h($legacyAddresses->created) ?></td>
                            <td><?= h($legacyAddresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyAddresses', 'action' => 'view', $legacyAddresses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyAddresses', 'action' => 'edit', $legacyAddresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyAddresses', 'action' => 'delete', $legacyAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyAddresses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Budgets') ?></h4>
                <?php if (!empty($user->legacy_budgets)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Use Budget') ?></th>
                            <th><?= __('Budget') ?></th>
                            <th><?= __('Remaining Budget') ?></th>
                            <th><?= __('Use Item Budget') ?></th>
                            <th><?= __('Item Budget') ?></th>
                            <th><?= __('Remaining Item Budget') ?></th>
                            <th><?= __('Budget Month') ?></th>
                            <th><?= __('Current') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->legacy_budgets as $legacyBudgets) : ?>
                        <tr>
                            <td><?= h($legacyBudgets->id) ?></td>
                            <td><?= h($legacyBudgets->user_id) ?></td>
                            <td><?= h($legacyBudgets->use_budget) ?></td>
                            <td><?= h($legacyBudgets->budget) ?></td>
                            <td><?= h($legacyBudgets->remaining_budget) ?></td>
                            <td><?= h($legacyBudgets->use_item_budget) ?></td>
                            <td><?= h($legacyBudgets->item_budget) ?></td>
                            <td><?= h($legacyBudgets->remaining_item_budget) ?></td>
                            <td><?= h($legacyBudgets->budget_month) ?></td>
                            <td><?= h($legacyBudgets->current) ?></td>
                            <td><?= h($legacyBudgets->created) ?></td>
                            <td><?= h($legacyBudgets->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyBudgets', 'action' => 'view', $legacyBudgets->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyBudgets', 'action' => 'edit', $legacyBudgets->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyBudgets', 'action' => 'delete', $legacyBudgets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyBudgets->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Customers') ?></h4>
                <?php if (!empty($user->legacy_customers)) : ?>
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
                        <?php foreach ($user->legacy_customers as $legacyCustomers) : ?>
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
            <div class="related">
                <h4><?= __('Related Legacy Observers') ?></h4>
                <?php if (!empty($user->legacy_observers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('User Observer Id') ?></th>
                            <th><?= __('Observer Name') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('User Name') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->legacy_observers as $legacyObservers) : ?>
                        <tr>
                            <td><?= h($legacyObservers->id) ?></td>
                            <td><?= h($legacyObservers->user_id) ?></td>
                            <td><?= h($legacyObservers->user_observer_id) ?></td>
                            <td><?= h($legacyObservers->observer_name) ?></td>
                            <td><?= h($legacyObservers->type) ?></td>
                            <td><?= h($legacyObservers->user_name) ?></td>
                            <td><?= h($legacyObservers->location) ?></td>
                            <td><?= h($legacyObservers->created) ?></td>
                            <td><?= h($legacyObservers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyObservers', 'action' => 'view', $legacyObservers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyObservers', 'action' => 'edit', $legacyObservers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyObservers', 'action' => 'delete', $legacyObservers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyObservers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Preferences') ?></h4>
                <?php if (!empty($user->legacy_preferences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Prefs') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->legacy_preferences as $legacyPreferences) : ?>
                        <tr>
                            <td><?= h($legacyPreferences->id) ?></td>
                            <td><?= h($legacyPreferences->prefs) ?></td>
                            <td><?= h($legacyPreferences->user_id) ?></td>
                            <td><?= h($legacyPreferences->created) ?></td>
                            <td><?= h($legacyPreferences->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyPreferences', 'action' => 'view', $legacyPreferences->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyPreferences', 'action' => 'edit', $legacyPreferences->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyPreferences', 'action' => 'delete', $legacyPreferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyPreferences->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy User Registries') ?></h4>
                <?php if (!empty($user->legacy_user_registries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Node Id') ?></th>
                            <th><?= __('Model') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->legacy_user_registries as $legacyUserRegistries) : ?>
                        <tr>
                            <td><?= h($legacyUserRegistries->id) ?></td>
                            <td><?= h($legacyUserRegistries->created) ?></td>
                            <td><?= h($legacyUserRegistries->modified) ?></td>
                            <td><?= h($legacyUserRegistries->user_id) ?></td>
                            <td><?= h($legacyUserRegistries->node_id) ?></td>
                            <td><?= h($legacyUserRegistries->model) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyUserRegistries', 'action' => 'view', $legacyUserRegistries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyUserRegistries', 'action' => 'edit', $legacyUserRegistries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyUserRegistries', 'action' => 'delete', $legacyUserRegistries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUserRegistries->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Preferences') ?></h4>
                <?php if (!empty($user->preferences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Prefs') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->preferences as $preferences) : ?>
                        <tr>
                            <td><?= h($preferences->id) ?></td>
                            <td><?= h($preferences->prefs) ?></td>
                            <td><?= h($preferences->user_id) ?></td>
                            <td><?= h($preferences->created) ?></td>
                            <td><?= h($preferences->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Preferences', 'action' => 'view', $preferences->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Preferences', 'action' => 'edit', $preferences->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Preferences', 'action' => 'delete', $preferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preferences->id)]) ?>
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
