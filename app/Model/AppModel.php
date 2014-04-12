<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    public $actsAs = array('Acl' => array('type' => 'requester'),'Containable');

    public function parentNode() {
        if($this->alias=='User'){
            if (!$this->id && empty($this->data)) {
                return null;
            }
            if (isset($this->data['User']['role_id'])) {
                $groupId = $this->data['User']['role_id'];
            } else {
                $groupId = $this->field('role_id');
            }
            if (!$groupId) {
                return null;
            } else {
                return array('Role' => array('id' => $groupId));
            }
        }

        if($this->alias=='Role'){
            return null;
        }

    }


}
