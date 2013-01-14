<?php
namespace Db\Entity;

use Zend\Form\Annotation as Form;

/**
 * @Form\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
 * @Form\Name("showLink")
 */
final class ShowComment extends AbstractComment
{
    use \Db\Field\Show;
}
