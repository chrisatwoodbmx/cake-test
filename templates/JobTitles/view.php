<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobTitle $jobTitle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Job Title'), ['action' => 'edit', $jobTitle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Job Title'), ['action' => 'delete', $jobTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobTitle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Job Titles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Job Title'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jobTitles view content">
            <h3><?= h($jobTitle->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job Title') ?></th>
                    <td><?= h($jobTitle->job_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($jobTitle->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Job Titles') ?></h4>
                <?php if (!empty($jobTitle->mapping_job_titles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Job Title Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($jobTitle->mapping_job_titles as $mappingJobTitles) : ?>
                        <tr>
                            <td><?= h($mappingJobTitles->id) ?></td>
                            <td><?= h($mappingJobTitles->job_title_id) ?></td>
                            <td><?= h($mappingJobTitles->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingJobTitles', 'action' => 'view', $mappingJobTitles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingJobTitles', 'action' => 'edit', $mappingJobTitles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingJobTitles', 'action' => 'delete', $mappingJobTitles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingJobTitles->id)]) ?>
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
