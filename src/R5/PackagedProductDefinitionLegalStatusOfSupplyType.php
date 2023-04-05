<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PackagedProductDefinitionLegalStatusOfSupplyType
 *
 * A medically related item or items, in a container or package.
 * XSD Type: PackagedProductDefinition.LegalStatusOfSupply
 */
class PackagedProductDefinitionLegalStatusOfSupplyType extends BackboneElementType
{

    /**
     * The actual status of supply. Conveys in what situation this package type may be supplied for use.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The place where the legal status of supply applies. When not specified, this indicates it is unknown in this context.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Gets as code
     *
     * The actual status of supply. Conveys in what situation this package type may be supplied for use.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The actual status of supply. Conveys in what situation this package type may be supplied for use.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as jurisdiction
     *
     * The place where the legal status of supply applies. When not specified, this indicates it is unknown in this context.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * The place where the legal status of supply applies. When not specified, this indicates it is unknown in this context.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction
     * @return self
     */
    public function setJurisdiction(?\TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction = null)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }


}

