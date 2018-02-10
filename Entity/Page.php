<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 *
 * Dashboard page - basically an entity that holds dashboard boxes.
 *
 * Class Page
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="dashboard_pages")
 */
class Page extends AbstractDashboardEntity
{
    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     * @Gedmo\Translatable()
     */
    private $title;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Layout")
     * @ORM\JoinColumn(name="layout_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $layout;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Box", mappedBy="page")
     * @Serializer\Exclude
     */
    private $boxes;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->boxes = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Page
     */
    public function setTitle(string $title): Page
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return Page
     */
    public function setPosition(int $position): Page
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * @param mixed $layout
     * @return Page
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getBoxes(): Collection
    {
        return $this->boxes;
    }

    /**
     * @param Collection $boxes
     * @return Page
     */
    public function setBoxes(Collection $boxes): Page
    {
        $this->boxes = $boxes;
        return $this;
    }

    /**
     * @param Box $box
     * @return Page
     */
    public function addBox(Box $box): Page
    {
        if (!$this->boxes->contains($box)) {
            $this->boxes->add($box);
        }

        return $this;
    }

    /**
     * @param Box $box
     * @return Page
     */
    public function removeBox(Box $box): Page
    {
        if ($this->boxes->contains($box)) {
            $this->boxes->remove($box);
        }

        return $this;
    }
}