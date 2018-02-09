<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Dashboard Page layout
 *
 * Class Layout
 * @package Xcentric\Bundle\XcentricDashboardBundle\Entity
 * @ORM\Entity()
 * @ORM\Table(name="dashboard_layouts")
 */
class Layout extends AbstractDashboardEntity
{
    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     */
    private $code;
}