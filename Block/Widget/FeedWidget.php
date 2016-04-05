<?php
namespace Digimix\FeedWidget\Block\Widget;

class FeedWidget extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
	protected $_template = 'widget/feedwidget.phtml';

	    /**
     * Default value for products count that will be shown
     */
     const DEFAULT_FEED_URL = 'http://google.com';
     const DEFAULT_IMAGE_WIDTH = 250;
     const DEFAULT_IMAGE_HEIGHT = 250;

     protected $topMenu;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Catalog\Helper\Category $categoryHelper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Theme\Block\Html\Topmenu $topMenu
    ) {
        $this->topMenu = $topMenu;
        parent::__construct($context);
    }

     /**
     * Get the width of product image
     * @return int
     */
    public function getFeedurl() {
		if($this->getData('apiurl')==''){
			return DEFAULT_FEED_URL;
		}
        return (int) $this->getData('apiurl');
    }

     /**
     * Get the width of product image
     * @return int
     */
    public function getImagewidth() {
		if($this->getData('imagewidth')==''){
			return DEFAULT_IMAGE_WIDTH;
		}
        return (int) $this->getData('imagewidth');
    }
     /**
     * Get the height of product image
     * @return int
     */
    public function getImageheight() {
		if($this->getData('imageheight')==''){
			return DEFAULT_IMAGE_HEIGHT;
		}
        return (int) $this->getData('imageheight');
    }

    public function canShowImage(){
    	if($this->getData('image') == 'image')
    		return true;
    	elseif($this->getData('image') == 'no-image')
    	return false;
    }
}