<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Com[]|\Cake\Collection\CollectionInterface $coms
 */
?>
<div class="coms index content">
    <?= $this->Html->link(__('New Com'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('address_id') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('channel') ?></th>
                    <th><?= $this->Paginator->sort('primary') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('old_address_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coms as $com): ?>
                <tr>
                    <td><?= $this->Number->format($com->id) ?></td>
                    <td><?= $com->has('address') ? $this->Html->link($com->address->name, ['controller' => 'Addresses', 'action' => 'view', $com->address->id]) : '' ?></td>
                    <td><?= h($com->type) ?></td>
                    <td><?= h($com->channel) ?></td>
                    <td><?= $this->Number->format($com->primary) ?></td>
                    <td><?= h($com->created) ?></td>
                    <td><?= h($com->modified) ?></td>
                    <td><?= $this->Number->format($com->old_address_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $com->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $com->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $com->id], ['confirm' => __('Are you sure you want to delete # {0}?', $com->id)]) ?>
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
