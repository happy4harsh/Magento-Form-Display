<?php
namespace Test\Luck\Block;
 
class lucky extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
 }
 // public function getCollection(){
 //    $post = $this->getRequest()->getPostValue(); 
 //    return;
 // }
}
