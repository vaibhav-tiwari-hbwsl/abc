<?php
namespace Mod1\Test3\Model\ResourceModel\Contact;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mod1\Test3\Model\Contact as ContactModel;
use Mod1\Test3\Model\ResourceModel\Contact as ContactResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(ContactModel::class, ContactResourceModel::class);
    }
}