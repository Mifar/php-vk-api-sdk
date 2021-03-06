<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoUpload;

/**
 * Returns the server address for photo upload onto a user's wall.
 * Class PhotosGetWallUploadServer
 * @package VkSdk\Photos
 */
class PhotosGetWallUploadServer extends Request
{

    use AutoFillObject;

    /**
     * @var PhotoUpload
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
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
        return "photos.getWallUploadServer";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Photos\Includes\PhotoUpload',
        ];
    }

    /**
     * ID of community to whose wall the photo will be uploaded.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }
}
