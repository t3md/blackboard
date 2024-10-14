<?php

declare(strict_types=1);

namespace T3md\Blackboard\Controller;

use T3md\Blackboard\Property\TypeConverter\UploadedFileReferenceConverter;
use TYPO3\CMS\Extbase\Property\PropertyMappingConfiguration;

/**
 * This file is part of the "GG Blackboard" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Michael Lang
 */

/**
 * OfferController
 */
class OfferController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * offerRepository
     *
     * @var \T3md\Blackboard\Domain\Repository\OfferRepository
     */
    protected $offerRepository = null;

    /**
     * @param \T3md\Blackboard\Domain\Repository\OfferRepository $offerRepository
     */
    public function injectOfferRepository(\T3md\Blackboard\Domain\Repository\OfferRepository $offerRepository)
    {
        $this->offerRepository = $offerRepository;
    }
    
    public function initializeAction() {
        if ($this->arguments->hasArgument('offer')) {
            $this->arguments->getArgument('offer')->getPropertyMappingConfiguration()->forProperty('endtime')->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter',\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT,'Y-m-d');
        }
    }
    
    public function initializeCreateAction()
    {   
    if ($this->arguments->hasArgument('newOffer')) {
        $this->arguments['newOffer']->getPropertyMappingConfiguration()->forProperty('endtime')->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter', \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, 'Y-m-d');
                }
    }
    
    
    /**************************************************************************************************************************************/
    

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $offers = $this->offerRepository->findAll();
        
        
       // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(count($offers));
        
        $this->view->assign('offers', $offers);
        return $this->htmlResponse();
    }
    
    /**
     * action show
     *
     * @param \T3md\Blackboard\Domain\Model\Offer $offer
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\T3md\Blackboard\Domain\Model\Offer $offer): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('offer', $offer);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \T3md\Blackboard\Domain\Model\Offer $newOffer
     */
    public function createAction(\T3md\Blackboard\Domain\Model\Offer $newOffer)
    {

        $this->offerRepository->add($newOffer);
        $this->redirect('list');
    }
   
    /**
     * action edit
     *
     * @param \T3md\Blackboard\Domain\Model\Offer $offer
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("offer")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\T3md\Blackboard\Domain\Model\Offer $offer): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('offer', $offer);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \T3md\Blackboard\Domain\Model\Offer $offer
     */
    public function updateAction(\T3md\Blackboard\Domain\Model\Offer $offer)
    {
               
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->offerRepository->update($offer);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \T3md\Blackboard\Domain\Model\Offer $offer
     */
    public function deleteAction(\T3md\Blackboard\Domain\Model\Offer $offer)
    {
        $this->offerRepository->remove($offer);
        $this->redirect('list');
    }
    
    /**
     * action deleteConfirm
     * 
     * @param \T3md\Blackboard\Domain\Model\Offer $offer
     */
    public function deleteConfirmAction(\T3md\Blackboard\Domain\Model\Offer $offer)
    {
        $this->view->assign('offer', $offer);
        return $this->htmlResponse();
    }
    
    
}

