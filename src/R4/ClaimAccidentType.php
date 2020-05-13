<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ClaimAccidentType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * XSD Type: Claim.Accident
 */
class ClaimAccidentType extends BackboneElementType
{

    /**
     * Date of an accident event related to the products and services contained in the claim.
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $date
     */
    private $date = null;

    /**
     * The type or context of the accident event for the purposes of selection of potential insurance coverages and determination of coordination between insurers.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The physical location of the accident event. (choose any one of location*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AddressType $locationAddress
     */
    private $locationAddress = null;

    /**
     * The physical location of the accident event. (choose any one of location*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $locationReference
     */
    private $locationReference = null;

    /**
     * Gets as date
     *
     * Date of an accident event related to the products and services contained in the claim.
     *
     * @return \TKusy\Hl7Fhir\R4\DateType
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
     * @param \TKusy\Hl7Fhir\R4\DateType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7Fhir\R4\DateType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type or context of the accident event for the purposes of selection of potential insurance coverages and determination of coordination between insurers.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * The physical location of the accident event. (choose any one of location*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AddressType
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * The physical location of the accident event. (choose any one of location*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AddressType $locationAddress
     * @return self
     */
    public function setLocationAddress(\TKusy\Hl7Fhir\R4\AddressType $locationAddress)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as locationReference
     *
     * The physical location of the accident event. (choose any one of location*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * Sets a new locationReference
     *
     * The physical location of the accident event. (choose any one of location*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $locationReference
     * @return self
     */
    public function setLocationReference(\TKusy\Hl7Fhir\R4\ReferenceType $locationReference)
    {
        $this->locationReference = $locationReference;
        return $this;
    }


}

