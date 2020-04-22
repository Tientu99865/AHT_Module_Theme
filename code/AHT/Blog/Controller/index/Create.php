<?php
namespace AHT\Blog\Controller\Index;

use AHT\Blog\Model\PostFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Create extends Action
{
    protected $_pageFactory;

    protected $_postFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        PostFactory $postFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->_pageFactory->create();
    }
}
