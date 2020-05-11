<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptOperationType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Operation
 */
class TestScriptOperationType extends BackboneElementType
{

    /**
     * Server interaction or operation type.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $type
     */
    private $type = null;

    /**
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $resource
     */
    private $resource = null;

    /**
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var string $label
     */
    private $label = null;

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The mime-type to use for RESTful operation in the 'Accept' header.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $accept
     */
    private $accept = null;

    /**
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $contentType
     */
    private $contentType = null;

    /**
     * The server where the request message is destined for. Must be one of the server numbers listed in TestScript.destination section.
     *
     * @var \integer $destination
     */
    private $destination = null;

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     *
     * @var bool $encodeRequestUrl
     */
    private $encodeRequestUrl = null;

    /**
     * The HTTP method the test engine MUST use for this operation regardless of any other operation details.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType $method
     */
    private $method = null;

    /**
     * The server where the request message originates from. Must be one of the server numbers listed in TestScript.origin section.
     *
     * @var \integer $origin
     */
    private $origin = null;

    /**
     * Path plus parameters after [type]. Used to set parts of the request URL explicitly.
     *
     * @var string $params
     */
    private $params = null;

    /**
     * Header elements would be used to set HTTP headers.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptRequestHeaderType[] $requestHeader
     */
    private $requestHeader = null;

    /**
     * The fixture id (maybe new) to map to the request.
     *
     * @var \TKusy\Hl7FhirR4\IdType $requestId
     */
    private $requestId = null;

    /**
     * The fixture id (maybe new) to map to the response.
     *
     * @var \TKusy\Hl7FhirR4\IdType $responseId
     */
    private $responseId = null;

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @var \TKusy\Hl7FhirR4\IdType $sourceId
     */
    private $sourceId = null;

    /**
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @var \TKusy\Hl7FhirR4\IdType $targetId
     */
    private $targetId = null;

    /**
     * Complete request URL.
     *
     * @var string $url
     */
    private $url = null;

    /**
     * Gets as type
     *
     * Server interaction or operation type.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Server interaction or operation type.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodingType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7FhirR4\CodeType $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as label
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description would be used by test engines for tracking and reporting purposes.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description would be used by test engines for tracking and reporting purposes.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as accept
     *
     * The mime-type to use for RESTful operation in the 'Accept' header.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     * Sets a new accept
     *
     * The mime-type to use for RESTful operation in the 'Accept' header.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $accept
     * @return self
     */
    public function setAccept(\TKusy\Hl7FhirR4\CodeType $accept)
    {
        $this->accept = $accept;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $contentType
     * @return self
     */
    public function setContentType(\TKusy\Hl7FhirR4\CodeType $contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as destination
     *
     * The server where the request message is destined for. Must be one of the server numbers listed in TestScript.destination section.
     *
     * @return \integer
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * The server where the request message is destined for. Must be one of the server numbers listed in TestScript.destination section.
     *
     * @param \integer $destination
     * @return self
     */
    public function setDestination(\integer $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as encodeRequestUrl
     *
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     *
     * @return bool
     */
    public function getEncodeRequestUrl()
    {
        return $this->encodeRequestUrl;
    }

    /**
     * Sets a new encodeRequestUrl
     *
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     *
     * @param bool $encodeRequestUrl
     * @return self
     */
    public function setEncodeRequestUrl($encodeRequestUrl)
    {
        $this->encodeRequestUrl = $encodeRequestUrl;
        return $this;
    }

    /**
     * Gets as method
     *
     * The HTTP method the test engine MUST use for this operation regardless of any other operation details.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * The HTTP method the test engine MUST use for this operation regardless of any other operation details.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as origin
     *
     * The server where the request message originates from. Must be one of the server numbers listed in TestScript.origin section.
     *
     * @return \integer
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * The server where the request message originates from. Must be one of the server numbers listed in TestScript.origin section.
     *
     * @param \integer $origin
     * @return self
     */
    public function setOrigin(\integer $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as params
     *
     * Path plus parameters after [type]. Used to set parts of the request URL explicitly.
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Sets a new params
     *
     * Path plus parameters after [type]. Used to set parts of the request URL explicitly.
     *
     * @param string $params
     * @return self
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Adds as requestHeader
     *
     * Header elements would be used to set HTTP headers.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptRequestHeaderType $requestHeader
     */
    public function addToRequestHeader(\TKusy\Hl7FhirR4\TestScriptRequestHeaderType $requestHeader)
    {
        $this->requestHeader[] = $requestHeader;
        return $this;
    }

    /**
     * isset requestHeader
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestHeader($index)
    {
        return isset($this->requestHeader[$index]);
    }

    /**
     * unset requestHeader
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestHeader($index)
    {
        unset($this->requestHeader[$index]);
    }

    /**
     * Gets as requestHeader
     *
     * Header elements would be used to set HTTP headers.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptRequestHeaderType[]
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * Sets a new requestHeader
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptRequestHeaderType[] $requestHeader
     * @return self
     */
    public function setRequestHeader(array $requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * Gets as requestId
     *
     * The fixture id (maybe new) to map to the request.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets a new requestId
     *
     * The fixture id (maybe new) to map to the request.
     *
     * @param \TKusy\Hl7FhirR4\IdType $requestId
     * @return self
     */
    public function setRequestId(\TKusy\Hl7FhirR4\IdType $requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * Gets as responseId
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getResponseId()
    {
        return $this->responseId;
    }

    /**
     * Sets a new responseId
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @param \TKusy\Hl7FhirR4\IdType $responseId
     * @return self
     */
    public function setResponseId(\TKusy\Hl7FhirR4\IdType $responseId)
    {
        $this->responseId = $responseId;
        return $this;
    }

    /**
     * Gets as sourceId
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Sets a new sourceId
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @param \TKusy\Hl7FhirR4\IdType $sourceId
     * @return self
     */
    public function setSourceId(\TKusy\Hl7FhirR4\IdType $sourceId)
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Gets as targetId
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Sets a new targetId
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @param \TKusy\Hl7FhirR4\IdType $targetId
     * @return self
     */
    public function setTargetId(\TKusy\Hl7FhirR4\IdType $targetId)
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * Gets as url
     *
     * Complete request URL.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * Complete request URL.
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

