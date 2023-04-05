<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EncounterAdmissionType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient. Encounter is primarily used to record information about the actual activities that occurred, where Appointment is used to record planned activities.
 * XSD Type: Encounter.Admission
 */
class EncounterAdmissionType extends BackboneElementType
{

    /**
     * Pre-admission identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $preAdmissionIdentifier
     */
    private $preAdmissionIdentifier = null;

    /**
     * The location/organization from which the patient came before admission.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $origin
     */
    private $origin = null;

    /**
     * From where patient was admitted (physician referral, transfer).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $admitSource
     */
    private $admitSource = null;

    /**
     * Indicates that this encounter is directly related to a prior admission, often because the conditions addressed in the prior admission were not fully addressed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $reAdmission
     */
    private $reAdmission = null;

    /**
     * Location/organization to which the patient is discharged.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Category or kind of location after discharge.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $dischargeDisposition
     */
    private $dischargeDisposition = null;

    /**
     * Gets as preAdmissionIdentifier
     *
     * Pre-admission identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getPreAdmissionIdentifier()
    {
        return $this->preAdmissionIdentifier;
    }

    /**
     * Sets a new preAdmissionIdentifier
     *
     * Pre-admission identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $preAdmissionIdentifier
     * @return self
     */
    public function setPreAdmissionIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $preAdmissionIdentifier = null)
    {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * Gets as origin
     *
     * The location/organization from which the patient came before admission.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * The location/organization from which the patient came before admission.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $origin
     * @return self
     */
    public function setOrigin(?\TKusy\Hl7Fhir\R5\ReferenceType $origin = null)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as admitSource
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAdmitSource()
    {
        return $this->admitSource;
    }

    /**
     * Sets a new admitSource
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $admitSource
     * @return self
     */
    public function setAdmitSource(?\TKusy\Hl7Fhir\R5\CodeableConceptType $admitSource = null)
    {
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * Gets as reAdmission
     *
     * Indicates that this encounter is directly related to a prior admission, often because the conditions addressed in the prior admission were not fully addressed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * Sets a new reAdmission
     *
     * Indicates that this encounter is directly related to a prior admission, often because the conditions addressed in the prior admission were not fully addressed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reAdmission
     * @return self
     */
    public function setReAdmission(?\TKusy\Hl7Fhir\R5\CodeableConceptType $reAdmission = null)
    {
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Location/organization to which the patient is discharged.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Location/organization to which the patient is discharged.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $destination
     * @return self
     */
    public function setDestination(?\TKusy\Hl7Fhir\R5\ReferenceType $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as dischargeDisposition
     *
     * Category or kind of location after discharge.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDischargeDisposition()
    {
        return $this->dischargeDisposition;
    }

    /**
     * Sets a new dischargeDisposition
     *
     * Category or kind of location after discharge.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $dischargeDisposition
     * @return self
     */
    public function setDischargeDisposition(?\TKusy\Hl7Fhir\R5\CodeableConceptType $dischargeDisposition = null)
    {
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }


}

