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
            <?= $this->Html->link(__('List Preferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preferences form content">
            <?= $this->Form->create($preference) ?>
            <fieldset>
                <legend><?= __('Add Preference') ?></legend>
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
