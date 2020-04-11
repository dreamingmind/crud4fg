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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $image->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="images form content">
            <?= $this->Form->create($image) ?>
            <fieldset>
                <legend><?= __('Edit Image') ?></legend>
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
