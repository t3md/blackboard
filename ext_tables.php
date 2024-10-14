<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_blackboard_domain_model_offer', 'EXT:blackboard/Resources/Private/Language/locallang_csh_tx_blackboard_domain_model_offer.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_blackboard_domain_model_offer');
})();
