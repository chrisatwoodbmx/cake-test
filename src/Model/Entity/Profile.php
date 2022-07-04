<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property string $uuid
 * @property string $username
 * @property int $profile_type
 * @property int $visibility_id
 * @property int $title_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property array|null $known_as
 * @property bool $is_media_expert
 * @property bool $is_welsh_speaker
 * @property bool $available_supervise
 * @property bool $archived
 * @property bool $inactive
 * @property \Cake\I18n\FrozenTime $created
 * @property int|null $post_nominal_id
 * @property int|null $pronoun_id
 *
 * @property \App\Model\Entity\Visibility $visibility
 * @property \App\Model\Entity\Title $title
 * @property \App\Model\Entity\PostNominal $post_nominal
 * @property \App\Model\Entity\Pronoun $pronoun
 * @property \App\Model\Entity\Activity[] $activities
 * @property \App\Model\Entity\ContactDetail[] $contact_details
 * @property \App\Model\Entity\Content[] $contents
 * @property \App\Model\Entity\HistoryAudit[] $history_audits
 * @property \App\Model\Entity\MappingExpertise[] $mapping_expertises
 * @property \App\Model\Entity\MappingJobTitle[] $mapping_job_titles
 * @property \App\Model\Entity\MappingLocation[] $mapping_locations
 * @property \App\Model\Entity\MappingOrganisation[] $mapping_organisations
 * @property \App\Model\Entity\MappingResearchGroup[] $mapping_research_groups
 * @property \App\Model\Entity\MappingSpecialism[] $mapping_specialisms
 * @property \App\Model\Entity\MappingSpokenLanguage[] $mapping_spoken_languages
 * @property \App\Model\Entity\MappingTeam[] $mapping_teams
 */
class Profile extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'uuid' => true,
        'username' => true,
        'profile_type' => true,
        'visibility_id' => true,
        'title_id' => true,
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'known_as' => true,
        'is_media_expert' => true,
        'is_welsh_speaker' => true,
        'available_supervise' => true,
        'archived' => true,
        'inactive' => true,
        'created' => true,
        'post_nominal_id' => true,
        'pronoun_id' => true,
        'visibility' => true,
        'title' => true,
        'post_nominal' => true,
        'pronoun' => true,
        'activities' => true,
        'contact_details' => true,
        'contents' => true,
        'history_audits' => true,
        'mapping_expertises' => true,
        'mapping_job_titles' => true,
        'mapping_locations' => true,
        'mapping_organisations' => true,
        'mapping_research_groups' => true,
        'mapping_specialisms' => true,
        'mapping_spoken_languages' => true,
        'mapping_teams' => true,
    ];
}
