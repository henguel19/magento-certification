<?php
declare(strict_types=1);

namespace Training\Pokemon\Model\ResourceModel\Pokemon;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Training\Pokemon\Model\Pokemon as Model;
use Training\Pokemon\Model\ResourceModel\Pokemon as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'pokemon_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
