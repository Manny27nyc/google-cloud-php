<?php
/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/version.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\CreateVersionRequest;
use Google\Cloud\Dialogflow\V2\DeleteVersionRequest;
use Google\Cloud\Dialogflow\V2\GetVersionRequest;
use Google\Cloud\Dialogflow\V2\ListVersionsRequest;
use Google\Cloud\Dialogflow\V2\ListVersionsResponse;
use Google\Cloud\Dialogflow\V2\UpdateVersionRequest;
use Google\Cloud\Dialogflow\V2\Version;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [Versions][google.cloud.dialogflow.v2.Version].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $versionsClient = new VersionsClient();
 * try {
 *     $formattedParent = $versionsClient->agentName('[PROJECT]');
 *     $version = new Version();
 *     $response = $versionsClient->createVersion($formattedParent, $version);
 * } finally {
 *     $versionsClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class VersionsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.v2.Versions';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static $agentNameTemplate;

    private static $projectAgentNameTemplate;

    private static $projectLocationAgentNameTemplate;

    private static $projectLocationVersionNameTemplate;

    private static $projectVersionNameTemplate;

    private static $versionNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/versions_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/versions_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/versions_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/versions_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAgentNameTemplate()
    {
        if (self::$agentNameTemplate == null) {
            self::$agentNameTemplate = new PathTemplate('projects/{project}/agent');
        }

        return self::$agentNameTemplate;
    }

    private static function getProjectAgentNameTemplate()
    {
        if (self::$projectAgentNameTemplate == null) {
            self::$projectAgentNameTemplate = new PathTemplate('projects/{project}/agent');
        }

        return self::$projectAgentNameTemplate;
    }

    private static function getProjectLocationAgentNameTemplate()
    {
        if (self::$projectLocationAgentNameTemplate == null) {
            self::$projectLocationAgentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agent');
        }

        return self::$projectLocationAgentNameTemplate;
    }

    private static function getProjectLocationVersionNameTemplate()
    {
        if (self::$projectLocationVersionNameTemplate == null) {
            self::$projectLocationVersionNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agent/versions/{version}');
        }

        return self::$projectLocationVersionNameTemplate;
    }

    private static function getProjectVersionNameTemplate()
    {
        if (self::$projectVersionNameTemplate == null) {
            self::$projectVersionNameTemplate = new PathTemplate('projects/{project}/agent/versions/{version}');
        }

        return self::$projectVersionNameTemplate;
    }

    private static function getVersionNameTemplate()
    {
        if (self::$versionNameTemplate == null) {
            self::$versionNameTemplate = new PathTemplate('projects/{project}/agent/versions/{version}');
        }

        return self::$versionNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'agent' => self::getAgentNameTemplate(),
                'projectAgent' => self::getProjectAgentNameTemplate(),
                'projectLocationAgent' => self::getProjectLocationAgentNameTemplate(),
                'projectLocationVersion' => self::getProjectLocationVersionNameTemplate(),
                'projectVersion' => self::getProjectVersionNameTemplate(),
                'version' => self::getVersionNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted agent resource.
     */
    public static function agentName($project)
    {
        return self::getAgentNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_agent resource.
     *
     * @param string $project
     *
     * @return string The formatted project_agent resource.
     */
    public static function projectAgentName($project)
    {
        return self::getProjectAgentNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location_agent resource.
     */
    public static function projectLocationAgentName($project, $location)
    {
        return self::getProjectLocationAgentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_version resource.
     *
     * @param string $project
     * @param string $location
     * @param string $version
     *
     * @return string The formatted project_location_version resource.
     */
    public static function projectLocationVersionName($project, $location, $version)
    {
        return self::getProjectLocationVersionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'version' => $version,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_version resource.
     *
     * @param string $project
     * @param string $version
     *
     * @return string The formatted project_version resource.
     */
    public static function projectVersionName($project, $version)
    {
        return self::getProjectVersionNameTemplate()->render([
            'project' => $project,
            'version' => $version,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a version
     * resource.
     *
     * @param string $project
     * @param string $version
     *
     * @return string The formatted version resource.
     */
    public static function versionName($project, $version)
    {
        return self::getVersionNameTemplate()->render([
            'project' => $project,
            'version' => $version,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/agent
     * - projectAgent: projects/{project}/agent
     * - projectLocationAgent: projects/{project}/locations/{location}/agent
     * - projectLocationVersion: projects/{project}/locations/{location}/agent/versions/{version}
     * - projectVersion: projects/{project}/agent/versions/{version}
     * - version: projects/{project}/agent/versions/{version}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates an agent version.
     *
     * The new version points to the agent instance in the "default" environment.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedParent = $versionsClient->agentName('[PROJECT]');
     *     $version = new Version();
     *     $response = $versionsClient->createVersion($formattedParent, $version);
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. The agent to create a version for.
     *                              Supported formats:
     *
     *                              - `projects/<Project ID>/agent`
     *                              - `projects/<Project ID>/locations/<Location ID>/agent`
     * @param Version $version      Required. The version to create.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2\Version
     *
     * @throws ApiException if the remote call fails
     */
    public function createVersion($parent, $version, array $optionalArgs = [])
    {
        $request = new CreateVersionRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setVersion($version);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateVersion', Version::class, $optionalArgs, $request)->wait();
    }

    /**
     * Delete the specified agent version.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedName = $versionsClient->versionName('[PROJECT]', '[VERSION]');
     *     $versionsClient->deleteVersion($formattedName);
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the version to delete.
     *                             Supported formats:
     *
     *                             - `projects/<Project ID>/agent/versions/<Version ID>`
     *                             - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *                             ID>`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteVersion($name, array $optionalArgs = [])
    {
        $request = new DeleteVersionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteVersion', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified agent version.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedName = $versionsClient->versionName('[PROJECT]', '[VERSION]');
     *     $response = $versionsClient->getVersion($formattedName);
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the version.
     *                             Supported formats:
     *
     *                             - `projects/<Project ID>/agent/versions/<Version ID>`
     *                             - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *                             ID>`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2\Version
     *
     * @throws ApiException if the remote call fails
     */
    public function getVersion($name, array $optionalArgs = [])
    {
        $request = new GetVersionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetVersion', Version::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all versions of the specified agent.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedParent = $versionsClient->agentName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $versionsClient->listVersions($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $versionsClient->listVersions($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The agent to list all versions from.
     *                             Supported formats:
     *
     *                             - `projects/<Project ID>/agent`
     *                             - `projects/<Project ID>/locations/<Location ID>/agent`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listVersions($parent, array $optionalArgs = [])
    {
        $request = new ListVersionsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListVersions', $optionalArgs, ListVersionsResponse::class, $request);
    }

    /**
     * Updates the specified agent version.
     *
     * Note that this method does not allow you to update the state of the agent
     * the given version points to. It allows you to update only mutable
     * properties of the version resource.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $version = new Version();
     *     $updateMask = new FieldMask();
     *     $response = $versionsClient->updateVersion($version, $updateMask);
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param Version   $version      Required. The version to update.
     *                                Supported formats:
     *
     *                                - `projects/<Project ID>/agent/versions/<Version ID>`
     *                                - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *                                ID>`
     * @param FieldMask $updateMask   Required. The mask to control which fields get updated.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2\Version
     *
     * @throws ApiException if the remote call fails
     */
    public function updateVersion($version, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateVersionRequest();
        $requestParamHeaders = [];
        $request->setVersion($version);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['version.name'] = $version->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateVersion', Version::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $response = $versionsClient->getLocation();
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetLocation', Location::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.cloud.location.Locations')->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $versionsClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $versionsClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListLocations', $optionalArgs, ListLocationsResponse::class, $request, 'google.cloud.location.Locations');
    }
}
