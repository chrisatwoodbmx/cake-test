<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactDetail Entity
 *
 * @property int $id
 * @property int $profile_id
 * @property array $email
 * @property string $telephone
 * @property array|null $personal_website
 * @property array|null $blog
 * @property string|null $twitter_username
 * @property string|null $research_gate
 *
 * @property \App\Model\Entity\Linkedin $linkedin
 * @property \App\Model\Entity\GoogleScholar $google_scholar
 * @property \App\Model\Entity\Acadamia $acadamia
 * @property \App\Model\Entity\Orcid $orcid
 * @property \App\Model\Entity\Profile $profile
 */
class ContactDetail extends Entity
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
        'profile_id' => true,
        'email' => true,
        'telephone' => true,
        'personal_website' => true,
        'blog' => true,
        'linkedin' => true,
        'twitter_username' => true,
        'google_scholar' => true,
        'acadamia' => true,
        'research_gate' => true,
        'orcid' => true,
        'profile' => true,
    ];
}
