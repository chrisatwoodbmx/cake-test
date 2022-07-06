<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pronoun $pronoun
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pronoun'), ['action' => 'edit', $pronoun->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pronoun'), ['action' => 'delete', $pronoun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pronoun->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pronouns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pronoun'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pronouns view content">
            <h3><?= h($pronoun->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pronoun') ?></th>
                    <td><?= h($pronoun->pronoun) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pronoun->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Profiles') ?></h4>
                <?php if (!empty($pronoun->profiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Profile Type') ?></th>
                            <th><?= __('Visibility Id') ?></th>
                            <th><?= __('Title Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Middle Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Known As') ?></th>
                            <th><?= __('Is Media Expert') ?></th>
                            <th><?= __('Is Welsh Speaker') ?></th>
                            <th><?= __('Available Supervise') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Inactive') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Post Nominal Id') ?></th>
                            <th><?= __('Pronoun Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pronoun->profiles as $profiles) : ?>
                        <tr>
                            <td><?= h($profiles->id) ?></td>
                            <td><?= h($profiles->uuid) ?></td>
                            <td><?= h($profiles->username) ?></td>
                            <td><?= h($profiles->profile_type) ?></td>
                            <td><?= h($profiles->visibility_id) ?></td>
                            <td><?= h($profiles->title_id) ?></td>
                            <td><?= h($profiles->first_name) ?></td>
                            <td><?= h($profiles->middle_name) ?></td>
                            <td><?= h($profiles->last_name) ?></td>
                            <td><?= h($profiles->known_as) ?></td>
                            <td><?= h($profiles->is_media_expert) ?></td>
                            <td><?= h($profiles->is_welsh_speaker) ?></td>
                            <td><?= h($profiles->available_supervise) ?></td>
                            <td><?= h($profiles->archived) ?></td>
                            <td><?= h($profiles->inactive) ?></td>
                            <td><?= h($profiles->created) ?></td>
                            <td><?= h($profiles->post_nominal_id) ?></td>
                            <td><?= h($profiles->pronoun_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Profiles', 'action' => 'view', $profiles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Profiles', 'action' => 'edit', $profiles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profiles', 'action' => 'delete', $profiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profiles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
