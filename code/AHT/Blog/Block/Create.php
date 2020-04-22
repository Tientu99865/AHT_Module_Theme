<?php
namespace AHT\Blog\Block;
use AHT\Blog\Model\PostFactory;
use AHT\Blog\Model\PostRepository;
use Magento\Framework\View\Element\Template;

class Create extends Template
{
    private $postFactory;
    private $postRepository;

    public function __construct(
        Template\Context $context,
        PostFactory $postFactory,
        PostRepository $postRepository
    )
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
    }
}
