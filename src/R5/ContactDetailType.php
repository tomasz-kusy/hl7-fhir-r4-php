<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContactDetailType
 *
 * Specifies contact information for a person or organization.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ContactDetail
 */
class ContactDetailType extends DataTypeType
{

    /**
     * The name of an individual to contact.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * The contact details for the individual (if a name was provided) or the organization.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Gets as name
     *
     * The name of an individual to contact.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of an individual to contact.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * The contact details for the individual (if a name was provided) or the organization.
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
     * The contact details for the individual (if a name was provided) or the organization.
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
     * The contact details for the individual (if a name was provided) or the organization.
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
     * The contact details for the individual (if a name was provided) or the organization.
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
     * The contact details for the individual (if a name was provided) or the organization.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom = null)
    {
        $this->telecom = $telecom;
        return $this;
    }


}

