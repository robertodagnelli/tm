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
		$url = "http://robertod.germanywestcentral.cloudapp.azure.com:9000/sample-api.php";
		$out = $this->call($url);
		return $out;
	}


	  public function call($url)
	  {
	    $ch = curl_init();

	    // set url
	    curl_setopt($ch, CURLOPT_URL, $url);

	    //return the transfer as a string
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	    // $output contains the output string
	    $output = curl_exec($ch);

	    // close curl resource to free up system resources
	    curl_close($ch);

	    return $output;
	  }
}
?>
