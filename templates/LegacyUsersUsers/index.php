<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUsersUser[]|\Cake\Collection\CollectionInterface $legacyUsersUsers
 */
?>
<div class="legacyUsersUsers index content">
    <?= $this->Html->link(__('New Legacy Users User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Users Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_managed_id') ?></th>
                    <th><?= $this->Paginator->sort('user_manager_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyUsersUsers as $legacyUsersUser): ?>
                <tr>
                    <td><?= $this->Number->format($legacyUsersUser->id) ?></td>
                    <td><?= h($legacyUsersUser->created) ?></td>
                    <td><?= h($legacyUsersUser->modified) ?></td>
                    <td><?= $this->Number->format($legacyUsersUser->user_managed_id) ?></td>
                    <td><?= $this->Number->format($legacyUsersUser->user_manager_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyUsersUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyUsersUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyUsersUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUsersUser->id)]) ?>
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
