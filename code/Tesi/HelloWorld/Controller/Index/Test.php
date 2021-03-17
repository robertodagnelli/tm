<?php
namespace Tesi\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		echo "Hello World";
    $out = call();
    echo "Result: ";
    echo $out;
		exit;
	}

  public function call()
  {
    echo "calling...";
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);
    echo "output: " . $output;
    // close curl resource to free up system resources
    curl_close($ch);

    return $output;
  }
}
