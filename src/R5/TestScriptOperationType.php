<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodingType $type
     */
    private $type = null;

    /**
     * The type of the FHIR resource. See the [resource list](resourcelist.html). Data type of uri is needed when non-HL7 artifacts are identified.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $resource
     */
    private $resource = null;

    /**
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $label
     */
    private $label = null;

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * The mime-type to use for RESTful operation in the 'Accept' header.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $accept
     */
    private $accept = null;

    /**
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $contentType
     */
    private $contentType = null;

    /**
     * The server where the request message is destined for. Must be one of the server numbers listed in TestScript.destination section.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $destination
     */
    private $destination = null;

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $encodeRequestUrl
     */
    private $encodeRequestUrl = null;

    /**
     * The HTTP method the test engine MUST use for this operation regardless of any other operation details.
     *
     * @var \TKusy\Hl7Fhir\R5\TestScriptRequestMethodCodeType $method
     */
    private $method = null;

    /**
     * The server where the request message originates from. Must be one of the server numbers listed in TestScript.origin section.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $origin
     */
    private $origin = null;

    /**
     * Path plus parameters after [type]. Used to set parts of the request URL explicitly.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $params
     */
    private $params = null;

    /**
     * Header elements would be used to set HTTP headers.
     *
     * @var \TKusy\Hl7Fhir\R5\TestScriptRequestHeaderType[] $requestHeader
     */
    private $requestHeader = null;

    /**
     * The fixture id (maybe new) to map to the request.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $requestId
     */
    private $requestId = null;

    /**
     * The fixture id (maybe new) to map to the response.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $responseId
     */
    private $responseId = null;

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $sourceId
     */
    private $sourceId = null;

    /**
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $targetId
     */
    private $targetId = null;

    /**
     * Complete request URL.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $url
     */
    private $url = null;

    /**
     * Gets as type
     *
     * Server interaction or operation type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
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
     * @param \TKusy\Hl7Fhir\R5\CodingType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodingType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The type of the FHIR resource. See the [resource list](resourcelist.html). Data type of uri is needed when non-HL7 artifacts are identified.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The type of the FHIR resource. See the [resource list](resourcelist.html). Data type of uri is needed when non-HL7 artifacts are identified.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $resource
     * @return self
     */
    public function setResource(?\TKusy\Hl7Fhir\R5\UriType $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as label
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $label
     * @return self
     */
    public function setLabel(?\TKusy\Hl7Fhir\R5\StringType $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description would be used by test engines for tracking and reporting purposes.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as accept
     *
     * The mime-type to use for RESTful operation in the 'Accept' header.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
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
     * @param \TKusy\Hl7Fhir\R5\CodeType $accept
     * @return self
     */
    public function setAccept(?\TKusy\Hl7Fhir\R5\CodeType $accept = null)
    {
        $this->accept = $accept;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * The mime-type to use for RESTful operation in the 'Content-Type' header.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
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
     * @param \TKusy\Hl7Fhir\R5\CodeType $contentType
     * @return self
     */
    public function setContentType(?\TKusy\Hl7Fhir\R5\CodeType $contentType = null)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as destination
     *
     * The server where the request message is destined for. Must be one of the server numbers listed in TestScript.destination section.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
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
     * @param \TKusy\Hl7Fhir\R5\IntegerType $destination
     * @return self
     */
    public function setDestination(?\TKusy\Hl7Fhir\R5\IntegerType $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as encodeRequestUrl
     *
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $encodeRequestUrl
     * @return self
     */
    public function setEncodeRequestUrl(\TKusy\Hl7Fhir\R5\BooleanType $encodeRequestUrl)
    {
        $this->encodeRequestUrl = $encodeRequestUrl;
        return $this;
    }

    /**
     * Gets as method
     *
     * The HTTP method the test engine MUST use for this operation regardless of any other operation details.
     *
     * @return \TKusy\Hl7Fhir\R5\TestScriptRequestMethodCodeType
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
     * @param \TKusy\Hl7Fhir\R5\TestScriptRequestMethodCodeType $method
     * @return self
     */
    public function setMethod(?\TKusy\Hl7Fhir\R5\TestScriptRequestMethodCodeType $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as origin
     *
     * The server where the request message originates from. Must be one of the server numbers listed in TestScript.origin section.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
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
     * @param \TKusy\Hl7Fhir\R5\IntegerType $origin
     * @return self
     */
    public function setOrigin(?\TKusy\Hl7Fhir\R5\IntegerType $origin = null)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as params
     *
     * Path plus parameters after [type]. Used to set parts of the request URL explicitly.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $params
     * @return self
     */
    public function setParams(?\TKusy\Hl7Fhir\R5\StringType $params = null)
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
     * @param \TKusy\Hl7Fhir\R5\TestScriptRequestHeaderType $requestHeader
     */
    public function addToRequestHeader(\TKusy\Hl7Fhir\R5\TestScriptRequestHeaderType $requestHeader)
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
     * @return \TKusy\Hl7Fhir\R5\TestScriptRequestHeaderType[]
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
     * @param \TKusy\Hl7Fhir\R5\TestScriptRequestHeaderType[] $requestHeader
     * @return self
     */
    public function setRequestHeader(array $requestHeader = null)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * Gets as requestId
     *
     * The fixture id (maybe new) to map to the request.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
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
     * @param \TKusy\Hl7Fhir\R5\IdType $requestId
     * @return self
     */
    public function setRequestId(?\TKusy\Hl7Fhir\R5\IdType $requestId = null)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * Gets as responseId
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
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
     * @param \TKusy\Hl7Fhir\R5\IdType $responseId
     * @return self
     */
    public function setResponseId(?\TKusy\Hl7Fhir\R5\IdType $responseId = null)
    {
        $this->responseId = $responseId;
        return $this;
    }

    /**
     * Gets as sourceId
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
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
     * @param \TKusy\Hl7Fhir\R5\IdType $sourceId
     * @return self
     */
    public function setSourceId(?\TKusy\Hl7Fhir\R5\IdType $sourceId = null)
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Gets as targetId
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
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
     * @param \TKusy\Hl7Fhir\R5\IdType $targetId
     * @return self
     */
    public function setTargetId(?\TKusy\Hl7Fhir\R5\IdType $targetId = null)
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * Gets as url
     *
     * Complete request URL.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\StringType $url = null)
    {
        $this->url = $url;
        return $this;
    }


}

