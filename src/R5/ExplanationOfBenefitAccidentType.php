<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExplanationOfBenefitAccidentType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Accident
 */
class ExplanationOfBenefitAccidentType extends BackboneElementType
{

    /**
     * Date of an accident event related to the products and services contained in the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $date
     */
    private $date = null;

    /**
     * The type or context of the accident event for the purposes of selection of potential insurance coverages and determination of coordination between insurers.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AddressType $locationAddress
     */
    private $locationAddress = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $locationReference
     */
    private $locationReference = null;

    /**
     * Gets as date
     *
     * Date of an accident event related to the products and services contained in the claim.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date of an accident event related to the products and services contained in the claim.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type or context of the accident event for the purposes of selection of potential insurance coverages and determination of coordination between insurers.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type or context of the accident event for the purposes of selection of potential insurance coverages and determination of coordination between insurers.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * @return \TKusy\Hl7Fhir\R5\AddressType
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * @param \TKusy\Hl7Fhir\R5\AddressType $locationAddress
     * @return self
     */
    public function setLocationAddress(?\TKusy\Hl7Fhir\R5\AddressType $locationAddress = null)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as locationReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * Sets a new locationReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $locationReference
     * @return self
     */
    public function setLocationReference(?\TKusy\Hl7Fhir\R5\ReferenceType $locationReference = null)
    {
        $this->locationReference = $locationReference;
        return $this;
    }


}

