<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Teams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Team'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="teams view content">
            <h3><?= h($team->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Team') ?></th>
                    <td><?= $team->has('parent_team') ? $this->Html->link($team->parent_team->id, ['controller' => 'Teams', 'action' => 'view', $team->parent_team->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Team') ?></th>
                    <td><?= h($team->team) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($team->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Teams') ?></h4>
                <?php if (!empty($team->mapping_teams)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Team Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($team->mapping_teams as $mappingTeams) : ?>
                        <tr>
                            <td><?= h($mappingTeams->id) ?></td>
                            <td><?= h($mappingTeams->team_id) ?></td>
                            <td><?= h($mappingTeams->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingTeams', 'action' => 'view', $mappingTeams->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingTeams', 'action' => 'edit', $mappingTeams->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingTeams', 'action' => 'delete', $mappingTeams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingTeams->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Teams') ?></h4>
                <?php if (!empty($team->child_teams)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Team') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($team->child_teams as $childTeams) : ?>
                        <tr>
                            <td><?= h($childTeams->id) ?></td>
                            <td><?= h($childTeams->parent_id) ?></td>
                            <td><?= h($childTeams->team) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $childTeams->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $childTeams->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $childTeams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childTeams->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
