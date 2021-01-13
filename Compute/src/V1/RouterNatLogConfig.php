<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of logging on a NAT.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterNatLogConfig</code>
 */
class RouterNatLogConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether or not to export logs. This is false by default.
     *
     * Generated from protobuf field <code>bool enable = 43328899;</code>
     */
    private $enable = false;
    /**
     * Specify the desired filtering of logs on this NAT. If unspecified, logs are exported for all connections handled by this NAT. This option can take one of the following values:
     * - ERRORS_ONLY: Export logs only for connection failures.
     * - TRANSLATIONS_ONLY: Export logs only for successful connections.
     * - ALL: Export logs for all connections, successful and unsuccessful.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RouterNatLogConfig.Filter filter = 67685240;</code>
     */
    private $filter = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable
     *           Indicates whether or not to export logs. This is false by default.
     *     @type int $filter
     *           Specify the desired filtering of logs on this NAT. If unspecified, logs are exported for all connections handled by this NAT. This option can take one of the following values:
     *           - ERRORS_ONLY: Export logs only for connection failures.
     *           - TRANSLATIONS_ONLY: Export logs only for successful connections.
     *           - ALL: Export logs for all connections, successful and unsuccessful.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether or not to export logs. This is false by default.
     *
     * Generated from protobuf field <code>bool enable = 43328899;</code>
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Indicates whether or not to export logs. This is false by default.
     *
     * Generated from protobuf field <code>bool enable = 43328899;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkBool($var);
        $this->enable = $var;

        return $this;
    }

    /**
     * Specify the desired filtering of logs on this NAT. If unspecified, logs are exported for all connections handled by this NAT. This option can take one of the following values:
     * - ERRORS_ONLY: Export logs only for connection failures.
     * - TRANSLATIONS_ONLY: Export logs only for successful connections.
     * - ALL: Export logs for all connections, successful and unsuccessful.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RouterNatLogConfig.Filter filter = 67685240;</code>
     * @return int
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Specify the desired filtering of logs on this NAT. If unspecified, logs are exported for all connections handled by this NAT. This option can take one of the following values:
     * - ERRORS_ONLY: Export logs only for connection failures.
     * - TRANSLATIONS_ONLY: Export logs only for successful connections.
     * - ALL: Export logs for all connections, successful and unsuccessful.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RouterNatLogConfig.Filter filter = 67685240;</code>
     * @param int $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\RouterNatLogConfig\Filter::class);
        $this->filter = $var;

        return $this;
    }

}

