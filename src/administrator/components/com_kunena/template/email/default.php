<?php
/**
 * Kunena Component
 *
 * @package       Kunena.Administrator.Template
 * @subpackage    Logs
 *
 * @copyright     Copyright (C) 2008 - 2018 Kunena Team. All rights reserved.
 * @license       https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link          https://www.kunena.org
 **/
defined('_JEXEC') or die();

JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('bootstrap.popover');

?>

<div id="kunena" class="admin override">
	<div id="j-sidebar-container" class="span2">
		<div id="sidebar">
			<div class="sidebar-nav"><?php include KPATH_ADMIN . '/template/common/menu.php'; ?></div>
		</div>
	</div>
	<div id="j-main-container" class="span10">
		<div class="well well-small">
			<div class="module-title nav-header"><i class="icon-mail"></i> <?php echo JText::_('Select Email Form') ?>
			</div>
			<hr class="hr-condensed">
			<div id="dashboard-icons" class="btn-group">
				<a class="btn" href="#">
					<i class="icon-big icon-user"></i><br/>
					<span><?php echo JText::_('Subscription') ?></span>
				</a>
				<a class="btn" href="#">
					<i class="icon-big icon-shield"></i><br/>
					<span><?php echo JText::_('Moderator') ?></span>
				</a>
				<a class="btn" href="#">
					<i class="icon-big icon-checkmark"></i><br/>
					<span><?php echo JText::_('Approved') ?></span>
				</a>
				<a class="btn" href="#">
					<i class="icon-big icon-notification-circle"></i><br/>
					<span><?php echo JText::_('Report') ?></span>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="pull-right small">
		<?php echo KunenaVersion::getLongVersionHTML(); ?>
	</div>
</div>
