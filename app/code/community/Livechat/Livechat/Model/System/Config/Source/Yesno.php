<?php

class Livechat_Livechat_Model_System_Config_Source_Yesno
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $result = array();
        foreach ($this->toArray() as $value => $label) {
            $result[] = array('value' => $value, 'label' => $label);
        }

        return $result;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'No' => Mage::helper('livechat')->__('No'),
            'Yes' => Mage::helper('livechat')->__('Yes'),
        );
    }
}
