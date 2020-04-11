<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TenantContract $tenantContract
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tenant Contract'), ['action' => 'edit', $tenantContract->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tenant Contract'), ['action' => 'delete', $tenantContract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenantContract->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tenant Contracts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tenant Contract'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tenantContracts view content">
            <h3><?= h($tenantContract->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tenant') ?></th>
                    <td><?= $tenantContract->has('tenant') ? $this->Html->link($tenantContract->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $tenantContract->tenant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rental Unit') ?></th>
                    <td><?= h($tenantContract->rental_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tenantContract->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monthly Service Fee') ?></th>
                    <td><?= $this->Number->format($tenantContract->monthly_service_fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rental Qty') ?></th>
                    <td><?= $this->Number->format($tenantContract->rental_qty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rental Price') ?></th>
                    <td><?= $this->Number->format($tenantContract->rental_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Pull Charge') ?></th>
                    <td><?= $this->Number->format($tenantContract->order_pull_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Additional Item Charge') ?></th>
                    <td><?= $this->Number->format($tenantContract->order_additional_item_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Replen Charge') ?></th>
                    <td><?= $this->Number->format($tenantContract->replen_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Replen Additional Item Charge') ?></th>
                    <td><?= $this->Number->format($tenantContract->replen_additional_item_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unload Hourly') ?></th>
                    <td><?= $this->Number->format($tenantContract->unload_hourly) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tenantContract->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tenantContract->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
