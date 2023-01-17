<?php
declare(strict_types=1);

namespace Training\Pokemon\Controller\Adminhtml\Pokemon;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action implements HttpGetActionInterface
{
    const ADMIN_RESOURCE = 'Training_Pokemon::pokemons';

    protected PageFactory $pageFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct
    (
        Context $context,
        PageFactory $pageFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $page = $this->pageFactory->create();

        $page->setActiveMenu('Training_Pokemon::pokemons');
        $page->getConfig()->getTitle()->prepend(__('Pokemon\'s'));

        return $page;
    }
}
