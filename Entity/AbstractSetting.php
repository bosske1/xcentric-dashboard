<?php

namespace Xcentric\Bundle\XcentricDashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class AbstractSetting extends AbstractDashboardEntity
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
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return AbstractSetting
     */
    public function setKey(string $key): AbstractSetting
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
     * @return AbstractSetting
     */
    public function setValue(string $value): AbstractSetting
    {
        $this->value = $value;
        return $this;
    }
}