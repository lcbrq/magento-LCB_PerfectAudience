<?php

/**
 * Basic PerfectAudience integration module 
 *
 * @category   LCB
 * @package    LCB_PerfectAudience
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_PerfectAudience_Block_Default extends Mage_Core_Block_Template {

    /**
     * Render block HTML
     *
     * @return string
     */
    public function _toHtml()
    {
        if (!Mage::helper('perfectaudience')->getConfig("id", Mage::app()->getStore()->getId()) || !$this->getId()) {
            return '';
        }

        return parent::_toHtml();
    }

    /**
     * Get ISO 639 language code
     * 
     * @return string
     */
    public function getLanguage()
    {
        return substr(Mage::app()->getLocale()->getLocaleCode(), 0, 2);
    }

    /**
     * Get tracking id
     * 
     * @return string
     */
    public function getId()
    {
        return Mage::helper('perfectaudience')->getConfig("id", Mage::app()->getStore()->getId());
    }

}
