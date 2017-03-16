<?php

/**
 * Basic PerfectAudience integration module 
 *
 * @category   LCB
 * @package    LCB_PerfectAudience
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_PerfectAudience_Helper_Data extends Mage_Core_Helper_Abstract {
    
    const PERFECT_AUDIENCE_PATH_CONFIG = "perfectaudience/general";
    
    /**
     * Get module config
     * 
     * @param $path
     * @param int $storeId
     * @return string
     */
    public function getConfig($path, $storeId = false)
    {
        return Mage::getStoreConfig(self::PERFECT_AUDIENCE_PATH_CONFIG . "/$path", $storeId);
    }
    
}
