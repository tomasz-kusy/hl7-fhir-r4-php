<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptAssertType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Assert
 */
class TestScriptAssertType extends BackboneElementType
{

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
     * The direction to use for the assertion.
     *
     * @var \TKusy\Hl7FhirR4\AssertionDirectionTypeType $direction
     */
    private $direction = null;

    /**
     * Id of the source fixture used as the contents to be evaluated by either the "source/expression" or "sourceId/path" definition.
     *
     * @var string $compareToSourceId
     */
    private $compareToSourceId = null;

    /**
     * The FHIRPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     *
     * @var string $compareToSourceExpression
     */
    private $compareToSourceExpression = null;

    /**
     * XPath or JSONPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     *
     * @var string $compareToSourcePath
     */
    private $compareToSourcePath = null;

    /**
     * The mime-type contents to compare against the request or response message 'Content-Type' header.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $contentType
     */
    private $contentType = null;

    /**
     * The FHIRPath expression to be evaluated against the request or response message contents - HTTP headers and payload.
     *
     * @var string $expression
     */
    private $expression = null;

    /**
     * The HTTP header field name e.g. 'Location'.
     *
     * @var string $headerField
     */
    private $headerField = null;

    /**
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture specified by minimumId.
     *
     * @var string $minimumId
     */
    private $minimumId = null;

    /**
     * Whether or not the test execution performs validation on the bundle navigation links.
     *
     * @var bool $navigationLinks
     */
    private $navigationLinks = null;

    /**
     * The operator type defines the conditional behavior of the assert. If not defined, the default is equals.
     *
     * @var \TKusy\Hl7FhirR4\AssertionOperatorTypeType $operator
     */
    private $operator = null;

    /**
     * The XPath or JSONPath expression to be evaluated against the fixture representing the response received from server.
     *
     * @var string $path
     */
    private $path = null;

    /**
     * The request method or HTTP operation code to compare against that used by the client system under test.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType $requestMethod
     */
    private $requestMethod = null;

    /**
     * The value to use in a comparison against the request URL path string.
     *
     * @var string $requestURL
     */
    private $requestURL = null;

    /**
     * The type of the resource. See http://build.fhir.org/resourcelist.html.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $resource
     */
    private $resource = null;

    /**
     * okay | created | noContent | notModified | bad | forbidden | notFound | methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @var \TKusy\Hl7FhirR4\AssertionResponseTypesType $response
     */
    private $response = null;

    /**
     * The value of the HTTP response code to be tested.
     *
     * @var string $responseCode
     */
    private $responseCode = null;

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
     *
     * @var \TKusy\Hl7FhirR4\IdType $sourceId
     */
    private $sourceId = null;

    /**
     * The ID of the Profile to validate against.
     *
     * @var \TKusy\Hl7FhirR4\IdType $validateProfileId
     */
    private $validateProfileId = null;

