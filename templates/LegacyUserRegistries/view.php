<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUserRegistry $legacyUserRegistry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy User Registry'), ['action' => 'edit', $legacyUserRegistry->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy User Registry'), ['action' => 'delete', $legacyUserRegistry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUserRegistry->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy User Registries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy User Registry'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyUserRegistries view content">
            <h3><?= h($legacyUserRegistry->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $legacyUserRegistry->has('user') ? $this->Html->link($legacyUserRegistry->user->id, ['controller' => 'Users', 'action' => 'view', $legacyUserRegistry->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($legacyUserRegistry->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyUserRegistry->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Node Id') ?></th>
                    <td><?= $this->Number->format($legacyUserRegistry->node_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyUserRegistry->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyUserRegistry->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
