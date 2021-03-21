<?php
namespace Tesi\SampleService\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

	public function render()
	{
		return __('Hello World From Block Display.php');
	}
}
?>
