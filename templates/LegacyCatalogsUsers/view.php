<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCatalogsUser $legacyCatalogsUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Catalogs User'), ['action' => 'edit', $legacyCatalogsUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Catalogs User'), ['action' => 'delete', $legacyCatalogsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyCatalogsUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Catalogs Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Catalogs User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyCatalogsUsers view content">
            <h3><?= h($legacyCatalogsUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $legacyCatalogsUser->has('user') ? $this->Html->link($legacyCatalogsUser->user->id, ['controller' => 'Users', 'action' => 'view', $legacyCatalogsUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyCatalogsUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Catalog Id') ?></th>
                    <td><?= $this->Number->format($legacyCatalogsUser->catalog_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyCatalogsUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyCatalogsUser->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
