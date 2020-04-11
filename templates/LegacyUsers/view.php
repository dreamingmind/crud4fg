<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUser $legacyUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Legacy User'), ['action' => 'edit', $legacyUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legacy User'), ['action' => 'delete', $legacyUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $legacyUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legacy Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legacy User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyUsers view content">
            <h3><?= h($legacyUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($legacyUser->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($legacyUser->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($legacyUser->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($legacyUser->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($legacyUser->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($legacyUser->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parent Legacy User') ?></th>
                    <td><?= $legacyUser->has('parent_legacy_user') ? $this->Html->link($legacyUser->parent_legacy_user->id, ['controller' => 'LegacyUsers', 'action' => 'view', $legacyUser->parent_legacy_user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ancestor List') ?></th>
                    <td><?= h($legacyUser->ancestor_list) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cart Session') ?></th>
                    <td><?= h($legacyUser->cart_session) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($legacyUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $this->Number->format($legacyUser->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lock') ?></th>
                    <td><?= $this->Number->format($legacyUser->lock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence') ?></th>
                    <td><?= $this->Number->format($legacyUser->sequence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logged In') ?></th>
                    <td><?= $this->Number->format($legacyUser->logged_in) ?></td>
                </tr>
                <tr>
                    <th><?= __('Budget') ?></th>
                    <td><?= $this->Number->format($legacyUser->budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Budget') ?></th>
                    <td><?= $this->Number->format($legacyUser->item_budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($legacyUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($legacyUser->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folder') ?></th>
                    <td><?= $legacyUser->folder ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Session Change') ?></th>
                    <td><?= $legacyUser->session_change ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Verified') ?></th>
                    <td><?= $legacyUser->verified ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Use Budget') ?></th>
                    <td><?= $legacyUser->use_budget ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Use Item Budget') ?></th>
                    <td><?= $legacyUser->use_item_budget ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Rollover Item Budget') ?></th>
                    <td><?= $legacyUser->rollover_item_budget ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Rollover Budget') ?></th>
                    <td><?= $legacyUser->rollover_budget ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Use Item Limit Budget') ?></th>
                    <td><?= $legacyUser->use_item_limit_budget ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($legacyUser->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Verified') ?></th>
                            <th><?= __('Old User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($legacyUser->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->person_id) ?></td>
                            <td><?= h($users->verified) ?></td>
                            <td><?= h($users->old_user_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Legacy Users') ?></h4>
                <?php if (!empty($legacyUser->child_legacy_users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Ancestor List') ?></th>
                            <th><?= __('Lock') ?></th>
                            <th><?= __('Sequence') ?></th>
                            <th><?= __('Folder') ?></th>
                            <th><?= __('Session Change') ?></th>
                            <th><?= __('Verified') ?></th>
                            <th><?= __('Logged In') ?></th>
                            <th><?= __('Cart Session') ?></th>
                            <th><?= __('Use Budget') ?></th>
                            <th><?= __('Budget') ?></th>
                            <th><?= __('Use Item Budget') ?></th>
                            <th><?= __('Item Budget') ?></th>
                            <th><?= __('Rollover Item Budget') ?></th>
                            <th><?= __('Rollover Budget') ?></th>
                            <th><?= __('Use Item Limit Budget') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($legacyUser->child_legacy_users as $childLegacyUsers) : ?>
                        <tr>
                            <td><?= h($childLegacyUsers->id) ?></td>
                            <td><?= h($childLegacyUsers->email) ?></td>
                            <td><?= h($childLegacyUsers->password) ?></td>
                            <td><?= h($childLegacyUsers->first_name) ?></td>
                            <td><?= h($childLegacyUsers->last_name) ?></td>
                            <td><?= h($childLegacyUsers->active) ?></td>
                            <td><?= h($childLegacyUsers->username) ?></td>
                            <td><?= h($childLegacyUsers->role) ?></td>
                            <td><?= h($childLegacyUsers->parent_id) ?></td>
                            <td><?= h($childLegacyUsers->ancestor_list) ?></td>
                            <td><?= h($childLegacyUsers->lock) ?></td>
                            <td><?= h($childLegacyUsers->sequence) ?></td>
                            <td><?= h($childLegacyUsers->folder) ?></td>
                            <td><?= h($childLegacyUsers->session_change) ?></td>
                            <td><?= h($childLegacyUsers->verified) ?></td>
                            <td><?= h($childLegacyUsers->logged_in) ?></td>
                            <td><?= h($childLegacyUsers->cart_session) ?></td>
                            <td><?= h($childLegacyUsers->use_budget) ?></td>
                            <td><?= h($childLegacyUsers->budget) ?></td>
                            <td><?= h($childLegacyUsers->use_item_budget) ?></td>
                            <td><?= h($childLegacyUsers->item_budget) ?></td>
                            <td><?= h($childLegacyUsers->rollover_item_budget) ?></td>
                            <td><?= h($childLegacyUsers->rollover_budget) ?></td>
                            <td><?= h($childLegacyUsers->use_item_limit_budget) ?></td>
                            <td><?= h($childLegacyUsers->created) ?></td>
                            <td><?= h($childLegacyUsers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LegacyUsers', 'action' => 'view', $childLegacyUsers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LegacyUsers', 'action' => 'edit', $childLegacyUsers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LegacyUsers', 'action' => 'delete', $childLegacyUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childLegacyUsers->id)]) ?>
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
