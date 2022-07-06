<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profiles view content">
            <h3><?= h($profile->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($profile->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($profile->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= $profile->has('title') ? $this->Html->link($profile->title->title, ['controller' => 'Titles', 'action' => 'view', $profile->title->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($profile->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Middle Name') ?></th>
                    <td><?= h($profile->middle_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($profile->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Known As') ?></th>
                    <td><?= h($profile->known_as) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Nominal') ?></th>
                    <td><?= $profile->has('post_nominal') ? $this->Html->link($profile->post_nominal->id, ['controller' => 'PostNominals', 'action' => 'view', $profile->post_nominal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pronoun') ?></th>
                    <td><?= $profile->has('pronoun') ? $this->Html->link($profile->pronoun->id, ['controller' => 'Pronouns', 'action' => 'view', $profile->pronoun->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($profile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile Type') ?></th>
                    <td><?= $this->Number->format($profile->profile_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Visibility Id') ?></th>
                    <td><?= $this->Number->format($profile->visibility_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($profile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Media Expert') ?></th>
                    <td><?= $profile->is_media_expert ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Welsh Speaker') ?></th>
                    <td><?= $profile->is_welsh_speaker ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Available Supervise') ?></th>
                    <td><?= $profile->available_supervise ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $profile->archived ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Inactive') ?></th>
                    <td><?= $profile->inactive ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Activities') ?></h4>
                <?php if (!empty($profile->activities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Action Id') ?></th>
                            <th><?= __('Ip Address') ?></th>
                            <th><?= __('User Agent') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->activities as $activities) : ?>
                        <tr>
                            <td><?= h($activities->id) ?></td>
                            <td><?= h($activities->profile_id) ?></td>
                            <td><?= h($activities->action_id) ?></td>
                            <td><?= h($activities->ip_address) ?></td>
                            <td><?= h($activities->user_agent) ?></td>
                            <td><?= h($activities->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activities', 'action' => 'view', $activities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activities', 'action' => 'edit', $activities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Activities', 'action' => 'delete', $activities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Contact Details') ?></h4>
                <?php if (!empty($profile->contact_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Telephone') ?></th>
                            <th><?= __('Personal Website') ?></th>
                            <th><?= __('Blog') ?></th>
                            <th><?= __('Linkedin') ?></th>
                            <th><?= __('Twitter Username') ?></th>
                            <th><?= __('Google Scholar') ?></th>
                            <th><?= __('Acadamia') ?></th>
                            <th><?= __('Research Gate') ?></th>
                            <th><?= __('Orcid') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->contact_details as $contactDetails) : ?>
                        <tr>
                            <td><?= h($contactDetails->id) ?></td>
                            <td><?= h($contactDetails->profile_id) ?></td>
                            <td><?= h($contactDetails->email) ?></td>
                            <td><?= h($contactDetails->telephone) ?></td>
                            <td><?= h($contactDetails->personal_website) ?></td>
                            <td><?= h($contactDetails->blog) ?></td>
                            <td><?= h($contactDetails->linkedin) ?></td>
                            <td><?= h($contactDetails->twitter_username) ?></td>
                            <td><?= h($contactDetails->google_scholar) ?></td>
                            <td><?= h($contactDetails->acadamia) ?></td>
                            <td><?= h($contactDetails->research_gate) ?></td>
                            <td><?= h($contactDetails->orcid) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ContactDetails', 'action' => 'view', $contactDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ContactDetails', 'action' => 'edit', $contactDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContactDetails', 'action' => 'delete', $contactDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Contents') ?></h4>
                <?php if (!empty($profile->contents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Overview') ?></th>
                            <th><?= __('Research') ?></th>
                            <th><?= __('Teaching') ?></th>
                            <th><?= __('Biography') ?></th>
                            <th><?= __('Honours') ?></th>
                            <th><?= __('Memberships') ?></th>
                            <th><?= __('Academic Positions') ?></th>
                            <th><?= __('Engagement') ?></th>
                            <th><?= __('Committees') ?></th>
                            <th><?= __('Custom Tab Title Id') ?></th>
                            <th><?= __('Custom Tab Content') ?></th>
                            <th><?= __('Supervision') ?></th>
                            <th><?= __('Past Supervision') ?></th>
                            <th><?= __('Thesis Title') ?></th>
                            <th><?= __('Thesis Content') ?></th>
                            <th><?= __('Funding') ?></th>
                            <th><?= __('Funding Sources') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->contents as $contents) : ?>
                        <tr>
                            <td><?= h($contents->id) ?></td>
                            <td><?= h($contents->profile_id) ?></td>
                            <td><?= h($contents->overview) ?></td>
                            <td><?= h($contents->research) ?></td>
                            <td><?= h($contents->teaching) ?></td>
                            <td><?= h($contents->biography) ?></td>
                            <td><?= h($contents->honours) ?></td>
                            <td><?= h($contents->memberships) ?></td>
                            <td><?= h($contents->academic_positions) ?></td>
                            <td><?= h($contents->engagement) ?></td>
                            <td><?= h($contents->committees) ?></td>
                            <td><?= h($contents->custom_tab_title_id) ?></td>
                            <td><?= h($contents->custom_tab_content) ?></td>
                            <td><?= h($contents->supervision) ?></td>
                            <td><?= h($contents->past_supervision) ?></td>
                            <td><?= h($contents->thesis_title) ?></td>
                            <td><?= h($contents->thesis_content) ?></td>
                            <td><?= h($contents->funding) ?></td>
                            <td><?= h($contents->funding_sources) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contents', 'action' => 'view', $contents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contents', 'action' => 'edit', $contents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contents', 'action' => 'delete', $contents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related History Audits') ?></h4>
                <?php if (!empty($profile->history_audits)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Table') ?></th>
                            <th><?= __('Field') ?></th>
                            <th><?= __('Record Id') ?></th>
                            <th><?= __('Old') ?></th>
                            <th><?= __('New') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->history_audits as $historyAudits) : ?>
                        <tr>
                            <td><?= h($historyAudits->id) ?></td>
                            <td><?= h($historyAudits->table) ?></td>
                            <td><?= h($historyAudits->field) ?></td>
                            <td><?= h($historyAudits->record_id) ?></td>
                            <td><?= h($historyAudits->old) ?></td>
                            <td><?= h($historyAudits->new) ?></td>
                            <td><?= h($historyAudits->profile_id) ?></td>
                            <td><?= h($historyAudits->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'HistoryAudits', 'action' => 'view', $historyAudits->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'HistoryAudits', 'action' => 'edit', $historyAudits->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'HistoryAudits', 'action' => 'delete', $historyAudits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historyAudits->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Mapping Expertises') ?></h4>
                <?php if (!empty($profile->mapping_expertises)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Expertise Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->mapping_expertises as $mappingExpertises) : ?>
                        <tr>
                            <td><?= h($mappingExpertises->id) ?></td>
                            <td><?= h($mappingExpertises->expertise_id) ?></td>
                            <td><?= h($mappingExpertises->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingExpertises', 'action' => 'view', $mappingExpertises->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingExpertises', 'action' => 'edit', $mappingExpertises->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingExpertises', 'action' => 'delete', $mappingExpertises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingExpertises->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Mapping Job Titles') ?></h4>
                <?php if (!empty($profile->mapping_job_titles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Job Title Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->mapping_job_titles as $mappingJobTitles) : ?>
                        <tr>
                            <td><?= h($mappingJobTitles->id) ?></td>
                            <td><?= h($mappingJobTitles->job_title_id) ?></td>
                            <td><?= h($mappingJobTitles->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingJobTitles', 'action' => 'view', $mappingJobTitles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingJobTitles', 'action' => 'edit', $mappingJobTitles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingJobTitles', 'action' => 'delete', $mappingJobTitles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingJobTitles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Mapping Locations') ?></h4>
                <?php if (!empty($profile->mapping_locations)) : ?>
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
                        <?php foreach ($profile->mapping_locations as $mappingLocations) : ?>
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
            <div class="related">
                <h4><?= __('Related Mapping Organisations') ?></h4>
                <?php if (!empty($profile->mapping_organisations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Organisation Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->mapping_organisations as $mappingOrganisations) : ?>
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
                <h4><?= __('Related Mapping Research Groups') ?></h4>
                <?php if (!empty($profile->mapping_research_groups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Research Group Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->mapping_research_groups as $mappingResearchGroups) : ?>
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
                <h4><?= __('Related Mapping Specialisms') ?></h4>
                <?php if (!empty($profile->mapping_specialisms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Specialism Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->mapping_specialisms as $mappingSpecialisms) : ?>
                        <tr>
                            <td><?= h($mappingSpecialisms->id) ?></td>
                            <td><?= h($mappingSpecialisms->specialism_id) ?></td>
                            <td><?= h($mappingSpecialisms->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingSpecialisms', 'action' => 'view', $mappingSpecialisms->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingSpecialisms', 'action' => 'edit', $mappingSpecialisms->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingSpecialisms', 'action' => 'delete', $mappingSpecialisms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpecialisms->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Mapping Spoken Languages') ?></h4>
                <?php if (!empty($profile->mapping_spoken_languages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Spoken Language Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->mapping_spoken_languages as $mappingSpokenLanguages) : ?>
                        <tr>
                            <td><?= h($mappingSpokenLanguages->id) ?></td>
                            <td><?= h($mappingSpokenLanguages->spoken_language_id) ?></td>
                            <td><?= h($mappingSpokenLanguages->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingSpokenLanguages', 'action' => 'view', $mappingSpokenLanguages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingSpokenLanguages', 'action' => 'edit', $mappingSpokenLanguages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingSpokenLanguages', 'action' => 'delete', $mappingSpokenLanguages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpokenLanguages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Mapping Teams') ?></h4>
                <?php if (!empty($profile->mapping_teams)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Team Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profile->mapping_teams as $mappingTeams) : ?>
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
        </div>
    </div>
</div>
