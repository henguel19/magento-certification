<?php
declare(strict_types=1);

namespace Certification\Section1\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    public const XML_PATH_POKEMONS_ENDPOINT = "api_configs/api_urls/pokemon_endpoint";

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param $storeId
     * @return string
     */
    public function getPokemonsEndpoint($storeId = null): string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_POKEMONS_ENDPOINT, ScopeInterface::SCOPE_STORE, $storeId);
    }
}
