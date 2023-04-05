<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoverageEligibilityRequestSupportingInfoType
 *
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * XSD Type: CoverageEligibilityRequest.SupportingInfo
 */
class CoverageEligibilityRequestSupportingInfoType extends BackboneElementType
{

    /**
     * A number to uniquely identify supporting information entries.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $information
     */
    private $information = null;

    /**
     * The supporting materials are applicable for all detail items, product/servce categories and specific billing codes.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $appliesToAll
     */
    private $appliesToAll = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify supporting information entries.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify supporting information entries.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as information
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $information
     * @return self
     */
    public function setInformation(\TKusy\Hl7Fhir\R5\ReferenceType $information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as appliesToAll
     *
     * The supporting materials are applicable for all detail items, product/servce categories and specific billing codes.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAppliesToAll()
    {
        return $this->appliesToAll;
    }

    /**
     * Sets a new appliesToAll
     *
     * The supporting materials are applicable for all detail items, product/servce categories and specific billing codes.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $appliesToAll
     * @return self
     */
    public function setAppliesToAll(?\TKusy\Hl7Fhir\R5\BooleanType $appliesToAll = null)
    {
        $this->appliesToAll = $appliesToAll;
        return $this;
    }


}

