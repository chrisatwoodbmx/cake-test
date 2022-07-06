<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content[]|\Cake\Collection\CollectionInterface $contents
 */
?>
<div class="contents index content">
    <?= $this->Html->link(__('New Content'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th><?= $this->Paginator->sort('overview') ?></th>
                    <th><?= $this->Paginator->sort('research') ?></th>
                    <th><?= $this->Paginator->sort('teaching') ?></th>
                    <th><?= $this->Paginator->sort('biography') ?></th>
                    <th><?= $this->Paginator->sort('honours') ?></th>
                    <th><?= $this->Paginator->sort('memberships') ?></th>
                    <th><?= $this->Paginator->sort('academic_positions') ?></th>
                    <th><?= $this->Paginator->sort('engagement') ?></th>
                    <th><?= $this->Paginator->sort('committees') ?></th>
                    <th><?= $this->Paginator->sort('custom_tab_title_id') ?></th>
                    <th><?= $this->Paginator->sort('custom_tab_content') ?></th>
                    <th><?= $this->Paginator->sort('supervision') ?></th>
                    <th><?= $this->Paginator->sort('past_supervision') ?></th>
                    <th><?= $this->Paginator->sort('thesis_title') ?></th>
                    <th><?= $this->Paginator->sort('thesis_content') ?></th>
                    <th><?= $this->Paginator->sort('funding') ?></th>
                    <th><?= $this->Paginator->sort('funding_sources') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contents as $content): ?>
                <tr>
                    <td><?= $this->Number->format($content->id) ?></td>
                    <td><?= $content->has('profile') ? $this->Html->link($content->profile->id, ['controller' => 'Profiles', 'action' => 'view', $content->profile->id]) : '' ?></td>
                    <td><?= h($content->overview) ?></td>
                    <td><?= h($content->research) ?></td>
                    <td><?= h($content->teaching) ?></td>
                    <td><?= h($content->biography) ?></td>
                    <td><?= h($content->honours) ?></td>
                    <td><?= h($content->memberships) ?></td>
                    <td><?= h($content->academic_positions) ?></td>
                    <td><?= h($content->engagement) ?></td>
                    <td><?= h($content->committees) ?></td>
                    <td><?= $content->has('custom_tab_title') ? $this->Html->link($content->custom_tab_title->name, ['controller' => 'CustomTabTitles', 'action' => 'view', $content->custom_tab_title->id]) : '' ?></td>
                    <td><?= h($content->custom_tab_content) ?></td>
                    <td><?= h($content->supervision) ?></td>
                    <td><?= h($content->past_supervision) ?></td>
                    <td><?= h($content->thesis_title) ?></td>
                    <td><?= h($content->thesis_content) ?></td>
                    <td><?= h($content->funding) ?></td>
                    <td><?= h($content->funding_sources) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $content->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $content->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]) ?>
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
