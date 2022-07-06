<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactDetail $contactDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contact Detail'), ['action' => 'edit', $contactDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contact Detail'), ['action' => 'delete', $contactDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contact Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactDetails view content">
            <h3><?= h($contactDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $contactDetail->has('profile') ? $this->Html->link($contactDetail->profile->id, ['controller' => 'Profiles', 'action' => 'view', $contactDetail->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contactDetail->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= h($contactDetail->telephone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Personal Website') ?></th>
                    <td><?= h($contactDetail->personal_website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blog') ?></th>
                    <td><?= h($contactDetail->blog) ?></td>
                </tr>
                <tr>
                    <th><?= __('Linkedin') ?></th>
                    <td><?= h($contactDetail->linkedin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Twitter Username') ?></th>
                    <td><?= h($contactDetail->twitter_username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Google Scholar') ?></th>
                    <td><?= h($contactDetail->google_scholar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Acadamia') ?></th>
                    <td><?= h($contactDetail->acadamia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Research Gate') ?></th>
                    <td><?= h($contactDetail->research_gate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Orcid') ?></th>
                    <td><?= h($contactDetail->orcid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contactDetail->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
