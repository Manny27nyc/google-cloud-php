<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the IP ranges that want to use NAT for a subnetwork.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterNatSubnetworkToNat</code>
 */
class RouterNatSubnetworkToNat extends \Google\Protobuf\Internal\Message
{
    /**
     * URL for the subnetwork resource that will use NAT.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * A list of the secondary ranges of the Subnetwork that are allowed to use NAT. This can be populated only if "LIST_OF_SECONDARY_IP_RANGES" is one of the values in source_ip_ranges_to_nat.
     *
     * Generated from protobuf field <code>repeated string secondary_ip_range_names = 264315097;</code>
     */
    private $secondary_ip_range_names;
    /**
     * Specify the options for NAT ranges in the Subnetwork. All options of a single value are valid except NAT_IP_RANGE_OPTION_UNSPECIFIED. The only valid option with multiple values is: ["PRIMARY_IP_RANGE", "LIST_OF_SECONDARY_IP_RANGES"] Default: [ALL_IP_RANGES]
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatSubnetworkToNat.SourceIpRangesToNat source_ip_ranges_to_nat = 119874930;</code>
     */
    private $source_ip_ranges_to_nat;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           URL for the subnetwork resource that will use NAT.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $secondary_ip_range_names
     *           A list of the secondary ranges of the Subnetwork that are allowed to use NAT. This can be populated only if "LIST_OF_SECONDARY_IP_RANGES" is one of the values in source_ip_ranges_to_nat.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $source_ip_ranges_to_nat
     *           Specify the options for NAT ranges in the Subnetwork. All options of a single value are valid except NAT_IP_RANGE_OPTION_UNSPECIFIED. The only valid option with multiple values is: ["PRIMARY_IP_RANGE", "LIST_OF_SECONDARY_IP_RANGES"] Default: [ALL_IP_RANGES]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * URL for the subnetwork resource that will use NAT.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * URL for the subnetwork resource that will use NAT.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A list of the secondary ranges of the Subnetwork that are allowed to use NAT. This can be populated only if "LIST_OF_SECONDARY_IP_RANGES" is one of the values in source_ip_ranges_to_nat.
     *
     * Generated from protobuf field <code>repeated string secondary_ip_range_names = 264315097;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondaryIpRangeNames()
    {
        return $this->secondary_ip_range_names;
    }

    /**
     * A list of the secondary ranges of the Subnetwork that are allowed to use NAT. This can be populated only if "LIST_OF_SECONDARY_IP_RANGES" is one of the values in source_ip_ranges_to_nat.
     *
     * Generated from protobuf field <code>repeated string secondary_ip_range_names = 264315097;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondaryIpRangeNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->secondary_ip_range_names = $arr;

        return $this;
    }

    /**
     * Specify the options for NAT ranges in the Subnetwork. All options of a single value are valid except NAT_IP_RANGE_OPTION_UNSPECIFIED. The only valid option with multiple values is: ["PRIMARY_IP_RANGE", "LIST_OF_SECONDARY_IP_RANGES"] Default: [ALL_IP_RANGES]
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatSubnetworkToNat.SourceIpRangesToNat source_ip_ranges_to_nat = 119874930;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSourceIpRangesToNat()
    {
        return $this->source_ip_ranges_to_nat;
    }

    /**
     * Specify the options for NAT ranges in the Subnetwork. All options of a single value are valid except NAT_IP_RANGE_OPTION_UNSPECIFIED. The only valid option with multiple values is: ["PRIMARY_IP_RANGE", "LIST_OF_SECONDARY_IP_RANGES"] Default: [ALL_IP_RANGES]
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatSubnetworkToNat.SourceIpRangesToNat source_ip_ranges_to_nat = 119874930;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSourceIpRangesToNat($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Compute\V1\RouterNatSubnetworkToNat\SourceIpRangesToNat::class);
        $this->source_ip_ranges_to_nat = $arr;

        return $this;
    }

}

