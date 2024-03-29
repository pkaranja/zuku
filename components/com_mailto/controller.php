<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_mailto
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * @package     Joomla.Site
 * @subpackage  com_mailto
 * @since       1.5
 */
class MailtoController extends JControllerLegacy
{
	/**
	 * Show the form so that the user can send the link to someone
	 *
	 * @access public
	 * @since 1.5
	 */
	public function mailto()
	{
		$session = JFactory::getSession();
		$session->set('com_mailto.formtime', time());
		$this->input->set('view', 'mailto');
		$this->display();
	}

	/**
	 * Send the message and display a notice
	 *
	 * @access public
	 * @since 1.5
	 */
	public function send()
	{
		// Check for request forgeries
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		$app     = JFactory::getApplication();
		$session = JFactory::getSession();

		$timeout = $session->get('com_mailto.formtime', 0);
		if ($timeout == 0 || time() - $timeout < 20)
		{
			JError::raiseNotice(500, JText::_('COM_MAILTO_EMAIL_NOT_SENT'));
			return $this->mailto();
		}

		$SiteName = $app->getCfg('sitename');

		$link     = MailtoHelper::validateHash($this->input->get('link', '', 'post'));

		// Verify that this is a local link
		if (!$link || !JUri::isInternal($link))
		{
			//Non-local url...
			JError::raiseNotice(500, JText::_('COM_MAILTO_EMAIL_NOT_SENT'));
			return $this->mailto();
		}

		// An array of email headers we do not want to allow as input
		$headers = array (	'Content-Type:',
							'MIME-Version:',
							'Content-Transfer-Encoding:',
							'bcc:',
							'cc:');

		// An array of the input fields to scan for injected headers
		$fields = array(
			'mailto',
			'sender',
			'from',
			'subject',
		);

		/*
		 * Here is the meat and potatoes of the header injection test.  We
		 * iterate over the array of form input and check for header strings.
		 * If we find one, send an unauthorized header and die.
		 */
		foreach ($fields as $field)
		{
			foreach ($headers as $header)
			{
				if (strpos($_POST[$field], $header) !== false)
				{
					JError::raiseError(403, '');
				}
			}
		}

		/*
		 * Free up memory
		 */
		unset ($headers, $fields);

		$email           = $this->input->post->getString('mailto', '');
		$sender          = $this->input->post->getString('sender', '');
		$from            = $this->input->post->getString('from', '');
		$subject_default = JText::sprintf('COM_MAILTO_SENT_BY', $sender);
		$subject         = $this->input->post->getString('subject', $subject_default);

		// Check for a valid to address
		$error	= false;
		if (! $email  || ! JMailHelper::isEmailAddress($email))
		{
			$error	= JText::sprintf('COM_MAILTO_EMAIL_INVALID', $email);
			JError::raiseWarning(0, $error);
		}

		// Check for a valid from address
		if (! $from || ! JMailHelper::isEmailAddress($from))
		{
			$error	= JText::sprintf('COM_MAILTO_EMAIL_INVALID', $from);
			JError::raiseWarning(0, $error);
		}

		if ($error)
		{
			return $this->mailto();
		}

		// Build the message to send
		$msg	= JText::_('COM_MAILTO_EMAIL_MSG');

		$link = $link;
		$body	= sprintf($msg, $SiteName, $sender, $from, $link);

		// Clean the email data
		$subject = JMailHelper::cleanSubject($subject);
		$body	 = JMailHelper::cleanBody($body);

		// To send we need to use punycode.
		$from = JStringPunycode::emailToPunycode($from);
		$from	 = JMailHelper::cleanAddress($from);
		$email = JStringPunycode::emailToPunycode($email);

		// Send the email
		if (JFactory::getMailer()->sendMail($from, $sender, $email, $subject, $body) !== true)
		{
			JError::raiseNotice(500, JText::_('COM_MAILTO_EMAIL_NOT_SENT'));
			return $this->mailto();
		}

		$this->input->set('view', 'sent');
		$this->display();
	}

	//Ptah
	public function sendEmail(){
		$recepient=JRequest::getVar("recepient", "pkaranja@aimgroup,co.tz");
		$sender=JRequest::getVar("sender", "no-reply@zuku.co.ke");
		$subject=JRequest::getVar("subject", "!!!Spambot alert on Zuku Website!!!");
		$message=JRequest::getVar("message", "Suspicious behaviour on zuku forms!");

		// Check for a valid to address
		if (! $recepient  || ! JMailHelper::isEmailAddress($recepient)){
			$error	= JText::sprintf('COM_MAILTO_EMAIL_INVALID', $recepient);
			JError::raiseWarning(0, $error);
		}

		// Check for a valid from address
		if (! $sender || ! JMailHelper::isEmailAddress($sender)){
			$error	= JText::sprintf('COM_MAILTO_EMAIL_INVALID', $sender);
			JError::raiseWarning(0, $error);
		}

		// Clean the email data
		$subject = JMailHelper::cleanSubject($subject);
		$body	 = JMailHelper::cleanBody($message);

		// To send we need to use punycode.
		$sender = JStringPunycode::emailToPunycode($sender);
		$sender	 = JMailHelper::cleanAddress($sender);

		$recepient = JStringPunycode::emailToPunycode($recepient);
		$recepient	 = JMailHelper::cleanAddress($recepient);

		// Send the email
		if (JFactory::getMailer()->sendMail($sender, $sender, $recepient, $subject, $body) !== true)
		{
			JError::raiseNotice(500, JText::_('COM_MAILTO_EMAIL_NOT_SENT'));
			return $this->mailto();
		}
	

	}
}
