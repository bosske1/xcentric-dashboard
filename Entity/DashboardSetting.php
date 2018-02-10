<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 *
 * Dashboard Setting
 *
 * Class DashboardSetting
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="dashboard_settings")
 */
class DashboardSetting extends AbstractSetting
{
    /**
     * @var Dashboard
     *
     * @ORM\ManyToOne(targetEntity="Dashboard", inversedBy="settings")
     * @ORM\JoinColumn(name="dashboard_id", referencedColumnName="id", onDelete="CASCADE")
     * @Serializer\Exclude
     */
    protected $dashboard;

    /**
     * @return Dashboard
     */
    public function getDashboard(): Dashboard
    {
        return $this->dashboard;
    }

    /**
     * @param Dashboard $dashboard
     * @return DashboardSetting
     */
    public function setDashboard(Dashboard $dashboard): DashboardSetting
    {
        $this->dashboard = $dashboard;
        return $this;
    }
}