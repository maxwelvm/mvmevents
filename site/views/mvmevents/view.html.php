<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');

// import Joomla html for use with stylesheets
jimport('joomla.html.html');

/**
 * HTML View class for the UpdHelloWorld Component
 */
class MVMEventsViewMVMEvents extends JView
{
	// Overwriting JView display method
	function display($tpl = null) 
	{
		$app		= JFactory::getApplication();
		$params		= $app->getParams();
		$dispatcher = JDispatcher::getInstance();

		// Get some data from the models
		//$this->eventos	= $this->get('Eventos');
		
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}

		//$this->addDocStyle();
		
		// Display the view
        parent::display($tpl);

	}
	
	protected function addDocStyle()
	{
        $doc = JFactory::getDocument();
        $doc->addStyleSheet('media/com_eventosmvm/css/site.style.css');
		/*$doc->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
		$doc->addScript('media/com_cadastromvm/js/jquery.maskedinput.js');
		$doc->addScriptDeclaration('
			jQuery(function($){
			   $("#jform_fundacao").mask("99/99/9999");
			   $("#jform_telefone").mask("(99) 9999-9999?9");
			   $("#jform_fax").mask("(99) 9999-9999");
			   $("#jform_cpf").mask("999.999.999-99");
			   $("#buscarcpf").mask("999.999.999-99");
			   $("#jform_cnpj").mask("999.999.999/9999-99");
			   $("#jform_cep").mask("99.999-999");
			});
		');*/
		
    }

}
