<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activity'), ['action' => 'edit', $activity->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activity'), ['action' => 'delete', $activity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activity->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activity'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="activities view content">
            <h3><?= h($activity->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $activity->has('profile') ? $this->Html->link($activity->profile->id, ['controller' => 'Profiles', 'action' => 'view', $activity->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mapping Activities Type') ?></th>
                    <td><?= $activity->has('mapping_activities_type') ? $this->Html->link($activity->mapping_activities_type->name, ['controller' => 'MappingActivitiesTypes', 'action' => 'view', $activity->mapping_activities_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Address') ?></th>
                    <td><?= h($activity->ip_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Agent') ?></th>
                    <td><?= h($activity->user_agent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activity->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($activity->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
