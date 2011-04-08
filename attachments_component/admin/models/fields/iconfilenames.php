<?php
/**
 * ???
 */

defined('JPATH_BASE') or die;

jimport('joomla.html.html');
jimport('joomla.form.formfield');

/**
 * Supports an HTML select list of icon filenames
 *
 * @package		Joomla.Administrator
 * @subpackage	com_weblinks
 * @since		1.6
 */
class JFormFieldIconfilenames extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type = 'Iconfilenames';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
		// Initialize variables.
		$html = array();

		// Construct the list of legal icon filenames
		$icon_filenames = array();
		require_once(JPATH_COMPONENT_SITE.DS.'file_types.php');
		foreach ( AttachmentsFileTypes::unique_icon_filenames() as $ifname) {
			$icon_filenames[] = JHTML::_('select.option', $ifname);
			}
		$icon_list = JHTML::_('select.genericlist',	 $icon_filenames, 'jform[icon_filename]',
							  'class="inputbox" size="1"', 'value', 'text', $this->value,
							  'jform_icon_filename'
							  );

		// Is it readonly?
		if ((string) $this->element['readonly'] == 'true') {
			// Create a read-only list (no name) with a hidden input to store the value.
			$html[] = $icon_list;
			$html[] = '<input type="hidden" name="'.$this->name.'" value="'.$this->value.'"/>';
			}
		else {
			// Create a regular list.
			$html[] = $icon_list;
		}

		return implode($html);
	}
}