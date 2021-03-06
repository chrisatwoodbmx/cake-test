<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialism[]|\Cake\Collection\CollectionInterface $specialisms
 */
?>
<div class="specialisms index content">
    <?= $this->Html->link(__('New Specialism'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Specialisms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('display') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specialisms as $specialism): ?>
                <tr>
                    <td><?= $this->Number->format($specialism->id) ?></td>
                    <td><?= h($specialism->name) ?></td>
                    <td><?= h($specialism->display) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $specialism->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $specialism->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $specialism->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialism->id)]) ?>
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
