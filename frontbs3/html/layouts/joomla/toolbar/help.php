<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doTask = $displayData['doTask'];
$text   = $displayData['text'];

?>
<button onclick="<?php echo $doTask; ?>" rel="help" class="btn btn-default btn-sm">
	<span class="fa fa-question-circle"></span>
	<?php echo $text; ?>
</button>
