<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing OperationOutcomeIssueType
 *
 * A collection of error, warning, or information messages that result from a system action.
 * XSD Type: OperationOutcome.Issue
 */
class OperationOutcomeIssueType extends BackboneElementType
{

    /**
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @var \TKusy\Hl7Fhir\R5\IssueSeverityType $severity
     */
    private $severity = null;

    /**
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     *
     * @var \TKusy\Hl7Fhir\R5\IssueTypeType $code
     */
    private $code = null;

    /**
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $details
     */
    private $details = null;

    /**
     * Additional diagnostic information about the issue.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $diagnostics
     */
    private $diagnostics = null;

    /**
     * This element is deprecated because it is XML specific. It is replaced by issue.expression, which is format independent, and simpler to parse. 
     *
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised. For HTTP errors, will be "http." + the parameter name.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $location
     */
    private $location = null;

    /**
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $expression
     */
    private $expression = null;

    /**
     * Gets as severity
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @return \TKusy\Hl7Fhir\R5\IssueSeverityType
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @param \TKusy\Hl7Fhir\R5\IssueSeverityType $severity
     * @return self
     */
    public function setSeverity(\TKusy\Hl7Fhir\R5\IssueSeverityType $severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as code
     *
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     *
     * @return \TKusy\Hl7Fhir\R5\IssueTypeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     *
     * @param \TKusy\Hl7Fhir\R5\IssueTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\IssueTypeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as details
     *
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $details
     * @return self
     */
    public function setDetails(?\TKusy\Hl7Fhir\R5\CodeableConceptType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as diagnostics
     *
     * Additional diagnostic information about the issue.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }

    /**
     * Sets a new diagnostics
     *
     * Additional diagnostic information about the issue.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $diagnostics
     * @return self
     */
    public function setDiagnostics(?\TKusy\Hl7Fhir\R5\StringType $diagnostics = null)
    {
        $this->diagnostics = $diagnostics;
        return $this;
    }

    /**
     * Adds as location
     *
     * This element is deprecated because it is XML specific. It is replaced by issue.expression, which is format independent, and simpler to parse. 
     *
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised. For HTTP errors, will be "http." + the parameter name.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $location
     */
    public function addToLocation(\TKusy\Hl7Fhir\R5\StringType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * This element is deprecated because it is XML specific. It is replaced by issue.expression, which is format independent, and simpler to parse. 
     *
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised. For HTTP errors, will be "http." + the parameter name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * This element is deprecated because it is XML specific. It is replaced by issue.expression, which is format independent, and simpler to parse. 
     *
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised. For HTTP errors, will be "http." + the parameter name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * This element is deprecated because it is XML specific. It is replaced by issue.expression, which is format independent, and simpler to parse. 
     *
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised. For HTTP errors, will be "http." + the parameter name.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * This element is deprecated because it is XML specific. It is replaced by issue.expression, which is format independent, and simpler to parse. 
     *
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised. For HTTP errors, will be "http." + the parameter name.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $expression
     */
    public function addToExpression(\TKusy\Hl7Fhir\R5\StringType $expression)
    {
        $this->expression[] = $expression;
        return $this;
    }

    /**
     * isset expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpression($index)
    {
        return isset($this->expression[$index]);
    }

    /**
     * unset expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpression($index)
    {
        unset($this->expression[$index]);
    }

    /**
     * Gets as expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $expression
     * @return self
     */
    public function setExpression(array $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }


}

