<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 *
 * Dashboard box setting
 *
 * Class BoxSetting
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="dashboard_box_settings")
 */
class BoxSetting extends AbstractSetting
{
    /**
     * @var Box
     *
     * @ORM\ManyToOne(targetEntity="Box", inversedBy="settings")
     * @ORM\JoinColumn(name="box_id", referencedColumnName="id", onDelete="CASCADE")
     * @Serializer\Exclude
     */
    protected $box;

    /**
     * @return Box
     */
    public function getBox(): Box
    {
        return $this->box;
    }

    /**
     * @param Box $box
     * @return BoxSetting
     */
    public function setBox(Box $box): BoxSetting
    {
        $this->box = $box;
        return $this;
    }
}