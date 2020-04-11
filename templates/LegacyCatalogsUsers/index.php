<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCatalogsUser[]|\Cake\Collection\CollectionInterface $legacyCatalogsUsers
 */
?>
<div class="legacyCatalogsUsers index content">
    <?= $this->Html->link(__('New Legacy Catalogs User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Catalogs Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('catalog_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyCatalogsUsers as $legacyCatalogsUser): ?>
                <tr>
                    <td><?= $this->Number->format($legacyCatalogsUser->id) ?></td>
                    <td><?= h($legacyCatalogsUser->created) ?></td>
                    <td><?= h($legacyCatalogsUser->modified) ?></td>
                    <td><?= $this->Number->format($legacyCatalogsUser->catalog_id) ?></td>
                    <td><?= $legacyCatalogsUser->has('user') ? $this->Html->link($legacyCatalogsUser->user->id, ['controller' => 'Users', 'action' => 'view', $legacyCatalogsUser->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyCatalogsUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyCatalogsUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyCatalogsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCatalogsUser->id)]) ?>
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
