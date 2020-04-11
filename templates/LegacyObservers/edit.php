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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $legacyObserver->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $legacyObserver->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Legacy Observers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyObservers form content">
            <?= $this->Form->create($legacyObserver) ?>
            <fieldset>
                <legend><?= __('Edit Legacy Observer') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('user_observer_id');
                    echo $this->Form->control('observer_name');
                    echo $this->Form->control('type');
                    echo $this->Form->control('user_name');
                    echo $this->Form->control('location');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
