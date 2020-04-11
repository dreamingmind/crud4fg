<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShippingAccount[]|\Cake\Collection\CollectionInterface $shippingAccounts
 */
?>
<div class="shippingAccounts index content">
    <?= $this->Html->link(__('New Shipping Account'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Shipping Accounts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('shipper') ?></th>
                    <th><?= $this->Paginator->sort('account_number') ?></th>
                    <th><?= $this->Paginator->sort('tenant_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shippingAccounts as $shippingAccount): ?>
                <tr>
                    <td><?= $this->Number->format($shippingAccount->id) ?></td>
                    <td><?= h($shippingAccount->name) ?></td>
                    <td><?= h($shippingAccount->shipper) ?></td>
                    <td><?= h($shippingAccount->account_number) ?></td>
                    <td><?= $shippingAccount->has('tenant') ? $this->Html->link($shippingAccount->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $shippingAccount->tenant->id]) : '' ?></td>
                    <td><?= h($shippingAccount->created) ?></td>
                    <td><?= h($shippingAccount->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $shippingAccount->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shippingAccount->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shippingAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingAccount->id)]) ?>
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
