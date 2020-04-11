<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Warehouse $warehouse
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Warehouse'), ['action' => 'edit', $warehouse->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Warehouse'), ['action' => 'delete', $warehouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Warehouses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Warehouse'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="warehouses view content">
            <h3><?= h($warehouse->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($warehouse->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($warehouse->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($warehouse->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($warehouse->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($warehouse->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($warehouse->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related People') ?></h4>
                <?php if (!empty($warehouse->people)) : ?>
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
                        <?php foreach ($warehouse->people as $people) : ?>
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
                <h4><?= __('Related Tenants') ?></h4>
                <?php if (!empty($warehouse->tenants)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Warehouse Id') ?></th>
                            <th><?= __('Customer Code') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Old User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($warehouse->tenants as $tenants) : ?>
                        <tr>
                            <td><?= h($tenants->id) ?></td>
                            <td><?= h($tenants->name) ?></td>
                            <td><?= h($tenants->warehouse_id) ?></td>
                            <td><?= h($tenants->customer_code) ?></td>
                            <td><?= h($tenants->token) ?></td>
                            <td><?= h($tenants->active) ?></td>
                            <td><?= h($tenants->created) ?></td>
                            <td><?= h($tenants->modified) ?></td>
                            <td><?= h($tenants->old_user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tenants', 'action' => 'view', $tenants->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tenants', 'action' => 'edit', $tenants->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tenants', 'action' => 'delete', $tenants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenants->id)]) ?>
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
