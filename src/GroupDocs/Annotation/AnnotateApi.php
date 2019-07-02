<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="AnnotateApi.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Annotation;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GroupDocs\Annotation\Model\Requests;

/*
 * GroupDocs.Annotation for Cloud API Reference
 */
class AnnotateApi
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;
  
    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Stores access token
     * @var accessToken Access token
     */
    protected $accessToken;

    /*
     * Initialize a new instance of AnnotateApi
     * @param Configuration   $config configuration info
     * @param ClientInterface   $client client for calling api
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(Configuration $config = null, ClientInterface $client = null, HeaderSelector $selector = null)
    {
        $this->config = $config ?: new Configuration();
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /*
     * Gets the config
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->config;
    }

    /*
     * Operation deleteAnnotations
     *
     * Removes annotations from document
     *
     * @param Requests\deleteAnnotationsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteAnnotations(Requests\deleteAnnotationsRequest $request)
    {
        $this->deleteAnnotationsWithHttpInfo($request);
    }

    /*
     * Operation deleteAnnotationsWithHttpInfo
     *
     * Removes annotations from document
     *
     * @param Requests\deleteAnnotationsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAnnotationsWithHttpInfo(Requests\deleteAnnotationsRequest $request)
    {
        $returnType = '';
        $request = $this->deleteAnnotationsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->Error != null && $error->Error->Message != null
                    ? $error->Error->Message
                    : $e->getMessage();
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /*
     * Operation deleteAnnotationsAsync
     *
     * Removes annotations from document
     *
     * @param Requests\deleteAnnotationsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAnnotationsAsync(Requests\deleteAnnotationsRequest $request) 
    {
        return $this->deleteAnnotationsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteAnnotationsAsyncWithHttpInfo
     *
     * Removes annotations from document
     *
     * @param Requests\deleteAnnotationsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAnnotationsAsyncWithHttpInfo(Requests\deleteAnnotationsRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteAnnotationsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteAnnotations'
     *
     * @param Requests\deleteAnnotationsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteAnnotationsRequest(Requests\deleteAnnotationsRequest $request)
    {
        // verify the required parameter 'filePath' is set
        if ($request->filePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filePath when calling deleteAnnotations');
        }

        $resourcePath = '/annotation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->filePath !== null) {
            $localName = lcfirst('filePath');
            $localValue = is_bool($request->filePath) ? ($request->filePath ? 'true' : 'false') : $request->filePath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            elseif (is_array($httpBody) && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }                                            
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getExport
     *
     * Retrieves document with annotations
     *
     * @param Requests\getExportRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getExport(Requests\getExportRequest $request)
    {
        list($response) = $this->getExportWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation getExportWithHttpInfo
     *
     * Retrieves document with annotations
     *
     * @param Requests\getExportRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExportWithHttpInfo(Requests\getExportRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getExportRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->Error != null && $error->Error->Message != null
                    ? $error->Error->Message
                    : $e->getMessage();
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getExportAsync
     *
     * Retrieves document with annotations
     *
     * @param Requests\getExportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExportAsync(Requests\getExportRequest $request) 
    {
        return $this->getExportAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getExportAsyncWithHttpInfo
     *
     * Retrieves document with annotations
     *
     * @param Requests\getExportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExportAsyncWithHttpInfo(Requests\getExportRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->getExportRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'getExport'
     *
     * @param Requests\getExportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getExportRequest(Requests\getExportRequest $request)
    {
        // verify the required parameter 'filePath' is set
        if ($request->filePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filePath when calling getExport');
        }

        $resourcePath = '/annotation/result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->filePath !== null) {
            $localName = lcfirst('filePath');
            $localValue = is_bool($request->filePath) ? ($request->filePath ? 'true' : 'false') : $request->filePath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->annotationTypes !== null) {
            $localName = lcfirst('annotationTypes');
            $localValue = is_bool($request->annotationTypes) ? ($request->annotationTypes ? 'true' : 'false') : $request->annotationTypes;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->annotatedPages !== null) {
            $localName = lcfirst('annotatedPages');
            $localValue = is_bool($request->annotatedPages) ? ($request->annotatedPages ? 'true' : 'false') : $request->annotatedPages;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->firstPage !== null) {
            $localName = lcfirst('firstPage');
            $localValue = is_bool($request->firstPage) ? ($request->firstPage ? 'true' : 'false') : $request->firstPage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->lastPage !== null) {
            $localName = lcfirst('lastPage');
            $localValue = is_bool($request->lastPage) ? ($request->lastPage ? 'true' : 'false') : $request->lastPage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->password !== null) {
            $localName = lcfirst('password');
            $localValue = is_bool($request->password) ? ($request->password ? 'true' : 'false') : $request->password;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            elseif (is_array($httpBody) && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }                                            
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getImport
     *
     * Extracts annotations from document
     *
     * @param Requests\getImportRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Annotation\Model\AnnotationInfo[]
     */
    public function getImport(Requests\getImportRequest $request)
    {
        list($response) = $this->getImportWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation getImportWithHttpInfo
     *
     * Extracts annotations from document
     *
     * @param Requests\getImportRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Annotation\Model\AnnotationInfo[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getImportWithHttpInfo(Requests\getImportRequest $request)
    {
        $returnType = '\GroupDocs\Annotation\Model\AnnotationInfo[]';
        $request = $this->getImportRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->Error != null && $error->Error->Message != null
                    ? $error->Error->Message
                    : $e->getMessage();
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Annotation\Model\AnnotationInfo[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getImportAsync
     *
     * Extracts annotations from document
     *
     * @param Requests\getImportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportAsync(Requests\getImportRequest $request) 
    {
        return $this->getImportAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getImportAsyncWithHttpInfo
     *
     * Extracts annotations from document
     *
     * @param Requests\getImportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportAsyncWithHttpInfo(Requests\getImportRequest $request) 
    {
        $returnType = '\GroupDocs\Annotation\Model\AnnotationInfo[]';
        $request = $this->getImportRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'getImport'
     *
     * @param Requests\getImportRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getImportRequest(Requests\getImportRequest $request)
    {
        // verify the required parameter 'filePath' is set
        if ($request->filePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filePath when calling getImport');
        }

        $resourcePath = '/annotation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->filePath !== null) {
            $localName = lcfirst('filePath');
            $localValue = is_bool($request->filePath) ? ($request->filePath ? 'true' : 'false') : $request->filePath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            elseif (is_array($httpBody) && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }                                            
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getPdf
     *
     * Retrieves PDF version of document
     *
     * @param Requests\getPdfRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getPdf(Requests\getPdfRequest $request)
    {
        list($response) = $this->getPdfWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation getPdfWithHttpInfo
     *
     * Retrieves PDF version of document
     *
     * @param Requests\getPdfRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPdfWithHttpInfo(Requests\getPdfRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getPdfRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->Error != null && $error->Error->Message != null
                    ? $error->Error->Message
                    : $e->getMessage();
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getPdfAsync
     *
     * Retrieves PDF version of document
     *
     * @param Requests\getPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPdfAsync(Requests\getPdfRequest $request) 
    {
        return $this->getPdfAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getPdfAsyncWithHttpInfo
     *
     * Retrieves PDF version of document
     *
     * @param Requests\getPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPdfAsyncWithHttpInfo(Requests\getPdfRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->getPdfRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'getPdf'
     *
     * @param Requests\getPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPdfRequest(Requests\getPdfRequest $request)
    {
        // verify the required parameter 'filePath' is set
        if ($request->filePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filePath when calling getPdf');
        }

        $resourcePath = '/annotation/pdf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->filePath !== null) {
            $localName = lcfirst('filePath');
            $localValue = is_bool($request->filePath) ? ($request->filePath ? 'true' : 'false') : $request->filePath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            elseif (is_array($httpBody) && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }                                            
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation postAnnotations
     *
     * Adds annotations to document
     *
     * @param Requests\postAnnotationsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postAnnotations(Requests\postAnnotationsRequest $request)
    {
        $this->postAnnotationsWithHttpInfo($request);
    }

    /*
     * Operation postAnnotationsWithHttpInfo
     *
     * Adds annotations to document
     *
     * @param Requests\postAnnotationsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Annotation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postAnnotationsWithHttpInfo(Requests\postAnnotationsRequest $request)
    {
        $returnType = '';
        $request = $this->postAnnotationsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->Error != null && $error->Error->Message != null
                    ? $error->Error->Message
                    : $e->getMessage();
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /*
     * Operation postAnnotationsAsync
     *
     * Adds annotations to document
     *
     * @param Requests\postAnnotationsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAnnotationsAsync(Requests\postAnnotationsRequest $request) 
    {
        return $this->postAnnotationsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation postAnnotationsAsyncWithHttpInfo
     *
     * Adds annotations to document
     *
     * @param Requests\postAnnotationsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAnnotationsAsyncWithHttpInfo(Requests\postAnnotationsRequest $request) 
    {
        $returnType = '';
        $request = $this->postAnnotationsRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'postAnnotations'
     *
     * @param Requests\postAnnotationsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAnnotationsRequest(Requests\postAnnotationsRequest $request)
    {
        // verify the required parameter 'filePath' is set
        if ($request->filePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filePath when calling postAnnotations');
        }
        // verify the required parameter 'annotations' is set
        if ($request->annotations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $annotations when calling postAnnotations');
        }

        $resourcePath = '/annotation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->filePath !== null) {
            $localName = lcfirst('filePath');
            $localValue = is_bool($request->filePath) ? ($request->filePath ? 'true' : 'false') : $request->filePath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->annotations)) {
            if (is_string($request->annotations)) {
                $_tempBody = "\"" . $request->annotations . "\"";   
            } else {
                $_tempBody = $request->annotations;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            elseif (is_array($httpBody) && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }                                            
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption() 
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = true;
        }

        return $options;
    }
    
    /*
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            if(is_array($value))
            {
                $logInfo .= $name . ': ';
                foreach ($value as $val)
                    $logInfo .= $val . "; ";
                $logInfo .= "\n";
            }
            else
                $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
     * Executes url parsing
     */
    private function _buildUrl($url, $queryParams) 
    {
        $urlPath = trim($url, '/');
        $urlQuery = http_build_query($queryParams);
 
        $url = $this->config->getServerUrl() . '/' . $urlPath . "?" . $urlQuery;
        
        return $url;
    }
  
    /*
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        if($this->accessToken == null) 
        {
            $requestUrl = $this->config->getApiBaseUrl() . "/connect/token";
            $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
            try {
                $headers = [];
                $headers["Content-Type"] = "application/x-www-form-urlencoded";                
                $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
                $result = json_decode($response->getBody()->getContents(), true);
            
                $this->accessToken = $result["access_token"];                
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->error != null 
                    ? $error->error
                    : $e->getMessage();
                    
                throw new ApiException($errorMessage, $errorCode);
            }
        }
    }
  
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="deleteAnnotationsRequest.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Annotation\Model\Requests;

/*
 * Request model for deleteAnnotations operation.
 */
class deleteAnnotationsRequest
{
    /*
     * Initializes a new instance of the deleteAnnotationsRequest class.
     *  
     * @param string $filePath Document path in storage
     */
    public function __construct($filePath)             
    {
        $this->filePath = $filePath;
    }

    /*
     * Document path in storage
     */
    public $filePath;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="getExportRequest.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Annotation\Model\Requests;

/*
 * Request model for getExport operation.
 */
class getExportRequest
{
    /*
     * Initializes a new instance of the getExportRequest class.
     *  
     * @param string $filePath Document path in storage
     * @param string $annotationTypes Annotation types that will be exported. All annotation types will be exported if not specified
     * @param bool $annotatedPages Indicates whether to export only annotated pages
     * @param int $firstPage Determines number of first exported page
     * @param int $lastPage Determines number of last exported page
     * @param string $password Source document password
     */
    public function __construct($filePath, $annotationTypes = null, $annotatedPages = null, $firstPage = null, $lastPage = null, $password = null)             
    {
        $this->filePath = $filePath;
        $this->annotationTypes = $annotationTypes;
        $this->annotatedPages = $annotatedPages;
        $this->firstPage = $firstPage;
        $this->lastPage = $lastPage;
        $this->password = $password;
    }

    /*
     * Document path in storage
     */
    public $filePath;
	
    /*
     * Annotation types that will be exported. All annotation types will be exported if not specified
     */
    public $annotationTypes;
	
    /*
     * Indicates whether to export only annotated pages
     */
    public $annotatedPages;
	
    /*
     * Determines number of first exported page
     */
    public $firstPage;
	
    /*
     * Determines number of last exported page
     */
    public $lastPage;
	
    /*
     * Source document password
     */
    public $password;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="getImportRequest.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Annotation\Model\Requests;

/*
 * Request model for getImport operation.
 */
class getImportRequest
{
    /*
     * Initializes a new instance of the getImportRequest class.
     *  
     * @param string $filePath Document path in storage
     */
    public function __construct($filePath)             
    {
        $this->filePath = $filePath;
    }

    /*
     * Document path in storage
     */
    public $filePath;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="getPdfRequest.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Annotation\Model\Requests;

/*
 * Request model for getPdf operation.
 */
class getPdfRequest
{
    /*
     * Initializes a new instance of the getPdfRequest class.
     *  
     * @param string $filePath Path to document in storage
     */
    public function __construct($filePath)             
    {
        $this->filePath = $filePath;
    }

    /*
     * Path to document in storage
     */
    public $filePath;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="postAnnotationsRequest.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Annotation\Model\Requests;

/*
 * Request model for postAnnotations operation.
 */
class postAnnotationsRequest
{
    /*
     * Initializes a new instance of the postAnnotationsRequest class.
     *  
     * @param string $filePath Document path in storage
     * @param \GroupDocs\Annotation\Model\AnnotationInfo[] $annotations Array of annotation descriptions
     */
    public function __construct($filePath, $annotations)             
    {
        $this->filePath = $filePath;
        $this->annotations = $annotations;
    }

    /*
     * Document path in storage
     */
    public $filePath;
	
    /*
     * Array of annotation descriptions
     */
    public $annotations;
}
