<?php
namespace AHT\Blog\Block;

use AHT\Blog\Model\PostFactory;
use AHT\Blog\Model\PostRepository;
use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    private $postFactory;
    private $postRepository;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,PostRepository $postRepository,PostFactory $postFactory)
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
    }

    public function getBlogInfo(){
        return __('AHT Blog Module');
    }

    public function getPosts(){
//        $post = $this->_postFactory->create();
//        $collection = $post->getCollection();
//        return $collection;
        $collection = $this->postRepository->getList();
        // $collection = $post->getCollection();
        return $collection;
    }
}
