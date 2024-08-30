<?php

namespace Mod1\Test3\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Contact extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mod1_test3_contact', 'entity_id');
    }
}