<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preference $preference
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Preference'), ['action' => 'edit', $preference->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Preference'), ['action' => 'delete', $preference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preference->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Preferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Preference'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preferences view content">
            <h3><?= h($preference->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $preference->has('user') ? $this->Html->link($preference->user->id, ['controller' => 'Users', 'action' => 'view', $preference->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($preference->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($preference->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($preference->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Prefs') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($preference->prefs)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
