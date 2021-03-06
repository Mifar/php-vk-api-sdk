<?php

namespace VkSdk\Video\Includes;

use lib\AutoFillObject;

/**
 * Class Video
 * @package VkSdk\Video\Includes
 */
class Video
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $access_key;

    /**
     * @var integer
     */
    private $adding_date;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_add;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_edit;

    /**
     * @var integer
     */
    private $comments;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var object
     */
    private $files;

    /**
     * @var integer
     */
    private $id;

    /**
     * See constants of class PropertyExists
     *
     * @var integer
     */
    private $live;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var string
     */
    private $photo_130;

    /**
     * @var string
     */
    private $photo_320;

    /**
     * @var string
     */
    private $photo_800;

    /**
     * @var string
     */
    private $player;

    /**
     * See constants of class PropertyExists
     *
     * @var integer
     */
    private $processing;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $views;

    /**
     * Video access key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * @return $this
     *
     * @param string $access_key
     */
    public function setAccessKey($access_key)
    {
        $this->access_key = $access_key;

        return $this;
    }

    /**
     * Date when the video has been added in Unixtime
     *
     * @return integer
     */
    public function getAddingDate()
    {
        return $this->adding_date;
    }

    /**
     * @return $this
     *
     * @param integer $adding_date
     */
    public function setAddingDate($adding_date)
    {
        $this->adding_date = $adding_date;

        return $this;
    }

    /**
     * Information whether current user can add the video
     *
     * @return integer
     */
    public function getCanAdd()
    {
        return $this->can_add;
    }

    /**
     * @return $this
     *
     * @param integer $can_add
     */
    public function setCanAdd($can_add)
    {
        $this->can_add = $can_add;

        return $this;
    }

    /**
     * Information whether current user can edit the video
     *
     * @return integer
     */
    public function getCanEdit()
    {
        return $this->can_edit;
    }

    /**
     * @return $this
     *
     * @param integer $can_edit
     */
    public function setCanEdit($can_edit)
    {
        $this->can_edit = $can_edit;

        return $this;
    }

    /**
     * Number of comments
     *
     * @return integer
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return $this
     *
     * @param integer $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Date when video has been uploaded in Unixtime
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Video description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Video duration in seconds
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return $this
     *
     * @param integer $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return object
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @return $this
     *
     * @param object $files
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Video ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns if the video is live translation
     *
     * @return integer
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * @return $this
     *
     * @param integer $live
     */
    public function setLive($live)
    {
        $this->live = $live;

        return $this;
    }

    /**
     * Video owner ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * URL of the preview image with 130 px in width
     *
     * @return string
     */
    public function getPhoto130()
    {
        return $this->photo_130;
    }

    /**
     * @return $this
     *
     * @param string $photo_130
     */
    public function setPhoto130($photo_130)
    {
        $this->photo_130 = $photo_130;

        return $this;
    }

    /**
     * URL of the preview image with 320 px in width
     *
     * @return string
     */
    public function getPhoto320()
    {
        return $this->photo_320;
    }

    /**
     * @return $this
     *
     * @param string $photo_320
     */
    public function setPhoto320($photo_320)
    {
        $this->photo_320 = $photo_320;

        return $this;
    }

    /**
     * URL of the preview image with 800 px in width
     *
     * @return string
     */
    public function getPhoto800()
    {
        return $this->photo_800;
    }

    /**
     * @return $this
     *
     * @param string $photo_800
     */
    public function setPhoto800($photo_800)
    {
        $this->photo_800 = $photo_800;

        return $this;
    }

    /**
     * URL of the page with a player that can be used to play the video in the browser.
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @return $this
     *
     * @param string $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Returns if the video is processing
     *
     * @return integer
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * @return $this
     *
     * @param integer $processing
     */
    public function setProcessing($processing)
    {
        $this->processing = $processing;

        return $this;
    }

    /**
     * Video title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Number of views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @return $this
     *
     * @param integer $views
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }
}
