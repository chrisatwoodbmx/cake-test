<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpokenLanguage[]|\Cake\Collection\CollectionInterface $mappingSpokenLanguages
 */
?>
<div class="mappingSpokenLanguages index content">
    <?= $this->Html->link(__('New Mapping Spoken Language'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Spoken Languages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('spoken_language_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingSpokenLanguages as $mappingSpokenLanguage): ?>
                <tr>
                    <td><?= $this->Number->format($mappingSpokenLanguage->id) ?></td>
                    <td><?= $mappingSpokenLanguage->has('spoken_language') ? $this->Html->link($mappingSpokenLanguage->spoken_language->name, ['controller' => 'SpokenLanguages', 'action' => 'view', $mappingSpokenLanguage->spoken_language->id]) : '' ?></td>
                    <td><?= $mappingSpokenLanguage->has('profile') ? $this->Html->link($mappingSpokenLanguage->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingSpokenLanguage->profile->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingSpokenLanguage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingSpokenLanguage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingSpokenLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpokenLanguage->id)]) ?>
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
