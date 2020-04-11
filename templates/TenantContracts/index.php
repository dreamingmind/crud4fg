<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TenantContract[]|\Cake\Collection\CollectionInterface $tenantContracts
 */
?>
<div class="tenantContracts index content">
    <?= $this->Html->link(__('New Tenant Contract'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tenant Contracts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tenant_id') ?></th>
                    <th><?= $this->Paginator->sort('monthly_service_fee') ?></th>
                    <th><?= $this->Paginator->sort('rental_qty') ?></th>
                    <th><?= $this->Paginator->sort('rental_unit') ?></th>
                    <th><?= $this->Paginator->sort('rental_price') ?></th>
                    <th><?= $this->Paginator->sort('order_pull_charge') ?></th>
                    <th><?= $this->Paginator->sort('order_additional_item_charge') ?></th>
                    <th><?= $this->Paginator->sort('replen_charge') ?></th>
                    <th><?= $this->Paginator->sort('replen_additional_item_charge') ?></th>
                    <th><?= $this->Paginator->sort('unload_hourly') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tenantContracts as $tenantContract): ?>
                <tr>
                    <td><?= $this->Number->format($tenantContract->id) ?></td>
                    <td><?= $tenantContract->has('tenant') ? $this->Html->link($tenantContract->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $tenantContract->tenant->id]) : '' ?></td>
                    <td><?= $this->Number->format($tenantContract->monthly_service_fee) ?></td>
                    <td><?= $this->Number->format($tenantContract->rental_qty) ?></td>
                    <td><?= h($tenantContract->rental_unit) ?></td>
                    <td><?= $this->Number->format($tenantContract->rental_price) ?></td>
                    <td><?= $this->Number->format($tenantContract->order_pull_charge) ?></td>
                    <td><?= $this->Number->format($tenantContract->order_additional_item_charge) ?></td>
                    <td><?= $this->Number->format($tenantContract->replen_charge) ?></td>
                    <td><?= $this->Number->format($tenantContract->replen_additional_item_charge) ?></td>
                    <td><?= $this->Number->format($tenantContract->unload_hourly) ?></td>
                    <td><?= h($tenantContract->created) ?></td>
                    <td><?= h($tenantContract->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tenantContract->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tenantContract->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tenantContract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenantContract->id)]) ?>
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
