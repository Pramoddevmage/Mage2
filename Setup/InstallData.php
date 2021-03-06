<?php
namespace Mageplaza\Custattr\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class InstallData implements InstallDataInterface
{
	private $eavSetupFactory;
	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}
	
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		// $eavSetup->addAttribute(
		// 	\Magento\Catalog\Model\Product::ENTITY,
		// 	'disable_price_for_attr_sets',
		// 	[
  //               'group' => 'General',
  //               'type' => 'int',
  //               'backend' => '',
  //               'frontend' => '',
  //               'label' => 'Disable price for following attirbute sets',
  //               'input' => 'boolean',
  //               'class' => '',
  //               'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
  //               'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
  //               'visible' => true,
  //               'required' => false,
  //               'user_defined' => false,
  //               'default' => '1',
  //               'searchable' => false,
  //               'filterable' => false,
  //               'comparable' => false,
  //               'visible_on_front' => false,
  //               'used_in_product_listing' => false,
  //               'unique' => false,
  //               'apply_to' => ''
  //           ]
		// );
		$eavSetup->addAttribute(
	    \Magento\Catalog\Model\Product::ENTITY,
	    'disable_price_for_attr_sets',
		[
			'type' => 'text',
			'backend' => '',
			'frontend' => '',
			'label' => 'Disable price for following attirbute sets',
			'input' => 'select',
			'class' => '',
			'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
			'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
			'visible' => true,
			'required' => true,
			'user_defined' => false,
			'default' => '',
			'searchable' => false,
			'filterable' => false,
			'comparable' => false,
			'visible_on_front' => false,
			'used_in_product_listing' => true,
			'unique' => false,
			'apply_to' => ''
		]
	);
	// $eavSetup->endSetup();
	}	
}
?>