<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpecialism $mappingSpecialism
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Specialism'), ['action' => 'edit', $mappingSpecialism->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Specialism'), ['action' => 'delete', $mappingSpecialism->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpecialism->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Specialisms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Specialism'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingSpecialisms view content">
            <h3><?= h($mappingSpecialism->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Specialism') ?></th>
                    <td><?= $mappingSpecialism->has('specialism') ? $this->Html->link($mappingSpecialism->specialism->name, ['controller' => 'Specialisms', 'action' => 'view', $mappingSpecialism->specialism->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingSpecialism->has('profile') ? $this->Html->link($mappingSpecialism->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingSpecialism->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingSpecialism->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
