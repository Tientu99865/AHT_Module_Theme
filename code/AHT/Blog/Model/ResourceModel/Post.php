<?php
namespace AHT\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Post extends AbstractDb
{
//AbstractDb chứa các chức năng tìm nạp thông tin CSDL.
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('aht_blog_post', 'post_id');
    }
}
