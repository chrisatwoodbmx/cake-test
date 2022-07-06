<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $spatialRefSys
 */
?>
<div class="spatialRefSys index content">
    <?= $this->Html->link(__('New Spatial Ref Sy'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Spatial Ref Sys') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('srid') ?></th>
                    <th><?= $this->Paginator->sort('auth_name') ?></th>
                    <th><?= $this->Paginator->sort('auth_srid') ?></th>
                    <th><?= $this->Paginator->sort('srtext') ?></th>
                    <th><?= $this->Paginator->sort('proj4text') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($spatialRefSys as $spatialRefSy): ?>
                <tr>
                    <td><?= $this->Number->format($spatialRefSy->srid) ?></td>
                    <td><?= h($spatialRefSy->auth_name) ?></td>
                    <td><?= $spatialRefSy->auth_srid === null ? '' : $this->Number->format($spatialRefSy->auth_srid) ?></td>
                    <td><?= h($spatialRefSy->srtext) ?></td>
                    <td><?= h($spatialRefSy->proj4text) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $spatialRefSy->srid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $spatialRefSy->srid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $spatialRefSy->srid], ['confirm' => __('Are you sure you want to delete # {0}?', $spatialRefSy->srid)]) ?>
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