    /**
     * The value to compare to.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Whether or not the test execution will produce a warning only on error for this assert.
     *
     * @var bool $warningOnly
     */
    private $warningOnly = null;

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
     * Gets as direction
     *
     * The direction to use for the assertion.
     *
     * @return \TKusy\Hl7FhirR4\AssertionDirectionTypeType
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * The direction to use for the assertion.
     *
     * @param \TKusy\Hl7FhirR4\AssertionDirectionTypeType $direction
     * @return self
     */
    public function setDirection(\TKusy\Hl7FhirR4\AssertionDirectionTypeType $direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * Gets as compareToSourceId
     *
     * Id of the source fixture used as the contents to be evaluated by either the "source/expression" or "sourceId/path" definition.
     *
     * @return string
     */
    public function getCompareToSourceId()
    {
        return $this->compareToSourceId;
    }

    /**
     * Sets a new compareToSourceId
     *
     * Id of the source fixture used as the contents to be evaluated by either the "source/expression" or "sourceId/path" definition.
     *
     * @param string $compareToSourceId
     * @return self
     */
    public function setCompareToSourceId($compareToSourceId)
    {
        $this->compareToSourceId = $compareToSourceId;
        return $this;
    }

    /**
     * Gets as compareToSourceExpression
     *
     * The FHIRPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     *
     * @return string
     */
    public function getCompareToSourceExpression()
    {
        return $this->compareToSourceExpression;
    }

    /**
     * Sets a new compareToSourceExpression
     *
     * The FHIRPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     *
     * @param string $compareToSourceExpression
     * @return self
     */
    public function setCompareToSourceExpression($compareToSourceExpression)
    {
        $this->compareToSourceExpression = $compareToSourceExpression;
        return $this;
    }

    /**
     * Gets as compareToSourcePath
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     *
     * @return string
     */
    public function getCompareToSourcePath()
    {
        return $this->compareToSourcePath;
    }

    /**
     * Sets a new compareToSourcePath
     *
     * XPath or JSONPath expression to evaluate against the source fixture. When compareToSourceId is defined, either compareToSourceExpression or compareToSourcePath must be defined, but not both.
     *
     * @param string $compareToSourcePath
     * @return self
     */
    public function setCompareToSourcePath($compareToSourcePath)
    {
        $this->compareToSourcePath = $compareToSourcePath;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * The mime-type contents to compare against the request or response message 'Content-Type' header.
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
     * The mime-type contents to compare against the request or response message 'Content-Type' header.
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
     * Gets as expression
     *
     * The FHIRPath expression to be evaluated against the request or response message contents - HTTP headers and payload.
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * The FHIRPath expression to be evaluated against the request or response message contents - HTTP headers and payload.
     *
     * @param string $expression
     * @return self
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as headerField
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @return string
     */
    public function getHeaderField()
    {
        return $this->headerField;
    }

    /**
     * Sets a new headerField
     *
     * The HTTP header field name e.g. 'Location'.
     *
     * @param string $headerField
     * @return self
     */
    public function setHeaderField($headerField)
    {
        $this->headerField = $headerField;
        return $this;
    }

    /**
     * Gets as minimumId
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture specified by minimumId.
     *
     * @return string
     */
    public function getMinimumId()
    {
        return $this->minimumId;
    }

    /**
     * Sets a new minimumId
     *
     * The ID of a fixture. Asserts that the response contains at a minimum the fixture specified by minimumId.
     *
     * @param string $minimumId
     * @return self
     */
    public function setMinimumId($minimumId)
    {
        $this->minimumId = $minimumId;
        return $this;
    }

    /**
     * Gets as navigationLinks
     *
     * Whether or not the test execution performs validation on the bundle navigation links.
     *
     * @return bool
     */
    public function getNavigationLinks()
    {
        return $this->navigationLinks;
    }

    /**
     * Sets a new navigationLinks
     *
     * Whether or not the test execution performs validation on the bundle navigation links.
     *
     * @param bool $navigationLinks
     * @return self
     */
    public function setNavigationLinks($navigationLinks)
    {
        $this->navigationLinks = $navigationLinks;
        return $this;
    }

    /**
     * Gets as operator
     *
     * The operator type defines the conditional behavior of the assert. If not defined, the default is equals.
     *
     * @return \TKusy\Hl7FhirR4\AssertionOperatorTypeType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * The operator type defines the conditional behavior of the assert. If not defined, the default is equals.
     *
     * @param \TKusy\Hl7FhirR4\AssertionOperatorTypeType $operator
     * @return self
     */
    public function setOperator(\TKusy\Hl7FhirR4\AssertionOperatorTypeType $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as path
     *
     * The XPath or JSONPath expression to be evaluated against the fixture representing the response received from server.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * The XPath or JSONPath expression to be evaluated against the fixture representing the response received from server.
     *
     * @param string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as requestMethod
     *
     * The request method or HTTP operation code to compare against that used by the client system under test.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * Sets a new requestMethod
     *
     * The request method or HTTP operation code to compare against that used by the client system under test.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType $requestMethod
     * @return self
     */
    public function setRequestMethod(\TKusy\Hl7FhirR4\TestScriptRequestMethodCodeType $requestMethod)
    {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * Gets as requestURL
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @return string
     */
    public function getRequestURL()
    {
        return $this->requestURL;
    }

    /**
     * Sets a new requestURL
     *
     * The value to use in a comparison against the request URL path string.
     *
     * @param string $requestURL
     * @return self
     */
    public function setRequestURL($requestURL)
    {
        $this->requestURL = $requestURL;
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
     * Gets as response
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound | methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @return \TKusy\Hl7FhirR4\AssertionResponseTypesType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * okay | created | noContent | notModified | bad | forbidden | notFound | methodNotAllowed | conflict | gone | preconditionFailed | unprocessable.
     *
     * @param \TKusy\Hl7FhirR4\AssertionResponseTypesType $response
     * @return self
     */
    public function setResponse(\TKusy\Hl7FhirR4\AssertionResponseTypesType $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * The value of the HTTP response code to be tested.
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * The value of the HTTP response code to be tested.
     *
     * @param string $responseCode
     * @return self
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Gets as sourceId
     *
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
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
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against.
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
     * Gets as validateProfileId
     *
     * The ID of the Profile to validate against.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getValidateProfileId()
    {
        return $this->validateProfileId;
    }

    /**
     * Sets a new validateProfileId
     *
     * The ID of the Profile to validate against.
     *
     * @param \TKusy\Hl7FhirR4\IdType $validateProfileId
     * @return self
     */
    public function setValidateProfileId(\TKusy\Hl7FhirR4\IdType $validateProfileId)
    {
        $this->validateProfileId = $validateProfileId;
        return $this;
    }

    /**
     * Gets as value
     *
     * The value to compare to.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value to compare to.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as warningOnly
     *
     * Whether or not the test execution will produce a warning only on error for this assert.
     *
     * @return bool
     */
    public function getWarningOnly()
    {
        return $this->warningOnly;
    }

    /**
     * Sets a new warningOnly
     *
     * Whether or not the test execution will produce a warning only on error for this assert.
     *
     * @param bool $warningOnly
     * @return self
     */
    public function setWarningOnly($warningOnly)
    {
        $this->warningOnly = $warningOnly;
        return $this;
    }


}

