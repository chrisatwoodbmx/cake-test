<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expertise[]|\Cake\Collection\CollectionInterface $expertises
 */
?>
<div class="expertises index content">
    <?= $this->Html->link(__('New Expertise'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Expertises') ?></h3>
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
                <?php foreach ($expertises as $expertise): ?>
                <tr>
                    <td><?= $this->Number->format($expertise->id) ?></td>
                    <td><?= h($expertise->name) ?></td>
                    <td><?= h($expertise->display) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $expertise->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expertise->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expertise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expertise->id)]) ?>
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
