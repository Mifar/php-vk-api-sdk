<?php

namespace VkSdk\Users;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;

/**
 * Returns a list of IDs of followers of the user in question, sorted by date added, most recent first.
 * Class UsersGetFollowers
 * @package VkSdk\Users
 */
class UsersGetFollowers extends Request
{
    use AutoFillObject;

    /**
     * 'abl' — prepositional
     */
    const NAME_CASE_ABL = 'abl';

    /**
     * 'acc' — accusative
     */
    const NAME_CASE_ACC = 'acc';

    /**
     * 'dat' — dative
     */
    const NAME_CASE_DAT = 'dat';

    /**
     * 'gen' — genitive
     */
    const NAME_CASE_GEN = 'gen';

    /**
     * 'ins' — instrumental
     */
    const NAME_CASE_INS = 'ins';

    /**
     * 'nom' — nominative (default)
     */
    const NAME_CASE_NOM = 'nom';

    /**
     * @var integer
     */
    private $count;

    /**
     * @var UserFull[]
     */
    private $items;

    /**
     * @var array $fields
     */
    private $fields = [];

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city',
     * 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education',
     * 'online'.; see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * @return $this
     *
     * @param UserFull $item
     */
    public function addItem($item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * result in $this->getCount() and $this->getItems();
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setParameter('fields', $this->fields);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json->response);

                return true;
            }
        }

        return false;
    }

    /**
     * result in $this->getCount() and $this->getItems();
     *
     * @return bool
     */
    public function execute()
    {
        return $this->doRequest();
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * Total friends number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of followers to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * User ID
     *
     * @return UserFull[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "users.getFollowers";
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city',
     * 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education',
     * 'online'.; see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive ; 'dat' — dative;
     * 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional see self::NAME_CASE_* constants
     *
     * @return $this
     *
     * @param string $name_case
     */
    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of followers.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * User ID.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
