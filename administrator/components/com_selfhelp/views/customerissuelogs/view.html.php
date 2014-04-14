<?php
/**
 * @version     1.0.0
 * @package     com_selfhelp
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pkaranja@aimgroup.co.tz> - http://www.aimgroup.co.tz
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View class for a list of Selfhelp.
 */
class SelfhelpViewCustomerissuelogs extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $state;

	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		$this->state		= $this->get('State');
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');

		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			throw new Exception(implode("\n", $errors));
		}
        
		SelfhelpHelper::addSubmenu('customerissuelogs');
        
		$this->addToolbar();
        
        $this->sidebar = JHtmlSidebar::render();
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @since	1.6
	 */
	protected function addToolbar()
	{
		require_once JPATH_COMPONENT.'/helpers/selfhelp.php';

		$state	= $this->get('State');
		$canDo	= SelfhelpHelper::getActions($state->get('filter.category_id'));

		JToolBarHelper::title(JText::_('COM_SELFHELP_TITLE_CUSTOMERISSUELOGS'), 'customerissuelogs.png');

        //Check if the form exists before showing the add/edit buttons
        $formPath = JPATH_COMPONENT_ADMINISTRATOR.'/views/issues';
        if (file_exists($formPath)) {

            if ($canDo->get('core.create')) {
			    JToolBarHelper::addNew('issues.add','JTOOLBAR_NEW');
		    }

		    if ($canDo->get('core.edit') && isset($this->items[0])) {
			    JToolBarHelper::editList('issues.edit','JTOOLBAR_EDIT');
		    }

        }

		if ($canDo->get('core.edit.state')) {

            if (isset($this->items[0]->state)) {
			    JToolBarHelper::divider();
			    JToolBarHelper::custom('customerissuelogs.publish', 'publish.png', 'publish_f2.png','JTOOLBAR_PUBLISH', true);
			    JToolBarHelper::custom('customerissuelogs.unpublish', 'unpublish.png', 'unpublish_f2.png', 'JTOOLBAR_UNPUBLISH', true);
            } else if (isset($this->items[0])) {
                //If this component does not use state then show a direct delete button as we can not trash
                JToolBarHelper::deleteList('', 'customerissuelogs.delete','JTOOLBAR_DELETE');
            }

            if (isset($this->items[0]->state)) {
			    JToolBarHelper::divider();
			    JToolBarHelper::archiveList('customerissuelogs.archive','JTOOLBAR_ARCHIVE');
            }
            if (isset($this->items[0]->checked_out)) {
            	JToolBarHelper::custom('customerissuelogs.checkin', 'checkin.png', 'checkin_f2.png', 'JTOOLBAR_CHECKIN', true);
            }
		}
        
        //Show trash and delete for components that uses the state field
        if (isset($this->items[0]->state)) {
		    if ($state->get('filter.state') == -2 && $canDo->get('core.delete')) {
			    JToolBarHelper::deleteList('', 'customerissuelogs.delete','JTOOLBAR_EMPTY_TRASH');
			    JToolBarHelper::divider();
		    } else if ($canDo->get('core.edit.state')) {
			    JToolBarHelper::trash('customerissuelogs.trash','JTOOLBAR_TRASH');
			    JToolBarHelper::divider();
		    }
        }

		if ($canDo->get('core.admin')) {
			JToolBarHelper::preferences('com_selfhelp');
		}
        
        //Set sidebar action - New in 3.0
		JHtmlSidebar::setAction('index.php?option=com_selfhelp&view=customerissuelogs');
        
        $this->extra_sidebar = '';
        
		JHtmlSidebar::addFilter(

			JText::_('JOPTION_SELECT_PUBLISHED'),

			'filter_published',

			JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), "value", "text", $this->state->get('filter.state'), true)

		);

			//Filter for the field date
			$this->extra_sidebar .= '<small><label for="filter_from_date">From Date</label></small>';
			$this->extra_sidebar .= JHtml::_('calendar', $this->state->get('filter.date.from'), 'filter_from_date', 'filter_from_date', '%Y-%m-%d', 'style="width:142px;" onchange="this.form.submit();"');
			$this->extra_sidebar .= '<small><label for="filter_to_date">To Date</label></small>';
			$this->extra_sidebar .= JHtml::_('calendar', $this->state->get('filter.date.to'), 'filter_to_date', 'filter_to_date', '%Y-%m-%d', 'style="width:142px;" onchange="this.form.submit();"');
			$this->extra_sidebar .= '<hr class="hr-condensed">';

        
	}
    
	protected function getSortFields()
	{
		return array(
		'a.id' => JText::_('JGRID_HEADING_ID'),
		'a.ordering' => JText::_('JGRID_HEADING_ORDERING'),
		'a.state' => JText::_('JSTATUS'),
		'a.checked_out' => JText::_('COM_SELFHELP_CUSTOMERISSUELOGS_CHECKED_OUT'),
		'a.checked_out_time' => JText::_('COM_SELFHELP_CUSTOMERISSUELOGS_CHECKED_OUT_TIME'),
		'a.created_by' => JText::_('COM_SELFHELP_CUSTOMERISSUELOGS_CREATED_BY'),
		'a.customer' => JText::_('COM_SELFHELP_CUSTOMERISSUELOGS_CUSTOMER'),
		'a.account' => JText::_('COM_SELFHELP_CUSTOMERISSUELOGS_ACCOUNT'),
		'a.date' => JText::_('COM_SELFHELP_CUSTOMERISSUELOGS_DATE'),
		'a.issue' => JText::_('COM_SELFHELP_CUSTOMERISSUELOGS_ISSUE'),
		);
	}

    
}
