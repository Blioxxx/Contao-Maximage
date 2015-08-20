<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 8, array
(
    'bx_maximage' => array
    (
        'tables'      => array('tl_bx_maximage'),
        'icon'        => 'system/modules/maximage/assets/images/icon.png',
    )
));