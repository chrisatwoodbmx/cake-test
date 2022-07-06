<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingTeam $mappingTeam
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Team'), ['action' => 'edit', $mappingTeam->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Team'), ['action' => 'delete', $mappingTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingTeam->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Teams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Team'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingTeams view content">
            <h3><?= h($mappingTeam->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Team') ?></th>
                    <td><?= $mappingTeam->has('team') ? $this->Html->link($mappingTeam->team->id, ['controller' => 'Teams', 'action' => 'view', $mappingTeam->team->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingTeam->has('profile') ? $this->Html->link($mappingTeam->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingTeam->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingTeam->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
