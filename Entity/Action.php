<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Dashboard box actions.
 *
 * Class Action
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="dashboard_box_actions")
 */
class Action
{
    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     */
    private $key;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=false)
     */
    private $value;

    /**
     * @var Box
     *
     * @ORM\ManyToOne(targetEntity="Box", inversedBy="actions")
     * @ORM\JoinColumn(name="box_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $box;

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Action
     */
    public function setKey(string $key): Action
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Action
     */
    public function setValue(string $value): Action
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return Box
     */
    public function getBox(): Box
    {
        return $this->box;
    }

    /**
     * @param Box $box
     * @return Action
     */
    public function setBox(Box $box): Action
    {
        $this->box = $box;
        return $this;
    }
}