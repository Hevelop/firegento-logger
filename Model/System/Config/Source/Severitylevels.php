<?php
/**
 * Created by JetBrains PhpStorm.
 * User: damian
 * Date: 31.03.12
 * Time: 15:36
 * To change this template use File | Settings | File Templates.
 */
class Hackathon_Logger_Model_System_Config_Source_Severitylevels
{
    public function toOptionArray()
    {
        $helper = Mage::helper('hackathon_logger');
        return array(
            array('label' => $helper->__('Alert'), 'value' => Zend_Log::ALERT),
            array('label' => $helper->__('Critical'), 'value' => Zend_Log::CRIT),
            array('label' => $helper->__('Debug'), 'value' => Zend_Log::DEBUG),
            array('label' => $helper->__('Emergency'), 'value' => Zend_Log::EMERG),
            array('label' => $helper->__('Error'), 'value' => Zend_Log::ERR),
            array('label' => $helper->__('Info'), 'value' => Zend_Log::INFO),
            array('label' => $helper->__('Notice'), 'value' => Zend_Log::NOTICE),
            array('label' => $helper->__('Warning'), 'value' => Zend_Log::WARN),
        );
    }
}