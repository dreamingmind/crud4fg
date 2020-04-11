<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUsersUser $legacyUsersUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Users User'), ['action' => 'edit', $legacyUsersUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Users User'), ['action' => 'delete', $legacyUsersUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUsersUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Users Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Users User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyUsersUsers view content">
            <h3><?= h($legacyUsersUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyUsersUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Managed Id') ?></th>
                    <td><?= $this->Number->format($legacyUsersUser->user_managed_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Manager Id') ?></th>
                    <td><?= $this->Number->format($legacyUsersUser->user_manager_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyUsersUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyUsersUser->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
