<?php

/**
 * postini/lib.php
 * 
 * This is the function library for the SquirrelMail "postini" plugin,
 * which adds a link to login.postini.com to the user's menu line.
 * 
 * @copyright Copyright (c) 2002-2007 O'Shaughnessy Evans <shaug-sqml @ wumpus.org>
 * @version $Id: lib.php,v 1.1 2007/12/11 17:45:07 shaug Exp $
 * @license http://opensource.org/licenses/artistic-license-2.0.php
 * @package plugins
 * @subpackage postini
 */



/**
 * postini_menuline()
 * 
 * Add a link to the main frame's menu line.
 */
function postini_menuline()
{
    sq_change_text_domain('postini');

    echo "<a href=\"https://login.postini.com/\" target=\"_blank\">".
         _("Postini Message Center"). "</a>&nbsp;&nbsp;\n";

    sq_change_text_domain('squirrelmail');
}
