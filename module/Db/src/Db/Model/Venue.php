<?php

namespace Db\Model;
use Db\Model\AbstractEntityModel
    , Zend\InputFilter\InputFilter
    ;

final class Venue extends AbstractEntityModel
{
    use \Db\Entity\Field\Name
        , \Db\Entity\Field\Note
        , \Db\Entity\Field\Location
        ;

    public function getDefaultSort()
    {
        return array('name' => 'asc');
    }

    public function getInputFilter($entity = null)
    {
        $inputFilter = new InputFilter();
        $inputFilter->add($this->inputFilterInputName($inputFilter));
        $inputFilter->add($this->inputFilterInputNote($inputFilter));
        $inputFilter->add($this->inputFilterInputLocation($inputFilter));

        return $inputFilter;
    }
}