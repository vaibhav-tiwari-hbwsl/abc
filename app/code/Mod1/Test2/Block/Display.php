<?php
namespace Mod1\Test2\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }
    public function sayWelcome()
    {
        return __('This is my Custom Block...................');
    }
}