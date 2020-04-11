<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyPreference $legacyPreference
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy Preference'), ['action' => 'edit', $legacyPreference->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy Preference'), ['action' => 'delete', $legacyPreference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyPreference->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Preferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy Preference'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyPreferences view content">
            <h3><?= h($legacyPreference->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $legacyPreference->has('user') ? $this->Html->link($legacyPreference->user->id, ['controller' => 'Users', 'action' => 'view', $legacyPreference->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyPreference->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyPreference->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyPreference->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Prefs') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($legacyPreference->prefs)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
