<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing connection draining configuration.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ConnectionDraining</code>
 */
class ConnectionDraining extends \Google\Protobuf\Internal\Message
{
    /**
     * The amount of time in seconds to allow existing connections to persist while on unhealthy backend VMs. Only applicable if the protocol is not UDP. The valid range is [0, 3600].
     *
     * Generated from protobuf field <code>int32 draining_timeout_sec = 225127070;</code>
     */
    private $draining_timeout_sec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $draining_timeout_sec
     *           The amount of time in seconds to allow existing connections to persist while on unhealthy backend VMs. Only applicable if the protocol is not UDP. The valid range is [0, 3600].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The amount of time in seconds to allow existing connections to persist while on unhealthy backend VMs. Only applicable if the protocol is not UDP. The valid range is [0, 3600].
     *
     * Generated from protobuf field <code>int32 draining_timeout_sec = 225127070;</code>
     * @return int
     */
    public function getDrainingTimeoutSec()
    {
        return $this->draining_timeout_sec;
    }

    /**
     * The amount of time in seconds to allow existing connections to persist while on unhealthy backend VMs. Only applicable if the protocol is not UDP. The valid range is [0, 3600].
     *
     * Generated from protobuf field <code>int32 draining_timeout_sec = 225127070;</code>
     * @param int $var
     * @return $this
     */
    public function setDrainingTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->draining_timeout_sec = $var;

        return $this;
    }

}

