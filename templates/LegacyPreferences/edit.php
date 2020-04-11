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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $legacyPreference->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $legacyPreference->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Legacy Preferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyPreferences form content">
            <?= $this->Form->create($legacyPreference) ?>
            <fieldset>
                <legend><?= __('Edit Legacy Preference') ?></legend>
                <?php
                    echo $this->Form->control('prefs');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
