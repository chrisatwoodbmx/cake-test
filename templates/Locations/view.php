<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locations view content">
            <h3><?= h($location->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($location->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estate Code') ?></th>
                    <td><?= h($location->estate_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Squiz Code') ?></th>
                    <td><?= h($location->squiz_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coordinate') ?></th>
                    <td><?= h($location->coordinate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address 1') ?></th>
                    <td><?= h($location->address_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address 2') ?></th>
                    <td><?= h($location->address_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($location->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= h($location->region) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($location->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Web Address') ?></th>
                    <td><?= h($location->web_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($location->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Locations') ?></h4>
                <?php if (!empty($location->mapping_locations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Room') ?></th>
                            <th><?= __('Floor') ?></th>
                            <th><?= __('Office Hours') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->mapping_locations as $mappingLocations) : ?>
                        <tr>
                            <td><?= h($mappingLocations->id) ?></td>
                            <td><?= h($mappingLocations->location_id) ?></td>
                            <td><?= h($mappingLocations->profile_id) ?></td>
                            <td><?= h($mappingLocations->room) ?></td>
                            <td><?= h($mappingLocations->floor) ?></td>
                            <td><?= h($mappingLocations->office_hours) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingLocations', 'action' => 'view', $mappingLocations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingLocations', 'action' => 'edit', $mappingLocations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingLocations', 'action' => 'delete', $mappingLocations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingLocations->id)]) ?>
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
