<?php
/**
 * Attachments component
 *
 * @package Attachments
 * @subpackage Attachments_Component
 *
 * @copyright Copyright (C) 2007-2011 Jonathan M. Cameron, All Rights Reserved
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @link http://joomlacode.org/gf/project/attachments/frs/
 * @author Jonathan M. Cameron
 */

defined('_JEXEC') or die('Restricted access');
?>
<pre>
Attachments 3.x Extension for Joomla 1.7+

2011-??: Release 3.0.3
   - 2011-09-27 Fixed errors in the English version of the help file
   - 2011-10-30 Changes access/view level dialog to show all access levels to Super-User.
   - 2011-10-30 Fixed issue that caused the backend to crash when users disabled the framework plugin.
   - 2011-10-31 More updates to make things fail more gracefully if the framework plugin is disabled.
   - 2011-12-01 Fix to prevent incorrectly displaying attachments for creating article from category layout.
   - 2012-02-10 Added trim() function to import code to clean field names from CSV files.
   - 2012-02-10 Minor translation fix to search plugin code.
   - 2012-02-11 Fix pagination so that is remembers the limit start.
   - 2012-02-14 Fixed bug in handling errors when checking URLs.

2011-09-17: Release 3.0.2
   - 2011-09-12 Improved display of frontend upload/update forms
   - 2011-09-17 Fixed bug in delete dialog while editing article on front end
   - 2011-09-17 Fixed save2New issue for Joomla 1.6.x

2011-09-09: Release 3.0.1
   - 2011-09-06 Fixed bug in migration import code that prevented proper error
     messages when imports fail (eg, file not found, etc).  Changed the dry_run
     success message to show number of attachments found in CSV file
   - 2011-09-07 Fixed error in token IDs for admin unpublish messages
   - 2011-09-08 Added Save+New button in admin form to add attachments
   - 2011-09-09 Added missing error numbers in import code

2011-08-28: Release 3.0
   - Derived from unreleased 2.3
   - Significant refactoring, reimplementing, new features, cleanups, etc.
   - Testing several RC versions by over 140 testers

</pre>
