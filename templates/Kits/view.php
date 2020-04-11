<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kit $kit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kit'), ['action' => 'edit', $kit->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kit'), ['action' => 'delete', $kit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kit->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kit'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kits view content">
            <h3><?= h($kit->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Skus') ?></th>
                    <td><?= $kit->has('skus') ? $this->Html->link($kit->skus->name, ['controller' => 'Skus', 'action' => 'view', $kit->skus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($kit->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kit Id') ?></th>
                    <td><?= $this->Number->format($kit->kit_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($kit->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($kit->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($kit->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Kits') ?></h4>
                <?php if (!empty($kit->kits)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Kit Id') ?></th>
                            <th><?= __('Component Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($kit->kits as $kits) : ?>
                        <tr>
                            <td><?= h($kits->id) ?></td>
                            <td><?= h($kits->kit_id) ?></td>
                            <td><?= h($kits->component_id) ?></td>
                            <td><?= h($kits->quantity) ?></td>
                            <td><?= h($kits->created) ?></td>
                            <td><?= h($kits->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Kits', 'action' => 'view', $kits->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Kits', 'action' => 'edit', $kits->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Kits', 'action' => 'delete', $kits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kits->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
