<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
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
     * @Gedmo\Translatable()
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string", length=155, nullable=false)
     */
    private $code;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Layout
     */
    public function setTitle(string $title): Layout
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Layout
     */
    public function setCode(string $code): Layout
    {
        $this->code = $code;
        return $this;
    }
}