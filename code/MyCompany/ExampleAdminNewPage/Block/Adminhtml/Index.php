<?php
namespace MyCompany\ExampleAdminNewPage\Block\Adminhtml;

use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function getBlogInfo(){
        return __('AHT Blog Module');
    }

    public function getPosts(){
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
}
