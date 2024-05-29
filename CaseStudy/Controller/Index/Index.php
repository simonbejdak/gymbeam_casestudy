<?php

declare(strict_types=1);

namespace SimonBejdak\CaseStudy\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Index implements HttpGetActionInterface
{
    public function __construct(
       public ScopeConfigInterface $scopeConfig,
    ) {}

    public function execute()
    {
        die($this->scopeConfig->getValue('configuration/general/greeting', ScopeInterface::SCOPE_STORE));-
    }
}
