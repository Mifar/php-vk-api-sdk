<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoUpload;
use VkSdk\Photos\Includes\UploadResult;

/**
 * Returns the server address for photo upload.
 * Class PhotosGetUploadServer
 *
 * @package VkSdk\Photos
 */
class PhotosGetUploadServer extends Request
{

    use AutoFillObject;

    /**
     * @var PhotoUpload
     */
    private $response;

    /**
     * @var UploadResult $uploadResult
     */
    private $uploadResult;

    /**
     * @return UploadResult
     */
    public function getUploadResult()
    {
        return $this->uploadResult;
    }

    /**
     * @param array $files
     *
     * @return bool
     */
    public function upload($files)
    {
        $result = $this->uploadFiles($this->getResponse()->getUploadUrl(), $files);
        if ($result && ($json = $this->getJsonResponse())) {
            $this->uploadResult = new UploadResult();
            $this->uploadResult->fillByJson($json);

            return true;
        }

        return false;
    }

    /**
     * @return PhotoUpload
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * result in $this->getResponse();
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json);

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
        return "photos.getUploadServer";
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
     * Album ID.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
    }

    /**
     * ID of community that owns the album (if the photo will be uploaded to a community album).
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
