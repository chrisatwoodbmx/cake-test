<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobTitle[]|\Cake\Collection\CollectionInterface $jobTitles
 */
?>
<div class="jobTitles index content">
    <?= $this->Html->link(__('New Job Title'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Job Titles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('job_title') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobTitles as $jobTitle): ?>
                <tr>
                    <td><?= $this->Number->format($jobTitle->id) ?></td>
                    <td><?= h($jobTitle->job_title) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jobTitle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobTitle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jobTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobTitle->id)]) ?>
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
