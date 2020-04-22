<?php
namespace AHT\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
//Lớp collection CRUD phải kế thừa từ \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
// và gọi pương thức _init() để khởi tạo model, resource model trong hàm _construct().

    protected $_idFieldName = "post_id";
    protected $_eventPrefix = 'aht_blog_post_collection';
    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        parent::_construct(); // TODO: Change the autogenerated stub
        $this->_init('AHT\Blog\Model\Post', 'AHT\Blog\Model\ResourceModel\Post');
    }
}