<?php
declare(strict_types=1);

namespace Training\Pokemon\Model;

use Magento\Framework\Model\AbstractModel;
use Training\Pokemon\Model\ResourceModel\Pokemon as ResourceModel;

class Pokemon extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'pokemon_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
