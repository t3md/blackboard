<?php

namespace Gg\Blackboard\Domain\Model;


/**
 * Class FileReference
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference
{

    /**
     * Uid of a sys_file
     *
     * @var int
     */
    protected $originalFileIdentifier;

    /**
     * setOriginalResource
     *
     * @param \TYPO3\CMS\Core\Resource\ResourceInterface $originalResource
     * @return void
     */
    public function setOriginalResource(\TYPO3\CMS\Core\Resource\ResourceInterface $originalResource) {
        $this->originalResource = $originalResource;
        $this->originalFileIdentifier = (int)$originalResource->getOriginalFile()->getUid();
    }
    
    /**
     * setFile
     *
     * @param \TYPO3\CMS\Core\Resource\File $falFile
     * @return void
     */
    public function setFile(\TYPO3\CMS\Core\Resource\File $falFile) {
        $this->originalFileIdentifier = (int)$falFile->getUid();
    }
    
}