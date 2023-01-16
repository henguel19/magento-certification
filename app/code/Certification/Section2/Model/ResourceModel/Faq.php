<?php
declare(strict_types=1);

namespace Certification\Section2\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Faq extends AbstractDb
{
    /** @var string Main table name on DB */
    const MAIN_TABLE = 'certification_section2_faq';

    /** @var string ID Field name for table */
    const ID_FIELD_NAME = 'id';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
