<?php
/**
 * LanguagesApi
 * PHP version 5
 *
 * @category Class
 * @package  gooten.api.client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace gooten.api;

use \gooten.api.client\Configuration;
use \gooten.api.client\ApiClient;
use \gooten.api.client\ApiException;
use \gooten.api.client\ObjectSerializer;

/**
 * LanguagesApi Class Doc Comment
 *
 * @category Class
 * @package  gooten.api.client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LanguagesApi
{

    /**
     * API Client
     * @var \gooten.api.client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \gooten.api.client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \gooten.api.client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \gooten.api.client\ApiClient $apiClient set the API client
     * @return LanguagesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getLanguageText
     *
     * Get text in a specified language
     *
     * @param string $language_code Two-character language code, like \&quot;en\&quot; (english) (required)
     * @param string $key A string used to query the language dictionary for specific values within a category. (optional)
     * @return \gooten.api.model\LanguageDictionary
     * @throws \gooten.api.client\ApiException on non-2xx response
     */
    public function getLanguageText($language_code, $key = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getLanguageTextWithHttpInfo ($language_code, $key);
        return $response; 
    }


    /**
     * getLanguageTextWithHttpInfo
     *
     * Get text in a specified language
     *
     * @param string $language_code Two-character language code, like \&quot;en\&quot; (english) (required)
     * @param string $key A string used to query the language dictionary for specific values within a category. (optional)
     * @return Array of \gooten.api.model\LanguageDictionary, HTTP status code, HTTP response headers (array of strings)
     * @throws \gooten.api.client\ApiException on non-2xx response
     */
    public function getLanguageTextWithHttpInfo($language_code, $key = null)
    {
        
        // verify the required parameter 'language_code' is set
        if ($language_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $language_code when calling getLanguageText');
        }
  
        // parse inputs
        $resourcePath = "/languages/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($language_code !== null) {
            $queryParams['languageCode'] = $this->apiClient->getSerializer()->toQueryValue($language_code);
        }// query params
        
        if ($key !== null) {
            $queryParams['key'] = $this->apiClient->getSerializer()->toQueryValue($key);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\gooten.api.model\LanguageDictionary'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\gooten.api.client\ObjectSerializer::deserialize($response, '\gooten.api.model\LanguageDictionary', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \gooten.api.client\ObjectSerializer::deserialize($e->getResponseBody(), '\gooten.api.model\LanguageDictionary', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
