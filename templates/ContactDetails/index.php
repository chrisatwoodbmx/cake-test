<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactDetail[]|\Cake\Collection\CollectionInterface $contactDetails
 */
?>
<div class="contactDetails index content">
    <?= $this->Html->link(__('New Contact Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contact Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telephone') ?></th>
                    <th><?= $this->Paginator->sort('personal_website') ?></th>
                    <th><?= $this->Paginator->sort('blog') ?></th>
                    <th><?= $this->Paginator->sort('linkedin') ?></th>
                    <th><?= $this->Paginator->sort('twitter_username') ?></th>
                    <th><?= $this->Paginator->sort('google_scholar') ?></th>
                    <th><?= $this->Paginator->sort('acadamia') ?></th>
                    <th><?= $this->Paginator->sort('research_gate') ?></th>
                    <th><?= $this->Paginator->sort('orcid') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactDetails as $contactDetail): ?>
                <tr>
                    <td><?= $this->Number->format($contactDetail->id) ?></td>
                    <td><?= $contactDetail->has('profile') ? $this->Html->link($contactDetail->profile->id, ['controller' => 'Profiles', 'action' => 'view', $contactDetail->profile->id]) : '' ?></td>
                    <td><?= h($contactDetail->email) ?></td>
                    <td><?= h($contactDetail->telephone) ?></td>
                    <td><?= h($contactDetail->personal_website) ?></td>
                    <td><?= h($contactDetail->blog) ?></td>
                    <td><?= h($contactDetail->linkedin) ?></td>
                    <td><?= h($contactDetail->twitter_username) ?></td>
                    <td><?= h($contactDetail->google_scholar) ?></td>
                    <td><?= h($contactDetail->acadamia) ?></td>
                    <td><?= h($contactDetail->research_gate) ?></td>
                    <td><?= h($contactDetail->orcid) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contactDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactDetail->id)]) ?>
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
