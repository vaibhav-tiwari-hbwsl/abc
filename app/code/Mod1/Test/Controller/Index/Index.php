<?php

namespace Mod1\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Index extends Action
{

    public function __construct(
        Context $context,
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        echo ("Hello World");
    }

}
