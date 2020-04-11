<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUser[]|\Cake\Collection\CollectionInterface $legacyUsers
 */
?>
<div class="legacyUsers index content">
    <?= $this->Html->link(__('New Legacy User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legacy Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('ancestor_list') ?></th>
                    <th><?= $this->Paginator->sort('lock') ?></th>
                    <th><?= $this->Paginator->sort('sequence') ?></th>
                    <th><?= $this->Paginator->sort('folder') ?></th>
                    <th><?= $this->Paginator->sort('session_change') ?></th>
                    <th><?= $this->Paginator->sort('verified') ?></th>
                    <th><?= $this->Paginator->sort('logged_in') ?></th>
                    <th><?= $this->Paginator->sort('cart_session') ?></th>
                    <th><?= $this->Paginator->sort('use_budget') ?></th>
                    <th><?= $this->Paginator->sort('budget') ?></th>
                    <th><?= $this->Paginator->sort('use_item_budget') ?></th>
                    <th><?= $this->Paginator->sort('item_budget') ?></th>
                    <th><?= $this->Paginator->sort('rollover_item_budget') ?></th>
                    <th><?= $this->Paginator->sort('rollover_budget') ?></th>
                    <th><?= $this->Paginator->sort('use_item_limit_budget') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legacyUsers as $legacyUser): ?>
                <tr>
                    <td><?= $this->Number->format($legacyUser->id) ?></td>
                    <td><?= h($legacyUser->email) ?></td>
                    <td><?= h($legacyUser->password) ?></td>
                    <td><?= h($legacyUser->first_name) ?></td>
                    <td><?= h($legacyUser->last_name) ?></td>
                    <td><?= $this->Number->format($legacyUser->active) ?></td>
                    <td><?= h($legacyUser->username) ?></td>
                    <td><?= h($legacyUser->role) ?></td>
                    <td><?= $legacyUser->has('parent_legacy_user') ? $this->Html->link($legacyUser->parent_legacy_user->id, ['controller' => 'LegacyUsers', 'action' => 'view', $legacyUser->parent_legacy_user->id]) : '' ?></td>
                    <td><?= h($legacyUser->ancestor_list) ?></td>
                    <td><?= $this->Number->format($legacyUser->lock) ?></td>
                    <td><?= $this->Number->format($legacyUser->sequence) ?></td>
                    <td><?= h($legacyUser->folder) ?></td>
                    <td><?= h($legacyUser->session_change) ?></td>
                    <td><?= h($legacyUser->verified) ?></td>
                    <td><?= $this->Number->format($legacyUser->logged_in) ?></td>
                    <td><?= h($legacyUser->cart_session) ?></td>
                    <td><?= h($legacyUser->use_budget) ?></td>
                    <td><?= $this->Number->format($legacyUser->budget) ?></td>
                    <td><?= h($legacyUser->use_item_budget) ?></td>
                    <td><?= $this->Number->format($legacyUser->item_budget) ?></td>
                    <td><?= h($legacyUser->rollover_item_budget) ?></td>
                    <td><?= h($legacyUser->rollover_budget) ?></td>
                    <td><?= h($legacyUser->use_item_limit_budget) ?></td>
                    <td><?= h($legacyUser->created) ?></td>
                    <td><?= h($legacyUser->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legacyUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legacyUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legacyUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUser->id)]) ?>
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
