<?php

namespace DbEtreeOrg\View\Helper;
use Zend\View\Helper\AbstractHelper
    , Doctrine\ORM\EntityManager
    , Zend\ServiceManager\ServiceLocatorAwareInterface
    , Zend\View\Model\ViewModel
    ;

final class AddPerformerToLineup extends AbstractHelper implements ServiceLocatorAwareInterface {
    use \Db\Model\Component\ServiceLocator;

    public function __invoke($id, $entityName, $returnUrl)
    {
        if (!$this->getServiceLocator()->getServiceLocator()->get('zfcuser_auth_service')->hasIdentity())
            return '<a href="/user/login">Login to comment</a>';

        $view = $this->getServiceLocator()->getServiceLocator()->get('View');
        $model = new ViewModel();
        $model->setTemplate('db-etree-org/helper/add-performer-to-lineup.phtml');
        $model->setVariable('id', $id);
        $model->setVariable('entityName', $entityName);
        $model->setVariable('returnUrl', $returnUrl);
        $model->setOption('has_parent', true);
        return $view->render($model);
    }
}