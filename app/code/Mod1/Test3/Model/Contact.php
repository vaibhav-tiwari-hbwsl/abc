<?php

namespace Mod1\Test3\Model;

use Magento\Framework\Model\AbstractModel;
use Mod1\Test3\Model\ResourceModel\Contact as ContactResourceModel;

class Contact extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ContactResourceModel::class);
    }
}