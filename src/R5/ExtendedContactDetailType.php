<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExtendedContactDetailType
 *
 * Specifies contact information for a specific purpose over a period of time, might be handled/monitored by a specific named person or organization.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ExtendedContactDetail
 */
class ExtendedContactDetailType extends DataTypeType
{

    /**
     * The purpose/type of contact.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $purpose
     */
    private $purpose = null;

    /**
     * The name of an individual to contact, some types of contact detail are usually blank.
     *
     * @var \TKusy\Hl7Fhir\R5\HumanNameType[] $name
     */
    private $name = null;

    /**
     * The contact details application for the purpose defined.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Address for the contact.
     *
     * @var \TKusy\Hl7Fhir\R5\AddressType $address
     */
    private $address = null;

    /**
     * This contact detail is handled/monitored by a specific organization. If the name is provided in the contact, then it is referring to the named individual within this organization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    private $organization = null;

    /**
     * Period that this contact was valid for usage.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as purpose
     *
     * The purpose/type of contact.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * The purpose/type of contact.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $purpose
     * @return self
     */
    public function setPurpose(?\TKusy\Hl7Fhir\R5\CodeableConceptType $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Adds as name
     *
     * The name of an individual to contact, some types of contact detail are usually blank.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\HumanNameType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R5\HumanNameType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * The name of an individual to contact, some types of contact detail are usually blank.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * The name of an individual to contact, some types of contact detail are usually blank.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * The name of an individual to contact, some types of contact detail are usually blank.
     *
     * @return \TKusy\Hl7Fhir\R5\HumanNameType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of an individual to contact, some types of contact detail are usually blank.
     *
     * @param \TKusy\Hl7Fhir\R5\HumanNameType[] $name
     * @return self
     */
    public function setName(array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * The contact details application for the purpose defined.
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
     * The contact details application for the purpose defined.
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
     * The contact details application for the purpose defined.
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
     * The contact details application for the purpose defined.
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
     * The contact details application for the purpose defined.
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
     * Address for the contact.
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
     * Address for the contact.
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
     * Gets as organization
     *
     * This contact detail is handled/monitored by a specific organization. If the name is provided in the contact, then it is referring to the named individual within this organization.
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
     * This contact detail is handled/monitored by a specific organization. If the name is provided in the contact, then it is referring to the named individual within this organization.
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
     * Period that this contact was valid for usage.
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
     * Period that this contact was valid for usage.
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

