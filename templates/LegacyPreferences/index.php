<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyPreference[]|\Cake\Collection\CollectionInterface $legacyPreferences
 */
?>
<div class="legacyPreferences index content">
    <?= $this->Html->link(__('New Legacy Preference'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Preferences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyPreferences as $legacyPreference): ?>
                <tr>
                    <td><?= $this->Number->format($legacyPreference->id) ?></td>
                    <td><?= $legacyPreference->has('user') ? $this->Html->link($legacyPreference->user->id, ['controller' => 'Users', 'action' => 'view', $legacyPreference->user->id]) : '' ?></td>
                    <td><?= h($legacyPreference->created) ?></td>
                    <td><?= h($legacyPreference->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyPreference->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyPreference->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyPreference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyPreference->id)]) ?>
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
