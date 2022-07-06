<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpokenLanguage $mappingSpokenLanguage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Spoken Language'), ['action' => 'edit', $mappingSpokenLanguage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Spoken Language'), ['action' => 'delete', $mappingSpokenLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpokenLanguage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Spoken Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Spoken Language'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingSpokenLanguages view content">
            <h3><?= h($mappingSpokenLanguage->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Spoken Language') ?></th>
                    <td><?= $mappingSpokenLanguage->has('spoken_language') ? $this->Html->link($mappingSpokenLanguage->spoken_language->name, ['controller' => 'SpokenLanguages', 'action' => 'view', $mappingSpokenLanguage->spoken_language->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingSpokenLanguage->has('profile') ? $this->Html->link($mappingSpokenLanguage->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingSpokenLanguage->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingSpokenLanguage->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
