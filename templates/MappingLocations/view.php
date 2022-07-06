<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingLocation $mappingLocation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Location'), ['action' => 'edit', $mappingLocation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Location'), ['action' => 'delete', $mappingLocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingLocation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingLocations view content">
            <h3><?= h($mappingLocation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $mappingLocation->has('location') ? $this->Html->link($mappingLocation->location->name, ['controller' => 'Locations', 'action' => 'view', $mappingLocation->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingLocation->has('profile') ? $this->Html->link($mappingLocation->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingLocation->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= h($mappingLocation->room) ?></td>
                </tr>
                <tr>
                    <th><?= __('Floor') ?></th>
                    <td><?= h($mappingLocation->floor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office Hours') ?></th>
                    <td><?= h($mappingLocation->office_hours) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingLocation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
