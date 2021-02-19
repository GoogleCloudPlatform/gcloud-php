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
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/speech/v1p1beta1/cloud_speech_adaptation.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Speech\V1p1beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Speech\V1p1beta1\CreateCustomClassRequest;
use Google\Cloud\Speech\V1p1beta1\CreatePhraseSetRequest;
use Google\Cloud\Speech\V1p1beta1\CustomClass;
use Google\Cloud\Speech\V1p1beta1\DeleteCustomClassRequest;
use Google\Cloud\Speech\V1p1beta1\DeletePhraseSetRequest;
use Google\Cloud\Speech\V1p1beta1\GetCustomClassRequest;
use Google\Cloud\Speech\V1p1beta1\GetPhraseSetRequest;
use Google\Cloud\Speech\V1p1beta1\ListCustomClassesRequest;
use Google\Cloud\Speech\V1p1beta1\ListCustomClassesResponse;
use Google\Cloud\Speech\V1p1beta1\ListPhraseSetRequest;
use Google\Cloud\Speech\V1p1beta1\ListPhraseSetResponse;
use Google\Cloud\Speech\V1p1beta1\PhraseSet;
use Google\Cloud\Speech\V1p1beta1\UpdateCustomClassRequest;
use Google\Cloud\Speech\V1p1beta1\UpdatePhraseSetRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service that implements Google Cloud Speech Adaptation API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $adaptationClient = new AdaptationClient();
 * try {
 *     $formattedParent = $adaptationClient->locationName('[PROJECT]', '[LOCATION]');
 *     $phraseSet = new PhraseSet();
 *     $response = $adaptationClient->createPhraseSet($formattedParent, $phraseSet);
 * } finally {
 *     $adaptationClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class AdaptationGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.speech.v1p1beta1.Adaptation';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'speech.googleapis.com';

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
    ];
    private static $customClassNameTemplate;
    private static $locationNameTemplate;
    private static $phraseSetNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/adaptation_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/adaptation_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/adaptation_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/adaptation_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCustomClassNameTemplate()
    {
        if (null == self::$customClassNameTemplate) {
            self::$customClassNameTemplate = new PathTemplate('projects/{project}/locations/{location}/customClasses/{custom_class}');
        }

        return self::$customClassNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getPhraseSetNameTemplate()
    {
        if (null == self::$phraseSetNameTemplate) {
            self::$phraseSetNameTemplate = new PathTemplate('projects/{project}/locations/{location}/phraseSets/{phrase_set}');
        }

        return self::$phraseSetNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'customClass' => self::getCustomClassNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'phraseSet' => self::getPhraseSetNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a custom_class resource.
     *
     * @param string $project
     * @param string $location
     * @param string $customClass
     *
     * @return string The formatted custom_class resource.
     * @experimental
     */
    public static function customClassName($project, $location, $customClass)
    {
        return self::getCustomClassNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'custom_class' => $customClass,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a location resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     * @experimental
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a phrase_set resource.
     *
     * @param string $project
     * @param string $location
     * @param string $phraseSet
     *
     * @return string The formatted phrase_set resource.
     * @experimental
     */
    public static function phraseSetName($project, $location, $phraseSet)
    {
        return self::getPhraseSetNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'phrase_set' => $phraseSet,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - customClass: projects/{project}/locations/{location}/customClasses/{custom_class}
     * - location: projects/{project}/locations/{location}
     * - phraseSet: projects/{project}/locations/{location}/phraseSets/{phrase_set}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
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
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'speech.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Create a set of phrase hints. Each item in the set can be a single word or
     * a multi-word phrase. The items in the PhraseSet are favored by the
     * recognition model when you send a call that includes the PhraseSet.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedParent = $adaptationClient->locationName('[PROJECT]', '[LOCATION]');
     *     $phraseSet = new PhraseSet();
     *     $response = $adaptationClient->createPhraseSet($formattedParent, $phraseSet);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string    $parent       Required. The parent resource where this phrase set will be created.
     *                                Format:
     *                                {api_version}/projects/{project}/locations/{location}/phraseSets
     * @param PhraseSet $phraseSet    Required. The phrase set to create.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type string $phraseSetId
     *          The ID to use for the phrase set, which will become the final
     *          component of the phrase set's resource name.
     *
     *          This value should be 4-63 characters, and valid characters
     *          are /[a-z][0-9]-/.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Speech\V1p1beta1\PhraseSet
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createPhraseSet($parent, $phraseSet, array $optionalArgs = [])
    {
        $request = new CreatePhraseSetRequest();
        $request->setParent($parent);
        $request->setPhraseSet($phraseSet);
        if (isset($optionalArgs['phraseSetId'])) {
            $request->setPhraseSetId($optionalArgs['phraseSetId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreatePhraseSet',
            PhraseSet::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Get a phrase set.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedName = $adaptationClient->phraseSetName('[PROJECT]', '[LOCATION]', '[PHRASE_SET]');
     *     $response = $adaptationClient->getPhraseSet($formattedName);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the phrase set to retrieve.
     *                             Format:
     *                             {api_version}/projects/{project}/locations/{location}/phraseSets/{phrase_set}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Speech\V1p1beta1\PhraseSet
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getPhraseSet($name, array $optionalArgs = [])
    {
        $request = new GetPhraseSetRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetPhraseSet',
            PhraseSet::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * List phrase sets.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedParent = $adaptationClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $adaptationClient->listPhraseSet($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $adaptationClient->listPhraseSet($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent, which owns this collection of phrase set.
     *                             Format:
     *                             projects/{project}/locations/{location}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listPhraseSet($parent, array $optionalArgs = [])
    {
        $request = new ListPhraseSetRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListPhraseSet',
            $optionalArgs,
            ListPhraseSetResponse::class,
            $request
        );
    }

    /**
     * Update a phrase set.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $phraseSet = new PhraseSet();
     *     $response = $adaptationClient->updatePhraseSet($phraseSet);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param PhraseSet $phraseSet Required. The phrase set to update.
     *
     * The phrase set's `name` field is used to identify the set to be
     * updated. Format:
     * {api_version}/projects/{project}/locations/{location}/phraseSets/{phrase_set}
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type FieldMask $updateMask
     *          The list of fields to be updated.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Speech\V1p1beta1\PhraseSet
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updatePhraseSet($phraseSet, array $optionalArgs = [])
    {
        $request = new UpdatePhraseSetRequest();
        $request->setPhraseSet($phraseSet);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'phrase_set.name' => $request->getPhraseSet()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdatePhraseSet',
            PhraseSet::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Delete a phrase set.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedName = $adaptationClient->phraseSetName('[PROJECT]', '[LOCATION]', '[PHRASE_SET]');
     *     $adaptationClient->deletePhraseSet($formattedName);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the phrase set to delete.
     *                             Format:
     *                             {api_version}/projects/{project}/locations/{location}/phraseSets/{phrase_set}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deletePhraseSet($name, array $optionalArgs = [])
    {
        $request = new DeletePhraseSetRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeletePhraseSet',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Create a custom class.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedParent = $adaptationClient->locationName('[PROJECT]', '[LOCATION]');
     *     $customClass = new CustomClass();
     *     $response = $adaptationClient->createCustomClass($formattedParent, $customClass);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string      $parent       Required. The parent resource where this custom class will be created.
     *                                  Format:
     *                                  {api_version}/projects/{project}/locations/{location}/customClasses
     * @param CustomClass $customClass  Required. The custom class to create.
     * @param array       $optionalArgs {
     *                                  Optional.
     *
     *     @type string $customClassId
     *          The ID to use for the custom class, which will become the final
     *          component of the custom class' resource name.
     *
     *          This value should be 4-63 characters, and valid characters
     *          are /[a-z][0-9]-/.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Speech\V1p1beta1\CustomClass
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createCustomClass($parent, $customClass, array $optionalArgs = [])
    {
        $request = new CreateCustomClassRequest();
        $request->setParent($parent);
        $request->setCustomClass($customClass);
        if (isset($optionalArgs['customClassId'])) {
            $request->setCustomClassId($optionalArgs['customClassId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateCustomClass',
            CustomClass::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Get a custom class.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedName = $adaptationClient->customClassName('[PROJECT]', '[LOCATION]', '[CUSTOM_CLASS]');
     *     $response = $adaptationClient->getCustomClass($formattedName);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the custom class to retrieve.
     *                             Format:
     *                             {api_version}/projects/{project}/locations/{location}/customClasses/{custom_class}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Speech\V1p1beta1\CustomClass
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getCustomClass($name, array $optionalArgs = [])
    {
        $request = new GetCustomClassRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetCustomClass',
            CustomClass::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * List custom classes.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedParent = $adaptationClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $adaptationClient->listCustomClasses($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $adaptationClient->listCustomClasses($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent, which owns this collection of custom classes.
     *                             Format:
     *                             {api_version}/projects/{project}/locations/{location}/customClasses
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listCustomClasses($parent, array $optionalArgs = [])
    {
        $request = new ListCustomClassesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListCustomClasses',
            $optionalArgs,
            ListCustomClassesResponse::class,
            $request
        );
    }

    /**
     * Update a custom class.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $customClass = new CustomClass();
     *     $response = $adaptationClient->updateCustomClass($customClass);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param CustomClass $customClass Required. The custom class to update.
     *
     * The custom class's `name` field is used to identify the custom class to be
     * updated. Format:
     * {api_version}/projects/{project}/locations/{location}/customClasses/{custom_class}
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type FieldMask $updateMask
     *          The list of fields to be updated.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Speech\V1p1beta1\CustomClass
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateCustomClass($customClass, array $optionalArgs = [])
    {
        $request = new UpdateCustomClassRequest();
        $request->setCustomClass($customClass);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'custom_class.name' => $request->getCustomClass()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateCustomClass',
            CustomClass::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Delete a custom class.
     *
     * Sample code:
     * ```
     * $adaptationClient = new AdaptationClient();
     * try {
     *     $formattedName = $adaptationClient->customClassName('[PROJECT]', '[LOCATION]', '[CUSTOM_CLASS]');
     *     $adaptationClient->deleteCustomClass($formattedName);
     * } finally {
     *     $adaptationClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the custom class to delete.
     *                             Format:
     *                             {api_version}/projects/{project}/locations/{location}/customClasses/{custom_class}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteCustomClass($name, array $optionalArgs = [])
    {
        $request = new DeleteCustomClassRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteCustomClass',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
