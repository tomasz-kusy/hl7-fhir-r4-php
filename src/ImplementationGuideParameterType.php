<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuideParameterType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Parameter
 */
class ImplementationGuideParameterType extends BackboneElementType
{

    /**
     * apply | path-resource | path-pages | path-tx-cache | expansion-parameter | rule-broken-links | generate-xml | generate-json | generate-turtle | html-template.
     *
     * @var \TKusy\Hl7FhirR4\GuideParameterCodeType $code
     */
    private $code = null;

    /**
     * Value for named type.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as code
     *
     * apply | path-resource | path-pages | path-tx-cache | expansion-parameter | rule-broken-links | generate-xml | generate-json | generate-turtle | html-template.
     *
     * @return \TKusy\Hl7FhirR4\GuideParameterCodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * apply | path-resource | path-pages | path-tx-cache | expansion-parameter | rule-broken-links | generate-xml | generate-json | generate-turtle | html-template.
     *
     * @param \TKusy\Hl7FhirR4\GuideParameterCodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\GuideParameterCodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as value
     *
     * Value for named type.
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
     * Value for named type.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

