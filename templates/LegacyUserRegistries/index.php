<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUserRegistry[]|\Cake\Collection\CollectionInterface $legacyUserRegistries
 */
?>
<div class="legacyUserRegistries index content">
    <?= $this->Html->link(__('New Legacy User Registry'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy User Registries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('node_id') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyUserRegistries as $legacyUserRegistry): ?>
                <tr>
                    <td><?= $this->Number->format($legacyUserRegistry->id) ?></td>
                    <td><?= h($legacyUserRegistry->created) ?></td>
                    <td><?= h($legacyUserRegistry->modified) ?></td>
                    <td><?= $legacyUserRegistry->has('user') ? $this->Html->link($legacyUserRegistry->user->id, ['controller' => 'Users', 'action' => 'view', $legacyUserRegistry->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($legacyUserRegistry->node_id) ?></td>
                    <td><?= h($legacyUserRegistry->model) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyUserRegistry->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyUserRegistry->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyUserRegistry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUserRegistry->id)]) ?>
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
