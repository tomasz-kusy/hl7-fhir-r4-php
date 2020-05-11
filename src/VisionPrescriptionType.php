<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing VisionPrescriptionType
 *
 * An authorization for the provision of glasses and/or contact lenses to a patient.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: VisionPrescription
 */
class VisionPrescriptionType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this vision prescription.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * The date this resource was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * A resource reference to the person to whom the vision prescription applies.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * A reference to a resource that identifies the particular occurrence of contact between patient and health care provider during which the prescription was issued.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The date (and perhaps time) when the prescription was written.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $dateWritten
     */
    private $dateWritten = null;

    /**
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $prescriber
     */
    private $prescriber = null;

    /**
     * Contain the details of the individual lens specifications and serves as the authorization for the fullfillment by certified professionals.
     *
     * @var \TKusy\Hl7FhirR4\VisionPrescriptionLensSpecificationType[] $lensSpecification
     */
    private $lensSpecification = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this vision prescription.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique identifier assigned to this vision prescription.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * A unique identifier assigned to this vision prescription.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * A unique identifier assigned to this vision prescription.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique identifier assigned to this vision prescription.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the resource instance.
     *
     * @return \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the resource instance.
     *
     * @param \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date this resource was created.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * The date this resource was created.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7FhirR4\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as patient
     *
     * A resource reference to the person to whom the vision prescription applies.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * A resource reference to the person to whom the vision prescription applies.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * A reference to a resource that identifies the particular occurrence of contact between patient and health care provider during which the prescription was issued.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * A reference to a resource that identifies the particular occurrence of contact between patient and health care provider during which the prescription was issued.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as dateWritten
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDateWritten()
    {
        return $this->dateWritten;
    }

    /**
     * Sets a new dateWritten
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $dateWritten
     * @return self
     */
    public function setDateWritten(\TKusy\Hl7FhirR4\DateTimeType $dateWritten)
    {
        $this->dateWritten = $dateWritten;
        return $this;
    }

    /**
     * Gets as prescriber
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }

    /**
     * Sets a new prescriber
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $prescriber
     * @return self
     */
    public function setPrescriber(\TKusy\Hl7FhirR4\ReferenceType $prescriber)
    {
        $this->prescriber = $prescriber;
        return $this;
    }

    /**
     * Adds as lensSpecification
     *
     * Contain the details of the individual lens specifications and serves as the authorization for the fullfillment by certified professionals.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\VisionPrescriptionLensSpecificationType $lensSpecification
     */
    public function addToLensSpecification(\TKusy\Hl7FhirR4\VisionPrescriptionLensSpecificationType $lensSpecification)
    {
        $this->lensSpecification[] = $lensSpecification;
        return $this;
    }

    /**
     * isset lensSpecification
     *
     * Contain the details of the individual lens specifications and serves as the authorization for the fullfillment by certified professionals.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLensSpecification($index)
    {
        return isset($this->lensSpecification[$index]);
    }

    /**
     * unset lensSpecification
     *
     * Contain the details of the individual lens specifications and serves as the authorization for the fullfillment by certified professionals.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLensSpecification($index)
    {
        unset($this->lensSpecification[$index]);
    }

    /**
     * Gets as lensSpecification
     *
     * Contain the details of the individual lens specifications and serves as the authorization for the fullfillment by certified professionals.
     *
     * @return \TKusy\Hl7FhirR4\VisionPrescriptionLensSpecificationType[]
     */
    public function getLensSpecification()
    {
        return $this->lensSpecification;
    }

    /**
     * Sets a new lensSpecification
     *
     * Contain the details of the individual lens specifications and serves as the authorization for the fullfillment by certified professionals.
     *
     * @param \TKusy\Hl7FhirR4\VisionPrescriptionLensSpecificationType[] $lensSpecification
     * @return self
     */
    public function setLensSpecification(array $lensSpecification)
    {
        $this->lensSpecification = $lensSpecification;
        return $this;
    }


}

