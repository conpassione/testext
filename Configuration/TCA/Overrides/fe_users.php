<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

call_user_func(function() {

  $ll = 'LLL:EXT:kuhteams/Resources/Private/Language/locallang_db.xml:tx_kuhteams_domain_model_team.';

	$additionalColumns = [
    'dogname' => [
        'exclude' => 0,
        'label' => $ll . 'dogname',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'mobile' => [
        'exclude' => 0,
        'label' => $ll . 'mobile',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'dogbirthdate' => [
        'exclude' => 0,
        'label' => $ll . 'dogbirthdate',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'dograce' => [
        'exclude' => 0,
        'label' => $ll . 'dograce',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'dogsex' => [
        'exclude' => 0,
        'label' => $ll . 'dogsex',
		    'config' => [
          'type' => 'select',
          'renderType' => 'selectSingle',
          'items' => [
                ['---',''],
                ['männlich','männlich'],
                ['weiblich','weiblich'],
            ],
        ],
    ],
		'teamstory' => [
				'exclude' => 0,
				'label' => 'Team Geschichte',
        'config' => [
            'type' => 'text',
            'enableRichtext' => true,
            'eval' => 'trim',
    		],
		],
	];

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $additionalColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'mobile,dogname,dogbirthdate,dograce,teamstory','','after:email');
});

?>