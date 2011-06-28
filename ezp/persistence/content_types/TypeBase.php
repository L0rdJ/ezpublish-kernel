<?php
/**
 * File containing the TypeBase class
 *
 * @copyright Copyright (C) 1999-2011 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

namespace ezp\persistence\content_types;

/**
 * @package ezp.persistence.content_types
 */
class TypeBase 
{
	/**
	 * @AttributeType string
	 */
	public $identifier;
	/**
	 * @AttributeType array
	 */
	public $name;
	/**
	 * @AttributeType array
	 */
	public $description;
	/**
	 * @AttributeType int
	 */
	public $id;
}
?>