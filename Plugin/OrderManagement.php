<?php declare(strict_types=1);

/**
 * @author  CarlSimpson
 */

namespace FlavourWarehouse\StaffAccountLimit\Plugin;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\OrderManagementInterface;

/**
 * Class OrderManagement
 */
class OrderManagement
{
    /**
     * @param OrderManagementInterface $subject
     * @param OrderInterface           $order
     *
     * @return OrderInterface[]
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforePlace(
        OrderManagementInterface $subject,
        OrderInterface $order
    ): array {
        $quoteId = $order->getQuoteId();
        if ($quoteId) {

            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';

        }
        return [$order];
    }
}