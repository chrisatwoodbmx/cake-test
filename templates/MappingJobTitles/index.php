<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingJobTitle[]|\Cake\Collection\CollectionInterface $mappingJobTitles
 */
?>
<div class="mappingJobTitles index content">
    <?= $this->Html->link(__('New Mapping Job Title'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Job Titles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('job_title_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingJobTitles as $mappingJobTitle): ?>
                <tr>
                    <td><?= $this->Number->format($mappingJobTitle->id) ?></td>
                    <td><?= $mappingJobTitle->has('job_title') ? $this->Html->link($mappingJobTitle->job_title->id, ['controller' => 'JobTitles', 'action' => 'view', $mappingJobTitle->job_title->id]) : '' ?></td>
                    <td><?= $mappingJobTitle->has('profile') ? $this->Html->link($mappingJobTitle->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingJobTitle->profile->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingJobTitle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingJobTitle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingJobTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingJobTitle->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
