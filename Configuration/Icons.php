<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    // Icon identifier
    'alfabeta-icon' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:my_extension/Resources/Public/Icons/alfabeta.svg',
    ],
    'ext-icon' => [
        'provider' => BitmapIconProvider::class,
        'source' => 'EXT:my_extension/Resources/Public/Icons/ext_icon.png',
        //'spinning' => true,
    ],
];