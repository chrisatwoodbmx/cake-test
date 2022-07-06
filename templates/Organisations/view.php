<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organisation $organisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Organisation'), ['action' => 'edit', $organisation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Organisation'), ['action' => 'delete', $organisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organisation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Organisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Organisation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organisations view content">
            <h3><?= h($organisation->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Organisation') ?></th>
                    <td><?= $organisation->has('parent_organisation') ? $this->Html->link($organisation->parent_organisation->name, ['controller' => 'Organisations', 'action' => 'view', $organisation->parent_organisation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($organisation->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($organisation->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Organisations') ?></h4>
                <?php if (!empty($organisation->mapping_organisations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Organisation Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($organisation->mapping_organisations as $mappingOrganisations) : ?>
                        <tr>
                            <td><?= h($mappingOrganisations->id) ?></td>
                            <td><?= h($mappingOrganisations->organisation_id) ?></td>
                            <td><?= h($mappingOrganisations->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingOrganisations', 'action' => 'view', $mappingOrganisations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingOrganisations', 'action' => 'edit', $mappingOrganisations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingOrganisations', 'action' => 'delete', $mappingOrganisations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingOrganisations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Organisations') ?></h4>
                <?php if (!empty($organisation->child_organisations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($organisation->child_organisations as $childOrganisations) : ?>
                        <tr>
                            <td><?= h($childOrganisations->id) ?></td>
                            <td><?= h($childOrganisations->parent_id) ?></td>
                            <td><?= h($childOrganisations->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Organisations', 'action' => 'view', $childOrganisations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Organisations', 'action' => 'edit', $childOrganisations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organisations', 'action' => 'delete', $childOrganisations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childOrganisations->id)]) ?>
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
