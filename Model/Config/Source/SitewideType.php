<?php
namespace Elevate\Promotions\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Status
 */
class SitewideType implements OptionSourceInterface
{
  /**
   * Get options
   *
   * @return array
   */
  public function toOptionArray()
  {
    return [
      ['label' => __('Text Only'), 'value' => '1'],
      ['label' => __('Static Block'), 'value' => '2'],
      ['label' => __('USP Only'), 'value' => '3'],
      ['label' => __('USP + countdown'), 'value' => '4']
    ];
}
}