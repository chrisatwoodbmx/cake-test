<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingOrganisation $mappingOrganisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Organisation'), ['action' => 'edit', $mappingOrganisation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Organisation'), ['action' => 'delete', $mappingOrganisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingOrganisation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Organisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Organisation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingOrganisations view content">
            <h3><?= h($mappingOrganisation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Organisation') ?></th>
                    <td><?= $mappingOrganisation->has('organisation') ? $this->Html->link($mappingOrganisation->organisation->name, ['controller' => 'Organisations', 'action' => 'view', $mappingOrganisation->organisation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingOrganisation->has('profile') ? $this->Html->link($mappingOrganisation->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingOrganisation->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingOrganisation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
