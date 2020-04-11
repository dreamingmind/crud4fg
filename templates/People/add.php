<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List People'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="people form content">
            <?= $this->Form->create($person) ?>
            <fieldset>
                <legend><?= __('Add Person') ?></legend>
                <?php
                    echo $this->Form->control('person_id');
                    echo $this->Form->control('tenant_id', ['options' => $tenants, 'empty' => true]);
                    echo $this->Form->control('warehouse_id', ['options' => $warehouses, 'empty' => true]);
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('role');
                    echo $this->Form->control('parent_id', ['options' => $parentPeople]);
                    echo $this->Form->control('old_user_id');
                    echo $this->Form->control('pronoun');
                    echo $this->Form->control('cart_session');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
