<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_SmartCategory
 * @copyright   Copyright (c) 2017 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Faonni\SmartCategory\Model\ResourceModel\Rule;

use Magento\Rule\Model\ResourceModel\Rule\Collection\AbstractCollection;

/**
 * SmartCategory Rule collection
 */
class Collection extends AbstractCollection
{
    /**
     * Set resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
			'Faonni\SmartCategory\Model\Rule', 
			'Faonni\SmartCategory\Model\ResourceModel\Rule'
		);
    }
}
