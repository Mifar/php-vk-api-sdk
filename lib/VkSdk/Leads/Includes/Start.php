<?php

namespace VkSdk\Leads\Includes;

use lib\AutoFillObject;

/**
 * Class Start
 * @package VkSdk\Leads\Includes
 */
class Start
{

    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $test_mode;

    /**
     * @var string
     */
    private $vk_sid;

    /**
     * Information whether test mode is enabled
     *
     * @return integer
     */
    public function getTestMode()
    {
        return $this->test_mode;
    }

    /**
     * @return $this
     *
     * @param integer $test_mode
     */
    public function setTestMode($test_mode)
    {
        $this->test_mode = $test_mode;

        return $this;
    }

    /**
     * Session data
     *
     * @return string
     */
    public function getVkSid()
    {
        return $this->vk_sid;
    }

    /**
     * @return $this
     *
     * @param string $vk_sid
     */
    public function setVkSid($vk_sid)
    {
        $this->vk_sid = $vk_sid;

        return $this;
    }
}
