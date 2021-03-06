<?php
namespace AHT\Blog\Controller\Index;

use AHT\Blog\Model\PostFactory;
use AHT\Blog\Model\PostRepository;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Cache\Frontend\Pool;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;

class Delete extends Action
{
    protected $_pageFactory;

    protected $_postFactory;

    protected $_postRepository;

    protected $_coreRegistry;

    protected $resultRedirect;
    private $_cacheTypeList;
    private $_cacheFrontendPool;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        PostFactory $postFactory,
        PostRepository $postRepository,
        \Magento\Framework\Registry $coreRegistry,
        ResultFactory $result,
        TypeListInterface $cacheTypeList,
        Pool $cacheFrontendPool
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        $this->_postRepository = $postRepository;
        $this->_coreRegistry = $coreRegistry;
        $this->resultRedirect = $result;
        $this->_cacheTypeList = $cacheTypeList;
        $this->_cacheFrontendPool = $cacheFrontendPool;
        return parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $post_id = $this->getRequest()->getParam('post_id');
        $this->_postRepository->deleteById($post_id);

        $types = array('config','layout','block_html','collections','reflection','db_ddl','eav','config_integration','config_integration_api','full_page','translate','config_webservice');

        foreach ($types as $type) {
            $this->_cacheTypeList->cleanType($type);
        }

        foreach ($this->_cacheFrontendPool as $cacheFrontend) {
            $cacheFrontend->getBackend()->clean();
        }

        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('blog/index/index');
        return $resultRedirect;
    }
}
