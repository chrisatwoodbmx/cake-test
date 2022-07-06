<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="profiles index content">
    <?= $this->Html->link(__('New Profile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Profiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('profile_type') ?></th>
                    <th><?= $this->Paginator->sort('visibility_id') ?></th>
                    <th><?= $this->Paginator->sort('title_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('middle_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('known_as') ?></th>
                    <th><?= $this->Paginator->sort('is_media_expert') ?></th>
                    <th><?= $this->Paginator->sort('is_welsh_speaker') ?></th>
                    <th><?= $this->Paginator->sort('available_supervise') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('inactive') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('post_nominal_id') ?></th>
                    <th><?= $this->Paginator->sort('pronoun_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profiles as $profile): ?>
                <tr>
                    <td><?= $this->Number->format($profile->id) ?></td>
                    <td><?= h($profile->uuid) ?></td>
                    <td><?= h($profile->username) ?></td>
                    <td><?= $this->Number->format($profile->profile_type) ?></td>
                    <td><?= $this->Number->format($profile->visibility_id) ?></td>
                    <td><?= $profile->has('title') ? $this->Html->link($profile->title->title, ['controller' => 'Titles', 'action' => 'view', $profile->title->id]) : '' ?></td>
                    <td><?= h($profile->first_name) ?></td>
                    <td><?= h($profile->middle_name) ?></td>
                    <td><?= h($profile->last_name) ?></td>
                    <td><?= h($profile->known_as) ?></td>
                    <td><?= h($profile->is_media_expert) ?></td>
                    <td><?= h($profile->is_welsh_speaker) ?></td>
                    <td><?= h($profile->available_supervise) ?></td>
                    <td><?= h($profile->archived) ?></td>
                    <td><?= h($profile->inactive) ?></td>
                    <td><?= h($profile->created) ?></td>
                    <td><?= $profile->has('post_nominal') ? $this->Html->link($profile->post_nominal->id, ['controller' => 'PostNominals', 'action' => 'view', $profile->post_nominal->id]) : '' ?></td>
                    <td><?= $profile->has('pronoun') ? $this->Html->link($profile->pronoun->id, ['controller' => 'Pronouns', 'action' => 'view', $profile->pronoun->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
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
