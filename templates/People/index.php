<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person[]|\Cake\Collection\CollectionInterface $people
 */
?>
<div class="people index content">
    <?= $this->Html->link(__('New Person'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('People') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('person_id') ?></th>
                    <th><?= $this->Paginator->sort('tenant_id') ?></th>
                    <th><?= $this->Paginator->sort('warehouse_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('old_user_id') ?></th>
                    <th><?= $this->Paginator->sort('pronoun') ?></th>
                    <th><?= $this->Paginator->sort('cart_session') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $person): ?>
                <tr>
                    <td><?= $this->Number->format($person->id) ?></td>
                    <td><?= $this->Number->format($person->person_id) ?></td>
                    <td><?= $person->has('tenant') ? $this->Html->link($person->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $person->tenant->id]) : '' ?></td>
                    <td><?= $person->has('warehouse') ? $this->Html->link($person->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $person->warehouse->id]) : '' ?></td>
                    <td><?= h($person->first_name) ?></td>
                    <td><?= h($person->last_name) ?></td>
                    <td><?= h($person->role) ?></td>
                    <td><?= $person->has('parent_person') ? $this->Html->link($person->parent_person->id, ['controller' => 'People', 'action' => 'view', $person->parent_person->id]) : '' ?></td>
                    <td><?= $this->Number->format($person->old_user_id) ?></td>
                    <td><?= h($person->pronoun) ?></td>
                    <td><?= h($person->cart_session) ?></td>
                    <td><?= h($person->created) ?></td>
                    <td><?= h($person->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
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
