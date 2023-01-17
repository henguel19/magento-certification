<?php
declare(strict_types=1);

namespace Training\Pokemon\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Pokemon extends AbstractDb
{
    const TABLE_NAME = 'pokemon';

    const TABLE_ID_FIELD = 'id';

    /**
     * @var string
     */
    protected $_eventPrefix = 'pokemon_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::TABLE_ID_FIELD);
        $this->_useIsObjectNew = true;
    }
}
