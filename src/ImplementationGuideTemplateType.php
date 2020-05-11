<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * The source location for the template.
     *
     * @var string $source
     */
    private $source = null;

    /**
     * The scope in which the template applies.
     *
     * @var string $scope
     */
    private $scope = null;

    /**
     * Gets as code
     *
     * Type of template specified.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
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
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as source
     *
     * The source location for the template.
     *
     * @return string
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
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as scope
     *
     * The scope in which the template applies.
     *
     * @return string
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
     * @param string $scope
     * @return self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }


}

