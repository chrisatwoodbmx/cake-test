<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SpokenLanguage[]|\Cake\Collection\CollectionInterface $spokenLanguages
 */
?>
<div class="spokenLanguages index content">
    <?= $this->Html->link(__('New Spoken Language'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Spoken Languages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($spokenLanguages as $spokenLanguage): ?>
                <tr>
                    <td><?= $this->Number->format($spokenLanguage->id) ?></td>
                    <td><?= h($spokenLanguage->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $spokenLanguage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $spokenLanguage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $spokenLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spokenLanguage->id)]) ?>
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
