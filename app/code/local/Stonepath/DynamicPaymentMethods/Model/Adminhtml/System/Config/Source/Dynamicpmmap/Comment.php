<?php
class Stonepath_DynamicPaymentMethods_Model_Adminhtml_System_Config_Source_Dynamicpmmap_Comment extends Mage_Core_Model_Config_Data
{
    public function getCommentText(Mage_Core_Model_Config_Element $element, $currentValue)
    {
    	$output = "<b>payment codes:</b><br/>";
    	
    	foreach(Mage::helper('dynamicpaymentmethods')->getPaymentMethodCodes() as $methodCode){
    		$output .= $methodCode."<br/>";
    	}
    	
    	
    	$output .= "<b>shipment codes:</b><br/>";
    	foreach(Mage::helper('dynamicpaymentmethods')->getShippingCodes() as $methodCode){
    		$output .= $methodCode."<br/>";
    	}
    	
    
        return $output;
    }
}