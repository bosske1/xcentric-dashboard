<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractDashboardEntity
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 */
class AbstractDashboardEntity
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     *
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    protected $modifiedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AbstractDashboardEntity
     */
    public function setId(int $id): AbstractDashboardEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return AbstractDashboardEntity
     */
    public function setCreatedAt(?\DateTime $createdAt): AbstractDashboardEntity
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedAt(): ?\DateTime
    {
        return $this->modifiedAt;
    }

    /**
     * @param \DateTime $modifiedAt
     * @return AbstractDashboardEntity
     */
    public function setModifiedAt(?\DateTime $modifiedAt): AbstractDashboardEntity
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
}