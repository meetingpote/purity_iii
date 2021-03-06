<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

$date_format = isset($displayData['date_format']) ? $displayData['date_format'] : JText::_('DATE_FORMAT_LC3');
?>
			<dd class="create" title="<?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $displayData['item']->created, $date_format)); ?>">
        <i class="fa fa-calendar"></i>
				<?php echo JHtml::_('date', $displayData['item']->created, $date_format) ?>
			</dd>