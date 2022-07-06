<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingActivitiesType $mappingActivitiesType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mapping Activities Type'), ['action' => 'edit', $mappingActivitiesType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mapping Activities Type'), ['action' => 'delete', $mappingActivitiesType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingActivitiesType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mapping Activities Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mapping Activities Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingActivitiesTypes view content">
            <h3><?= h($mappingActivitiesType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($mappingActivitiesType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mappingActivitiesType->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
