<?php
namespace Db\Entity;

use Db\Entity\AbstractEntity;
use Zend\Form\Annotation as Form
    , Zend\InputFilter\InputFilter
    ;
/**
 * @Form\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
 * @Form\Name("venue")
 */
class Venue extends AbstractEntity
{
    use \Db\Entity\Field\Id
        , \Db\Entity\Field\Place
        , \Db\Entity\Field\Name
        , \Db\Entity\Field\Note
        , \Db\Entity\Field\City
        , \Db\Entity\Field\State
        ;

    use \Db\Entity\Relation\Performances
        , \Db\Entity\Relation\Links
        , \Db\Entity\Relation\Comments
        , \Db\Entity\Relation\VenueGroups
        ;

    public function getArrayCopy()
    {
        return array(
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city' => $this->getCity(),
            'state' => $this->getState(),
            'note' => $this->getNote(),
        );
    }

    public function exchangeArray($data)
    {
        $this->setName(isset($data['name']) ? $data['name']: null);
        $this->setCity(isset($data['city']) ? $data['city']: null);
        $this->setState(isset($data['state']) ? $data['state']: null);
        $this->setNote(isset($data['note']) ? $data['note']: null);
    }

    public function getInputFilter() {
        $inputFilter = new InputFilter();

        $inputFilter->add($this->inputFilterInputName($inputFilter));
        $inputFilter->add($this->inputFilterInputCity($inputFilter));
        $inputFilter->add($this->inputFilterInputState($inputFilter));
        $inputFilter->add($this->inputFilterInputNote($inputFilter));

        return $inputFilter;
    }
}
