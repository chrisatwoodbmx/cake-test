<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PostNominal[]|\Cake\Collection\CollectionInterface $postNominals
 */
?>
<div class="postNominals index content">
    <?= $this->Html->link(__('New Post Nominal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Post Nominals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('post_nominal') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($postNominals as $postNominal): ?>
                <tr>
                    <td><?= $this->Number->format($postNominal->id) ?></td>
                    <td><?= h($postNominal->post_nominal) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $postNominal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postNominal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postNominal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postNominal->id)]) ?>
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
