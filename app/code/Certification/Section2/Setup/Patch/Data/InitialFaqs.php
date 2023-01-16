<?php
declare(strict_types=1);

namespace Certification\Section2\Setup\Patch\Data;

use Certification\Section2\Model\ResourceModel\Faq;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class InitialFaqs implements DataPatchInterface
{

    public function __construct(
        protected ModuleDataSetupInterface $moduleDataSetup,
        protected ResourceConnection $resourceConnection
    ) {}

    /**
     * @return string[]
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @return string[]
     */
    public function getAliases()
    {
        return [];
    }


    public function apply(): self
    {
        $connection = $this->resourceConnection->getConnection();
        $data = [
            [
                'question' => 'do you know whats a UI component?',
                'answer' => 'I have no idea',
                'is_published' => 1
            ],
            [
                'question' => 'do you know whats a db_schema?',
                'answer' => 'Yes I do',
                'is_published' => 1
            ],
            [
                'question' => 'Are you ready for Magento Certification?',
                'answer' => 'Im on it',
                'is_published' => 1
            ],
        ];
        $connection->insertMultiple(Faq::MAIN_TABLE, $data);

        return $this;
    }
}
