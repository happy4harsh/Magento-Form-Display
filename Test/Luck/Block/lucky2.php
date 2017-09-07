<?php
namespace Test\Luck\Block;
 
class lucky2 extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
    	    $post = $this->getRequest()->getPostValue();
        
        $a=($post['name']);
       
       return $a;
    }
 // public function getCollection(){
 //    $post = $this->getRequest()->getPostValue(); 
 //    return;
 // }
}
