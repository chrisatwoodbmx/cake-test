<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Content'), ['action' => 'edit', $content->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Content'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Content'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contents view content">
            <h3><?= h($content->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $content->has('profile') ? $this->Html->link($content->profile->id, ['controller' => 'Profiles', 'action' => 'view', $content->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Overview') ?></th>
                    <td><?= h($content->overview) ?></td>
                </tr>
                <tr>
                    <th><?= __('Research') ?></th>
                    <td><?= h($content->research) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teaching') ?></th>
                    <td><?= h($content->teaching) ?></td>
                </tr>
                <tr>
                    <th><?= __('Biography') ?></th>
                    <td><?= h($content->biography) ?></td>
                </tr>
                <tr>
                    <th><?= __('Honours') ?></th>
                    <td><?= h($content->honours) ?></td>
                </tr>
                <tr>
                    <th><?= __('Memberships') ?></th>
                    <td><?= h($content->memberships) ?></td>
                </tr>
                <tr>
                    <th><?= __('Academic Positions') ?></th>
                    <td><?= h($content->academic_positions) ?></td>
                </tr>
                <tr>
                    <th><?= __('Engagement') ?></th>
                    <td><?= h($content->engagement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Committees') ?></th>
                    <td><?= h($content->committees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Custom Tab Title') ?></th>
                    <td><?= $content->has('custom_tab_title') ? $this->Html->link($content->custom_tab_title->name, ['controller' => 'CustomTabTitles', 'action' => 'view', $content->custom_tab_title->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Custom Tab Content') ?></th>
                    <td><?= h($content->custom_tab_content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervision') ?></th>
                    <td><?= h($content->supervision) ?></td>
                </tr>
                <tr>
                    <th><?= __('Past Supervision') ?></th>
                    <td><?= h($content->past_supervision) ?></td>
                </tr>
                <tr>
                    <th><?= __('Thesis Title') ?></th>
                    <td><?= h($content->thesis_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Thesis Content') ?></th>
                    <td><?= h($content->thesis_content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funding') ?></th>
                    <td><?= h($content->funding) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funding Sources') ?></th>
                    <td><?= h($content->funding_sources) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($content->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
