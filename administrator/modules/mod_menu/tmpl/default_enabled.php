<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* @var $menu JAdminCSSMenu */

$shownew = (boolean) $params->get('shownew', 1);
$showhelp = $params->get('showhelp', 1);
$user = JFactory::getUser();
$lang = JFactory::getLanguage();

/*
 * Site Submenu
 */
$menu->addChild(new JMenuNode(JText::_('System Maintenance'), '#'), true);
$menu->addChild(new JMenuNode(JText::_('MOD_MENU_CONTROL_PANEL'), 'index.php', 'class:cpanel'));

if ($user->authorise('core.admin'))
{
	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_CONFIGURATION'), 'index.php?option=com_config', 'class:config'));
}

if ($user->authorise('core.manage', 'com_checkin'))
{
	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_GLOBAL_CHECKIN'), 'index.php?option=com_checkin', 'class:checkin'));
}

if ($user->authorise('core.manage', 'com_cache'))
{
	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_CLEAR_CACHE'), 'index.php?option=com_cache', 'class:clear'));
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_PURGE_EXPIRED_CACHE'), 'index.php?option=com_cache&view=purge', 'class:purge'));
}

if ($user->authorise('core.admin'))
{
	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_SYSTEM_INFORMATION'), 'index.php?option=com_admin&view=sysinfo', 'class:info'));
}

$menu->getParent();

/*
 * Users Submenu
 */
if ($user->authorise('core.manage', 'com_users'))
{
	$menu->addChild(new JMenuNode(JText::_('Manage Users'), '#'), true);
	$createUser = $shownew && $user->authorise('core.create', 'com_users');
	$createGrp  = $user->authorise('core.admin', 'com_users');

	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_USER_MANAGER'), 'index.php?option=com_users&view=users', 'class:user'), $createUser);

	if ($createUser)
	{
		$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_ADD_USER'), 'index.php?option=com_users&task=user.add', 'class:newarticle'));
		$menu->getParent();
	}

	if ($createGrp)
	{
		$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_GROUPS'), 'index.php?option=com_users&view=groups', 'class:groups'), $createUser);

		if ($createUser)
		{
			$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_ADD_GROUP'), 'index.php?option=com_users&task=group.add', 'class:newarticle'));
			$menu->getParent();
		}

		$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_LEVELS'), 'index.php?option=com_users&view=levels', 'class:levels'), $createUser);

		if ($createUser)
		{
			$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_ADD_LEVEL'), 'index.php?option=com_users&task=level.add', 'class:newarticle'));
			$menu->getParent();
		}
	}

	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_NOTES'), 'index.php?option=com_users&view=notes', 'class:user-note'), $createUser);

	if ($createUser)
	{
		$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_USERS_ADD_NOTE'), 'index.php?option=com_users&task=note.add', 'class:newarticle'));
		$menu->getParent();
	}

	$menu->addChild(
		new JMenuNode(
			JText::_('MOD_MENU_COM_USERS_NOTE_CATEGORIES'), 'index.php?option=com_categories&view=categories&extension=com_users', 'class:category'),
		$createUser
	);

	if ($createUser)
	{
		$menu->addChild(
			new JMenuNode(
				JText::_('MOD_MENU_COM_CONTENT_NEW_CATEGORY'), 'index.php?option=com_categories&task=category.add&extension=com_users.notes',
				'class:newarticle'
			)
		);
		$menu->getParent();
	}

	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_MASS_MAIL_USERS'), 'index.php?option=com_users&view=mail', 'class:massmail'));

	$menu->getParent();
}

/*
 * Menus Submenu
 */
