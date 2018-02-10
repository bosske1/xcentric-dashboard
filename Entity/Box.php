<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 *
 * Dashboard box
 *
 * Class Box
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="dashboard_boxes")
 */
class Box extends AbstractDashboardEntity
{
    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     * @Gedmo\Translatable()
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     */
    private $key;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    private $position;

    /**
     * @var Page
     *
     * @ORM\ManyToOne(targetEntity="Layout")
     * @ORM\JoinColumn(name="layout_id", referencedColumnName="id", onDelete="CASCADE")
     * @Serializer\Exclude
     */
    private $page;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="BoxSetting", mappedBy="box")
     * @Serializer\Exclude
     */
    private $settings;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Action", mappedBy="box")
     * @Serializer\Exclude
     */
    private $actions;

    /**
     * Box constructor.
     */
    public function __construct()
    {
        $this->settings = new ArrayCollection();
        $this->actions = new ArrayCollection();
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
     * @return Box
     */
    public function setTitle(string $title): Box
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Box
     */
    public function setType(string $type): Box
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Box
     */
    public function setKey(string $key): Box
    {
        $this->key = $key;
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
     * @return Box
     */
    public function setPosition(int $position): Box
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return Page
     */
    public function getPage(): Page
    {
        return $this->page;
    }

    /**
     * @param Page $page
     * @return Box
     */
    public function setPage(Page $page): Box
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSettings(): ?Collection
    {
        return $this->settings;
    }

    /**
     * @param Collection $settings
     * @return Box
     */
    public function setSettings(?Collection $settings): Box
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * @param BoxSetting $boxSetting
     * @return Box
     */
    public function addSetting(BoxSetting $boxSetting): Box
    {
        if (!$this->settings->contains($boxSetting)) {
            $this->settings->add($boxSetting);
        }

        return $this;
    }

    /**
     * @param BoxSetting $boxSetting
     * @return Box
     */
    public function removeSetting(BoxSetting $boxSetting): Box
    {
        if ($this->settings->contains($boxSetting)) {
            $this->settings->remove($boxSetting);
        }
        return $this;
    }

    /**
     * @return Collection
     */
    public function getActions(): ?Collection
    {
        return $this->actions;
    }

    /**
     * @param Collection $actions
     * @return Box
     */
    public function setActions(?Collection $actions): Box
    {
        $this->actions = $actions;
        return $this;
    }

    /**
     * @param Action $action
     * @return Box
     */
    public function addAction(Action $action): Box
    {
        if (!$this->actions->contains($action)) {
            $this->actions->add($action);
        }

        return $this;
    }

    /**
     * @param Action $action
     * @return Box
     */
    public function removeAction(Action $action): Box
    {
        if ($this->actions->contains($action)) {
            $this->actions->remove($action);
        }
        return $this;
    }
}