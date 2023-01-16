<?php
declare(strict_types=1);

namespace Certification\Section2\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action implements HttpGetActionInterface
{
    const ADMIN_RESOURCE = 'Certification_Section2::faq';

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
     * @return Page
     */
    public function execute()
    {
        $page = $this->pageFactory->create();

        $page->setActiveMenu('Certification_Section2::faq');
        $page->getConfig()->getTitle()->prepend(__('FAQs'));

        return $page;
    }
}
