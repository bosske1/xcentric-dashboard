<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Gedmo\Mapping\Annotation as Gedmo;
    use Doctrine\ORM\Mapping as ORM;
    use JMS\Serializer\Annotation as Serializer;

/**
 *
 * Basic user dashboard.
 *
 * Class Dashboard
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="dashboard_dashboards")
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
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Page", mappedBy="dashboard")
     * @Serializer\Exclude
     */
    private $pages;

    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        $this->pages = new ArrayCollection();
    }

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

    /**
     * @return Collection
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    /**
     * @param Collection $pages
     * @return Dashboard
     */
    public function setPages(Collection $pages): Dashboard
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * @param Page $page
     * @return Dashboard
     */
    public function addPage(Page $page): Dashboard
    {
        if (!$this->pages->contains($page)) {
            $this->pages->add($page);
        }

        return $this;
    }

    /**
     * @param Page $page
     * @return Dashboard
     */
    public function removePage(Page $page): Dashboard
    {
        if ($this->pages->contains($page)) {
            $this->pages->remove($page);
        }

        return $this;
    }

}