<?php
namespace FlavourWarehouse\StaffAccountLimit\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const MODULE_ENABLE = "flavourwarehouse_staffaccountlimit/enable/enable";

    public function getDefaultConfig($path)
    {
        return $this->scopeConfig->getValue($path, \Magento\Framework\App\Config\ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }

    public function isModuleEnabled()
    {
        return (bool) $this->getDefaultConfig(self::MODULE_ENABLE);
    }
    /**
     * Get Customer group selected list
     */
    public function getCustomerGroupList() {
        $list = $this->scopeConfig->getValue("FlavourWarehouse_StaffAccountLimit/customer_group/list",
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $list !== null ? explode(',', $list) : [];
    }
}

