<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pronoun[]|\Cake\Collection\CollectionInterface $pronouns
 */
?>
<div class="pronouns index content">
    <?= $this->Html->link(__('New Pronoun'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pronouns') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pronoun') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pronouns as $pronoun): ?>
                <tr>
                    <td><?= $this->Number->format($pronoun->id) ?></td>
                    <td><?= h($pronoun->pronoun) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pronoun->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pronoun->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pronoun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pronoun->id)]) ?>
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
