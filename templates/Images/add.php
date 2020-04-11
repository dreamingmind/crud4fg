<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="images form content">
            <?= $this->Form->create($image) ?>
            <fieldset>
                <legend><?= __('Add Image') ?></legend>
                <?php
                    echo $this->Form->control('img_file');
                    echo $this->Form->control('title');
                    echo $this->Form->control('alt');
                    echo $this->Form->control('dir');
                    echo $this->Form->control('sku_id', ['options' => $skus, 'empty' => true]);
                    echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
                    echo $this->Form->control('person_id', ['options' => $people, 'empty' => true]);
                    echo $this->Form->control('old_image_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
