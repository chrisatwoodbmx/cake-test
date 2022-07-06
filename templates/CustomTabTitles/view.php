<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomTabTitle $customTabTitle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Custom Tab Title'), ['action' => 'edit', $customTabTitle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Custom Tab Title'), ['action' => 'delete', $customTabTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customTabTitle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Custom Tab Titles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Custom Tab Title'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customTabTitles view content">
            <h3><?= h($customTabTitle->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($customTabTitle->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customTabTitle->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contents') ?></h4>
                <?php if (!empty($customTabTitle->contents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Overview') ?></th>
                            <th><?= __('Research') ?></th>
                            <th><?= __('Teaching') ?></th>
                            <th><?= __('Biography') ?></th>
                            <th><?= __('Honours') ?></th>
                            <th><?= __('Memberships') ?></th>
                            <th><?= __('Academic Positions') ?></th>
                            <th><?= __('Engagement') ?></th>
                            <th><?= __('Committees') ?></th>
                            <th><?= __('Custom Tab Title Id') ?></th>
                            <th><?= __('Custom Tab Content') ?></th>
                            <th><?= __('Supervision') ?></th>
                            <th><?= __('Past Supervision') ?></th>
                            <th><?= __('Thesis Title') ?></th>
                            <th><?= __('Thesis Content') ?></th>
                            <th><?= __('Funding') ?></th>
                            <th><?= __('Funding Sources') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customTabTitle->contents as $contents) : ?>
                        <tr>
                            <td><?= h($contents->id) ?></td>
                            <td><?= h($contents->profile_id) ?></td>
                            <td><?= h($contents->overview) ?></td>
                            <td><?= h($contents->research) ?></td>
                            <td><?= h($contents->teaching) ?></td>
                            <td><?= h($contents->biography) ?></td>
                            <td><?= h($contents->honours) ?></td>
                            <td><?= h($contents->memberships) ?></td>
                            <td><?= h($contents->academic_positions) ?></td>
                            <td><?= h($contents->engagement) ?></td>
                            <td><?= h($contents->committees) ?></td>
                            <td><?= h($contents->custom_tab_title_id) ?></td>
                            <td><?= h($contents->custom_tab_content) ?></td>
                            <td><?= h($contents->supervision) ?></td>
                            <td><?= h($contents->past_supervision) ?></td>
                            <td><?= h($contents->thesis_title) ?></td>
                            <td><?= h($contents->thesis_content) ?></td>
                            <td><?= h($contents->funding) ?></td>
                            <td><?= h($contents->funding_sources) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contents', 'action' => 'view', $contents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contents', 'action' => 'edit', $contents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contents', 'action' => 'delete', $contents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contents->id)]) ?>
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
