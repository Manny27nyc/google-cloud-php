<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A network peering attached to a network resource. The message includes the peering name, peer network, peering state, and a flag indicating whether Google Compute Engine should automatically create routes for the peering.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkPeering</code>
 */
class NetworkPeering extends \Google\Protobuf\Internal\Message
{
    /**
     * This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool auto_create_routes = 57454941;</code>
     */
    private $auto_create_routes = false;
    /**
     * Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool exchange_subnet_routes = 26322256;</code>
     */
    private $exchange_subnet_routes = false;
    /**
     * Whether to export the custom routes to peer network.
     *
     * Generated from protobuf field <code>bool export_custom_routes = 60281485;</code>
     */
    private $export_custom_routes = false;
    /**
     * Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always exported to peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>bool export_subnet_routes_with_public_ip = 97940834;</code>
     */
    private $export_subnet_routes_with_public_ip = false;
    /**
     * Whether to import the custom routes from peer network.
     *
     * Generated from protobuf field <code>bool import_custom_routes = 197982398;</code>
     */
    private $import_custom_routes = false;
    /**
     * Whether subnet routes with public IP range are imported. The default value is false. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always imported from peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>bool import_subnet_routes_with_public_ip = 14419729;</code>
     */
    private $import_subnet_routes_with_public_ip = false;
    /**
     * Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     */
    private $network = '';
    /**
     * Maximum Transmission Unit in bytes.
     *
     * Generated from protobuf field <code>int32 peer_mtu = 69584721;</code>
     */
    private $peer_mtu = 0;
    /**
     * [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkPeering.State state = 109757585;</code>
     */
    private $state = 0;
    /**
     * [Output Only] Details about the current state of the peering.
     *
     * Generated from protobuf field <code>string state_details = 95566996;</code>
     */
    private $state_details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_create_routes
     *           This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *     @type bool $exchange_subnet_routes
     *           Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *     @type bool $export_custom_routes
     *           Whether to export the custom routes to peer network.
     *     @type bool $export_subnet_routes_with_public_ip
     *           Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always exported to peers and are not controlled by this field.
     *     @type bool $import_custom_routes
     *           Whether to import the custom routes from peer network.
     *     @type bool $import_subnet_routes_with_public_ip
     *           Whether subnet routes with public IP range are imported. The default value is false. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always imported from peers and are not controlled by this field.
     *     @type string $name
     *           Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $network
     *           The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *     @type int $peer_mtu
     *           Maximum Transmission Unit in bytes.
     *     @type int $state
     *           [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     *     @type string $state_details
     *           [Output Only] Details about the current state of the peering.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool auto_create_routes = 57454941;</code>
     * @return bool
     */
    public function getAutoCreateRoutes()
    {
        return $this->auto_create_routes;
    }

    /**
     * This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool auto_create_routes = 57454941;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoCreateRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_create_routes = $var;

        return $this;
    }

    /**
     * Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool exchange_subnet_routes = 26322256;</code>
     * @return bool
     */
    public function getExchangeSubnetRoutes()
    {
        return $this->exchange_subnet_routes;
    }

    /**
     * Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool exchange_subnet_routes = 26322256;</code>
     * @param bool $var
     * @return $this
     */
    public function setExchangeSubnetRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->exchange_subnet_routes = $var;

        return $this;
    }

    /**
     * Whether to export the custom routes to peer network.
     *
     * Generated from protobuf field <code>bool export_custom_routes = 60281485;</code>
     * @return bool
     */
    public function getExportCustomRoutes()
    {
        return $this->export_custom_routes;
    }

    /**
     * Whether to export the custom routes to peer network.
     *
     * Generated from protobuf field <code>bool export_custom_routes = 60281485;</code>
     * @param bool $var
     * @return $this
     */
    public function setExportCustomRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->export_custom_routes = $var;

        return $this;
    }

    /**
     * Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always exported to peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>bool export_subnet_routes_with_public_ip = 97940834;</code>
     * @return bool
     */
    public function getExportSubnetRoutesWithPublicIp()
    {
        return $this->export_subnet_routes_with_public_ip;
    }

    /**
     * Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always exported to peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>bool export_subnet_routes_with_public_ip = 97940834;</code>
     * @param bool $var
     * @return $this
     */
    public function setExportSubnetRoutesWithPublicIp($var)
    {
        GPBUtil::checkBool($var);
        $this->export_subnet_routes_with_public_ip = $var;

        return $this;
    }

    /**
     * Whether to import the custom routes from peer network.
     *
     * Generated from protobuf field <code>bool import_custom_routes = 197982398;</code>
     * @return bool
     */
    public function getImportCustomRoutes()
    {
        return $this->import_custom_routes;
    }

    /**
     * Whether to import the custom routes from peer network.
     *
     * Generated from protobuf field <code>bool import_custom_routes = 197982398;</code>
     * @param bool $var
     * @return $this
     */
    public function setImportCustomRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->import_custom_routes = $var;

        return $this;
    }

    /**
     * Whether subnet routes with public IP range are imported. The default value is false. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always imported from peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>bool import_subnet_routes_with_public_ip = 14419729;</code>
     * @return bool
     */
    public function getImportSubnetRoutesWithPublicIp()
    {
        return $this->import_subnet_routes_with_public_ip;
    }

    /**
     * Whether subnet routes with public IP range are imported. The default value is false. The IPv4 special-use ranges (https://en.wikipedia.org/wiki/IPv4#Special_addresses) are always imported from peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>bool import_subnet_routes_with_public_ip = 14419729;</code>
     * @param bool $var
     * @return $this
     */
    public function setImportSubnetRoutesWithPublicIp($var)
    {
        GPBUtil::checkBool($var);
        $this->import_subnet_routes_with_public_ip = $var;

        return $this;
    }

    /**
     * Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Maximum Transmission Unit in bytes.
     *
     * Generated from protobuf field <code>int32 peer_mtu = 69584721;</code>
     * @return int
     */
    public function getPeerMtu()
    {
        return $this->peer_mtu;
    }

    /**
     * Maximum Transmission Unit in bytes.
     *
     * Generated from protobuf field <code>int32 peer_mtu = 69584721;</code>
     * @param int $var
     * @return $this
     */
    public function setPeerMtu($var)
    {
        GPBUtil::checkInt32($var);
        $this->peer_mtu = $var;

        return $this;
    }

    /**
     * [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkPeering.State state = 109757585;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkPeering.State state = 109757585;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NetworkPeering\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * [Output Only] Details about the current state of the peering.
     *
     * Generated from protobuf field <code>string state_details = 95566996;</code>
     * @return string
     */
    public function getStateDetails()
    {
        return $this->state_details;
    }

    /**
     * [Output Only] Details about the current state of the peering.
     *
     * Generated from protobuf field <code>string state_details = 95566996;</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_details = $var;

        return $this;
    }

}

