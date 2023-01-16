<?php
declare(strict_types=1);

namespace Certification\Section2\Model\ResourceModel\Faq;

use Certification\Section2\Model\Faq;
use Certification\Section2\Model\ResourceModel\Faq as FaqResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Faq::class, FaqResourceModel::class);
    }
}
