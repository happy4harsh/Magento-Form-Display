<?php
 
namespace Test\Luck\Controller\Index;
 
use Magento\Framework\App\Action\Context;
 
class post extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
 
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        //echo "123";
        //$resultPage = $this->_resultPageFactory->create();
       
         //$post = $this->getRequest()->getPostValue();
         //print_r($post['name']);
        

        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;



        // $this->messageManager->addError(__($post['name']));

            // $this->_redirect('*/*/');
            // return;
         // $this->_redirect('lucky/index');
       
    }
}