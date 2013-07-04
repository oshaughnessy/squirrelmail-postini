<?php

/**
 * postini/setup.php
 * 
 * This is the plugin initialization page for the SquirrelMail "postini" plugin,
 * which simply places a link to the Postini customer login site in the top
 * link bar.
 * 
 * @copyright Copyright (c) 2007 O'Shaughnessy Evans <shaug-sqml @ wumpus.org>
 * @version $Id: setup.php,v 1.3 2007/12/11 17:46:00 shaug Exp $
 * @license http://opensource.org/licenses/artistic-license-2.0.php
 * @package plugins
 * @subpackage postini
 */


/**
 * squirrelmail_plugin_init_postini()
 * 
 * Initialize the plugin.
 */
function squirrelmail_plugin_init_postini()
{
    global $squirrelmail_plugin_hooks;

    $squirrelmail_plugin_hooks['menuline']['postini'] = 'postini_menuline';
}


/**
 * postini_info()
 * 
 * @returns array with various bits of information about the plugin.
 * Thanks to Paul Lesniewski for the example in the compatibility plugin.
 * 
 * Each element in the array is an info parameter.  Elements may be of any type.
 */
function postini_info()
{
    return array(
        'english_name' => 'Postini',
        'authors' => array(
            'O\'Shaughnessy Evans' => array('email' => 'shaug-sqml@wumpus.org'),
        ),
        'version' => '1.0',
        'required_sm_version' => '1.2',
        'requires_configuration' => 0,
        'requires_source_patch' => 0,
        'required_plugins' => array(),
        'summary' => 'Adds a link to the Postini Message Center in the '.
                     'main menu bar.',
        'details' => 'This is a simple plugin that adds a link to '.
                     'login.postini.com in the main SquirrelMail link bar '.
                     'that is displayed at the top of most pages in the '.
                     'right-hand frame.'
    );
}


/**
 * postini_version()
 * 
 * @returns string identifying the plugin's version number.
 */
function postini_version()
{
    $into = postini_info();
    return $info['version'];
}


include_once(SM_PATH . 'plugins/postini/lib.php');
