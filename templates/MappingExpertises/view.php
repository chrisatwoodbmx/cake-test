<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingExpertise $mappingExpertise
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Expertise'), ['action' => 'edit', $mappingExpertise->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Expertise'), ['action' => 'delete', $mappingExpertise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingExpertise->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Expertises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Expertise'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingExpertises view content">
            <h3><?= h($mappingExpertise->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Expertise') ?></th>
                    <td><?= $mappingExpertise->has('expertise') ? $this->Html->link($mappingExpertise->expertise->name, ['controller' => 'Expertises', 'action' => 'view', $mappingExpertise->expertise->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingExpertise->has('profile') ? $this->Html->link($mappingExpertise->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingExpertise->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingExpertise->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
