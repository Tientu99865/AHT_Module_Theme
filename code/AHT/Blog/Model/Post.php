<?php
namespace AHT\Blog\Model;

use AHT\Blog\Api\Data\PostInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface, PostInterface
{
//Lớp model này sẽ kế thừa lớp Magento\Framework\Model\AbstractModel
// và implements \Magento\Framework\DataObject\IdentityInterface.
// IdentityInterface sẽ buộc model định nghĩa phương thức getIdentities( ) sẽ trả về một id duy nhất cho model.
//
//Phương thức _construct() sẽ được gọi khi model được khởi tạo,
// tất cả model CRUD đều phải sử dụng phương thức _construct() gọi phương thức _init() để xác định resource model.
// Cuối cùng, một số biến cần có trong model:
//
//$_eventPrefix
//
//$_eventObject
//
//$_cacheTag
    const CACHE_TAG = 'aht_blog_post';
    protected $_cacheTag = 'aht_blog_post';
    protected $_eventPrefix = 'aht_blog_post';

    public function _construct()
    {
        $this->_init('AHT\Blog\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        // TODO: Implement getIdentities() method.
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues(){
        $values = [];

        return $values;
    }
}
