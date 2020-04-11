<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyObserver $legacyObserver
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Observer'), ['action' => 'edit', $legacyObserver->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Observer'), ['action' => 'delete', $legacyObserver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyObserver->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Observers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Observer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyObservers view content">
            <h3><?= h($legacyObserver->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $legacyObserver->has('user') ? $this->Html->link($legacyObserver->user->id, ['controller' => 'Users', 'action' => 'view', $legacyObserver->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Observer Name') ?></th>
                    <td><?= h($legacyObserver->observer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($legacyObserver->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Name') ?></th>
                    <td><?= h($legacyObserver->user_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyObserver->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Observer Id') ?></th>
                    <td><?= $this->Number->format($legacyObserver->user_observer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyObserver->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyObserver->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Location') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($legacyObserver->location)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
