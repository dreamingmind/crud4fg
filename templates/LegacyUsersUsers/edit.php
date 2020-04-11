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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $legacyUsersUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUsersUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Legacy Users Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyUsersUsers form content">
            <?= $this->Form->create($legacyUsersUser) ?>
            <fieldset>
                <legend><?= __('Edit Legacy Users User') ?></legend>
                <?php
                    echo $this->Form->control('user_managed_id');
                    echo $this->Form->control('user_manager_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
