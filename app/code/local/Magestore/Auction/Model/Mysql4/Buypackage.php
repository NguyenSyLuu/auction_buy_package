<?php

class Magestore_Auction_Model_Mysql4_Buypackage extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        $this->_init('auction/buypackage', 'auction_buy_package');
    }
}