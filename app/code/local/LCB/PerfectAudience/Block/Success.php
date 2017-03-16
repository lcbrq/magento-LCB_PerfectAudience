<?php

/**
 * Basic PerfectAudience integration module 
 *
 * @category   LCB
 * @package    LCB_PerfectAudience
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_PerfectAudience_Block_Success extends LCB_PerfectAudience_Block_Default {

    /**
     * Get order object
     * 
     * @return Mage_Sales_Model_Order
     */
    public function getOrder()
    {
        return Mage::getModel('sales/order')->loadByIncrementId(Mage::getSingleton('checkout/session')->getLastRealOrderId());
    }

    /**
     * Get order amount
     * 
     * @return float
     */
    public function getAmount()
    {
        return round($this->getOrder()->getGrandTotal(), 2);
    }

}