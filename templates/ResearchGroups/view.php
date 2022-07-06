<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResearchGroup $researchGroup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Research Group'), ['action' => 'edit', $researchGroup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Research Group'), ['action' => 'delete', $researchGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $researchGroup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Research Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Research Group'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="researchGroups view content">
            <h3><?= h($researchGroup->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Research Group') ?></th>
                    <td><?= $researchGroup->has('parent_research_group') ? $this->Html->link($researchGroup->parent_research_group->name, ['controller' => 'ResearchGroups', 'action' => 'view', $researchGroup->parent_research_group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($researchGroup->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($researchGroup->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Research Groups') ?></h4>
                <?php if (!empty($researchGroup->mapping_research_groups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Research Group Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($researchGroup->mapping_research_groups as $mappingResearchGroups) : ?>
                        <tr>
                            <td><?= h($mappingResearchGroups->id) ?></td>
                            <td><?= h($mappingResearchGroups->research_group_id) ?></td>
                            <td><?= h($mappingResearchGroups->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingResearchGroups', 'action' => 'view', $mappingResearchGroups->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingResearchGroups', 'action' => 'edit', $mappingResearchGroups->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingResearchGroups', 'action' => 'delete', $mappingResearchGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingResearchGroups->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Research Groups') ?></h4>
                <?php if (!empty($researchGroup->child_research_groups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($researchGroup->child_research_groups as $childResearchGroups) : ?>
                        <tr>
                            <td><?= h($childResearchGroups->id) ?></td>
                            <td><?= h($childResearchGroups->parent_id) ?></td>
                            <td><?= h($childResearchGroups->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ResearchGroups', 'action' => 'view', $childResearchGroups->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ResearchGroups', 'action' => 'edit', $childResearchGroups->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ResearchGroups', 'action' => 'delete', $childResearchGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childResearchGroups->id)]) ?>
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