if ($user->authorise('core.manage', 'com_menus'))
{
	$menu->addChild(new JMenuNode(JText::_('Manage Menus'), '#'), true);
	$createMenu = $shownew && $user->authorise('core.create', 'com_menus');

	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_MENU_MANAGER'), 'index.php?option=com_menus&view=menus', 'class:menumgr'), $createMenu);

	if ($createMenu)
	{
		$menu->addChild(new JMenuNode(JText::_('MOD_MENU_MENU_MANAGER_NEW_MENU'), 'index.php?option=com_menus&view=menu&layout=edit', 'class:newarticle'));
		$menu->getParent();
	}

	$menu->addSeparator();

	// Menu Types
	foreach (ModMenuHelper::getMenus() as $menuType)
	{
		$alt = '*' . $menuType->sef . '*';

		if ($menuType->home == 0)
		{
			$titleicon = '';
		}
		elseif ($menuType->home == 1 && $menuType->language == '*')
		{
			$titleicon = ' <i class="icon-home"></i>';
		}
		elseif ($menuType->home > 1)
		{
			$titleicon = ' <span>'
				. JHtml::_('image', 'mod_languages/icon-16-language.png', $menuType->home, array('title' => JText::_('MOD_MENU_HOME_MULTIPLE')), true)
				. '</span>';
		}
		else
		{
			$image = JHtml::_('image', 'mod_languages/' . $menuType->image . '.gif', null, null, true, true);

			if (!$image)
			{
				$image = JHtml::_('image', 'mod_languages/icon-16-language.png', $alt, array('title' => $menuType->title_native), true);
			}
			else
			{
				$image = JHtml::_('image', 'mod_languages/' . $menuType->image . '.gif', $alt, array('title' => $menuType->title_native), true);
			}

			$titleicon = ' <span>' . $image . '</span>';
		}

		$menu->addChild(
			new JMenuNode(
				$menuType->title, 'index.php?option=com_menus&view=items&menutype=' . $menuType->menutype, 'class:menu', null, null, $titleicon
			),
			$createMenu
		);

		if ($createMenu)
		{
			$menu->addChild(
				new JMenuNode(
					JText::_('MOD_MENU_MENU_MANAGER_NEW_MENU_ITEM'), 'index.php?option=com_menus&view=item&layout=edit&menutype=' . $menuType->menutype,
					'class:newarticle')
			);
			$menu->getParent();
		}
	}

	$menu->getParent();
}

/*
 * Content Submenu
 */
if ($user->authorise('core.manage', 'com_content'))
{
	$menu->addChild(new JMenuNode(JText::_('Manage Content'), '#'), true);
	$createContent = $shownew && $user->authorise('core.create', 'com_content');
	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_CONTENT_ARTICLE_MANAGER'), 'index.php?option=com_content', 'class:article'), $createContent);

	if ($createContent)
	{
		$menu->addChild(
			new JMenuNode(JText::_('MOD_MENU_COM_CONTENT_NEW_ARTICLE'), 'index.php?option=com_content&task=article.add', 'class:newarticle')
		);
		$menu->getParent();
	}

	$menu->addChild(
		new JMenuNode(
			JText::_('MOD_MENU_COM_CONTENT_CATEGORY_MANAGER'), 'index.php?option=com_categories&extension=com_content', 'class:category'),
		$createContent
	);

	if ($createContent)
	{
		$menu->addChild(
			new JMenuNode(JText::_('MOD_MENU_COM_CONTENT_NEW_CATEGORY'), 'index.php?option=com_categories&task=category.add&extension=com_content', 'class:newarticle')
		);
		$menu->getParent();
	}

	$menu->addChild(new JMenuNode(JText::_('MOD_MENU_COM_CONTENT_FEATURED'), 'index.php?option=com_content&view=featured', 'class:featured'));

	if ($user->authorise('core.manage', 'com_media'))
	{
		$menu->addSeparator();
		$menu->addChild(new JMenuNode(JText::_('MOD_MENU_MEDIA_MANAGER'), 'index.php?option=com_media', 'class:media'));
	}

	$menu->getParent();
}

if ($user->authorise('core.manage', 'com_content'))
{
	$menu->addChild(new JMenuNode(JText::_('Manage Web Components'), '#'), true);
	$menu->addChild(new JMenuNode(JText::_('Manage Zuku Buzz'), 'index.php?option=com_buzz'));
	$menu->addChild(new JMenuNode(JText::_('Manage Announcements'), 'index.php?option=com_announcements'));
	$menu->addChild(new JMenuNode(JText::_('Manage Dealers/Resellers'), 'index.php?option=com_resellers'));
	$menu->addChild(new JMenuNode(JText::_('Manage Slider'), 'index.php?option=com_slidermanager'));
	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('Manage Products'), 'index.php?option=com_products'));
	$menu->addChild(new JMenuNode(JText::_('Manage Packages'), 'index.php?option=com_packages'));
	$menu->addChild(new JMenuNode(JText::_('Manage Channels'), 'index.php?option=com_channels'));
	$menu->addChild(new JMenuNode(JText::_('Manage TV Shows'), 'index.php?option=com_shows'));
	$menu->addChild(new JMenuNode(JText::_('Manage Entertainment'), 'index.php?option=com_entertainment'));
	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('Manage EPG'), 'index.php?option=com_epg'));
	$menu->addSeparator();
	$menu->addChild(new JMenuNode(JText::_('Customer Issues'), 'index.php?option=com_selfhelp'));
	$menu->getParent();
}

if ($user->authorise('core.manage', 'com_content'))
{
$menu->addChild(new JMenuNode(JText::_('Manage Modules'), 'index.php?option=com_modules'), true);
$menu->getParent();
}
