<?php

/**
 * Repository for Form Roles
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Core\Entity;

use Ushahidi\Core\Entity\Repository\EntityGet;
use Ushahidi\Core\Entity\Repository\EntityExists;

interface FormRoleRepository extends
    EntityGet,
    EntityExists
{

	/**
	 * @param  int $form_id
	 * @return [Ushahidi\Core\Entity\FormRole, ...]
	 */
	public function getByForm($form_id);

	/**
	 * @param  int $id
	 * @param  int $form_id
	 * @return [Ushahidi\Core\Entity\FormRole, ...]
	 */
	public function existsInForm($role_id, $form_id);

}
