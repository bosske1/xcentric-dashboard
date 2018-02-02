<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Basic user dashboard.
 *
 * Class Dashboard
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 */
class Dashboard extends AbstractDashboardEntity
{
    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    private $ownerId;

    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     * @Gedmo\Translatable()
     */
    private $name;

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     * @return Dashboard
     */
    public function setOwnerId(int $ownerId): Dashboard
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Dashboard
     */
    public function setName(string $name): Dashboard
    {
        $this->name = $name;
        return $this;
    }

}