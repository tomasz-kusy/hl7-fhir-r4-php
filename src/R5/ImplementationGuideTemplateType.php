<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImplementationGuideTemplateType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Template
 */
class ImplementationGuideTemplateType extends BackboneElementType
{

    /**
     * Type of template specified.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * The source location for the template.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $source
     */
    private $source = null;

    /**
     * The scope in which the template applies.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $scope
     */
    private $scope = null;

    /**
     * Gets as code
     *
     * Type of template specified.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Type of template specified.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as source
     *
     * The source location for the template.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The source location for the template.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7Fhir\R5\StringType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as scope
     *
     * The scope in which the template applies.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * The scope in which the template applies.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $scope
     * @return self
     */
    public function setScope(?\TKusy\Hl7Fhir\R5\StringType $scope = null)
    {
        $this->scope = $scope;
        return $this;
    }


}

