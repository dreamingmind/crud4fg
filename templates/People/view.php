<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List People'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Person'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="people view content">
            <h3><?= h($person->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tenant') ?></th>
                    <td><?= $person->has('tenant') ? $this->Html->link($person->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $person->tenant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Warehouse') ?></th>
                    <td><?= $person->has('warehouse') ? $this->Html->link($person->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $person->warehouse->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($person->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($person->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($person->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parent Person') ?></th>
                    <td><?= $person->has('parent_person') ? $this->Html->link($person->parent_person->id, ['controller' => 'People', 'action' => 'view', $person->parent_person->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pronoun') ?></th>
                    <td><?= h($person->pronoun) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cart Session') ?></th>
                    <td><?= h($person->cart_session) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($person->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Id') ?></th>
                    <td><?= $this->Number->format($person->person_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old User Id') ?></th>
                    <td><?= $this->Number->format($person->old_user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($person->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($person->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related People') ?></h4>
                <?php if (!empty($person->people)) : ?>
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
                        <?php foreach ($person->people as $people) : ?>
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
                <h4><?= __('Related Addresses') ?></h4>
                <?php if (!empty($person->addresses)) : ?>
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
                        <?php foreach ($person->addresses as $addresses) : ?>
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
                <h4><?= __('Related Images') ?></h4>
                <?php if (!empty($person->images)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Img File') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Alt') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th><?= __('Sku Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Old Image Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($person->images as $images) : ?>
                        <tr>
                            <td><?= h($images->id) ?></td>
                            <td><?= h($images->img_file) ?></td>
                            <td><?= h($images->title) ?></td>
                            <td><?= h($images->alt) ?></td>
                            <td><?= h($images->dir) ?></td>
                            <td><?= h($images->sku_id) ?></td>
                            <td><?= h($images->item_id) ?></td>
                            <td><?= h($images->person_id) ?></td>
                            <td><?= h($images->created) ?></td>
                            <td><?= h($images->modified) ?></td>
                            <td><?= h($images->old_image_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related People') ?></h4>
                <?php if (!empty($person->child_people)) : ?>
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
                        <?php foreach ($person->child_people as $childPeople) : ?>
                        <tr>
                            <td><?= h($childPeople->id) ?></td>
                            <td><?= h($childPeople->person_id) ?></td>
                            <td><?= h($childPeople->tenant_id) ?></td>
                            <td><?= h($childPeople->warehouse_id) ?></td>
                            <td><?= h($childPeople->first_name) ?></td>
                            <td><?= h($childPeople->last_name) ?></td>
                            <td><?= h($childPeople->role) ?></td>
                            <td><?= h($childPeople->parent_id) ?></td>
                            <td><?= h($childPeople->old_user_id) ?></td>
                            <td><?= h($childPeople->pronoun) ?></td>
                            <td><?= h($childPeople->cart_session) ?></td>
                            <td><?= h($childPeople->created) ?></td>
                            <td><?= h($childPeople->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $childPeople->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $childPeople->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $childPeople->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childPeople->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($person->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Verified') ?></th>
                            <th><?= __('Old User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($person->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->person_id) ?></td>
                            <td><?= h($users->verified) ?></td>
                            <td><?= h($users->old_user_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
