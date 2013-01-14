<?php

namespace Db\Field;

use Application\Entity\Venue as VenueEntity;

trait Venue
{
    protected $venue;

    public function getVenue() {
        return $this->venue;
    }

    public function setVenue(VenueEntity $value) {
        $this->venue = $value;
        return $this;
    }
}