<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingResearchGroup $mappingResearchGroup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Research Group'), ['action' => 'edit', $mappingResearchGroup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Research Group'), ['action' => 'delete', $mappingResearchGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingResearchGroup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Research Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Research Group'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingResearchGroups view content">
            <h3><?= h($mappingResearchGroup->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Research Group') ?></th>
                    <td><?= $mappingResearchGroup->has('research_group') ? $this->Html->link($mappingResearchGroup->research_group->name, ['controller' => 'ResearchGroups', 'action' => 'view', $mappingResearchGroup->research_group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $mappingResearchGroup->has('profile') ? $this->Html->link($mappingResearchGroup->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingResearchGroup->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingResearchGroup->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
