<?php

namespace VkSdk\Storage;

use VkSdk\Includes\Request;

/**
 * Saves a value of variable with the name set by 'key' parameter.
 * Class StorageSet
 * @package VkSdk\Storage
 */
class StorageSet extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["key"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "storage.set";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return $this
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->vkarg_key = $key;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->vkarg_value = $value;

        return $this;
    }
}
