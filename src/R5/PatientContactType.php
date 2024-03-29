<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PatientContactType
 *
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.
 * XSD Type: Patient.Contact
 */
class PatientContactType extends BackboneElementType
{

    /**
     * The nature of the relationship between the patient and the contact person.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $relationship
     */
    private $relationship = null;

    /**
     * A name associated with the contact person.
     *
     * @var \TKusy\Hl7Fhir\R5\HumanNameType $name
     */
    private $name = null;

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Address for the contact person.
     *
     * @var \TKusy\Hl7Fhir\R5\AddressType $address
     */
    private $address = null;

    /**
     * Administrative Gender - the gender that the contact person is considered to have for administration and record keeping purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender
     */
    private $gender = null;

    /**
     * Organization on behalf of which the contact is acting or for which the contact is working.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    private $organization = null;

    /**
     * The period during which this contact person or organization is valid to be contacted relating to this patient.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Adds as relationship
     *
     * The nature of the relationship between the patient and the contact person.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $relationship
     */
    public function addToRelationship(\TKusy\Hl7Fhir\R5\CodeableConceptType $relationship)
    {
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * isset relationship
     *
     * The nature of the relationship between the patient and the contact person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelationship($index)
    {
        return isset($this->relationship[$index]);
    }

    /**
     * unset relationship
     *
     * The nature of the relationship between the patient and the contact person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelationship($index)
    {
        unset($this->relationship[$index]);
    }

    /**
     * Gets as relationship
     *
     * The nature of the relationship between the patient and the contact person.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The nature of the relationship between the patient and the contact person.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $relationship
     * @return self
     */
    public function setRelationship(array $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name associated with the contact person.
     *
     * @return \TKusy\Hl7Fhir\R5\HumanNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name associated with the contact person.
     *
     * @param \TKusy\Hl7Fhir\R5\HumanNameType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\HumanNameType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7Fhir\R5\ContactPointType $telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * isset telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecom($index)
    {
        return isset($this->telecom[$index]);
    }

    /**
     * unset telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecom($index)
    {
        unset($this->telecom[$index]);
    }

    /**
     * Gets as telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactPointType[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Sets a new telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom = null)
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Gets as address
     *
     * Address for the contact person.
     *
     * @return \TKusy\Hl7Fhir\R5\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address for the contact person.
     *
     * @param \TKusy\Hl7Fhir\R5\AddressType $address
     * @return self
     */
    public function setAddress(?\TKusy\Hl7Fhir\R5\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Administrative Gender - the gender that the contact person is considered to have for administration and record keeping purposes.
     *
     * @return \TKusy\Hl7Fhir\R5\AdministrativeGenderType
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Administrative Gender - the gender that the contact person is considered to have for administration and record keeping purposes.
     *
     * @param \TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender
     * @return self
     */
    public function setGender(?\TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as organization
     *
     * Organization on behalf of which the contact is acting or for which the contact is working.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * Organization on behalf of which the contact is acting or for which the contact is working.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $organization
     * @return self
     */
    public function setOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period during which this contact person or organization is valid to be contacted relating to this patient.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period during which this contact person or organization is valid to be contacted relating to this patient.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }


}

