<?php
namespace AHT\Blog\Api;

use AHT\Blog\Api\Data\PostInterface;

interface PostRepositoryInterface
{
    public function save(PostInterface $Post);

    public function getById($PostId);

    public function delete(PostInterface $Post);

    public function deleteById($PostId);
}
