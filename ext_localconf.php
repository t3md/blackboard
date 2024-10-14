<?php
defined('TYPO3') || die();


$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['gg'] = ['Gg\\Blackboard\\ViewHelpers'];

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Blackboard',
        'Pi1',
        [
            \Gg\Blackboard\Controller\OfferController::class => 'list, create, new, edit, update, delete, deleteConfirm, show'
        ],
        // non-cacheable actions
        [
            \Gg\Blackboard\Controller\OfferController::class => 'list, create, new, edit, update, delete, deleteConfirm, show'
        ]
        );
    
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['gg'] = ['Gg\\Blackboard\\ViewHelpers'];
    
    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = blackboard-plugin-pi1
                        title = LLL:EXT:blackboard/Resources/Private/Language/locallang_db.xlf:tx_blackboard_pi1.name
                        description = LLL:EXT:blackboard/Resources/Private/Language/locallang_db.xlf:tx_blackboard_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = blackboard_pi1
                        }
                    }
                }
                show = *
            }
       }'
        );
})();
