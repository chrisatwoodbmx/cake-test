<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingJobTitle $mappingJobTitle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Job Title'), ['action' => 'edit', $mappingJobTitle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Job Title'), ['action' => 'delete', $mappingJobTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingJobTitle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Job Titles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Job Title'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingJobTitles view content">
            <h3><?= h($mappingJobTitle->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job Title') ?></th>
                    <td><?= $mappingJobTitle->has('job_title') ? $this->Html->link($mappingJobTitle->job_title->id, ['controller' => 'JobTitles', 'action' => 'view', $mappingJobTitle->job_title->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingJobTitle->has('profile') ? $this->Html->link($mappingJobTitle->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingJobTitle->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingJobTitle->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
