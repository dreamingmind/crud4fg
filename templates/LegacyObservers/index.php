<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyObserver[]|\Cake\Collection\CollectionInterface $legacyObservers
 */
?>
<div class="legacyObservers index content">
    <?= $this->Html->link(__('New Legacy Observer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Observers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('user_observer_id') ?></th>
                    <th><?= $this->Paginator->sort('observer_name') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('user_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyObservers as $legacyObserver): ?>
                <tr>
                    <td><?= $this->Number->format($legacyObserver->id) ?></td>
                    <td><?= $legacyObserver->has('user') ? $this->Html->link($legacyObserver->user->id, ['controller' => 'Users', 'action' => 'view', $legacyObserver->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($legacyObserver->user_observer_id) ?></td>
                    <td><?= h($legacyObserver->observer_name) ?></td>
                    <td><?= h($legacyObserver->type) ?></td>
                    <td><?= h($legacyObserver->user_name) ?></td>
                    <td><?= h($legacyObserver->created) ?></td>
                    <td><?= h($legacyObserver->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyObserver->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyObserver->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyObserver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyObserver->id)]) ?>
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
