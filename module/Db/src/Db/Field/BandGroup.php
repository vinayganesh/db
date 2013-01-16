<?php
namespace Db\Field;

use Application\Entity\BandGroup as BandGroupEntity;

trait BandGroup
{
    protected $bandGroup;

    public function getBandGroup()
    {
        return $this->bandGroup;
    }

    public function setBandGroup(BandGroupEntity $value)
    {
        $this->bandGroup = $value;
        return $this;
    }
}
