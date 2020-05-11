<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EncounterHospitalizationType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * XSD Type: Encounter.Hospitalization
 */
class EncounterHospitalizationType extends BackboneElementType
{

    /**
     * Pre-admission identifier.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $preAdmissionIdentifier
     */
    private $preAdmissionIdentifier = null;

    /**
     * The location/organization from which the patient came before admission.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $origin
     */
    private $origin = null;

    /**
     * From where patient was admitted (physician referral, transfer).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $admitSource
     */
    private $admitSource = null;

    /**
     * Whether this hospitalization is a readmission and why if known.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $reAdmission
     */
    private $reAdmission = null;

    /**
     * Diet preferences reported by the patient.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $dietPreference
     */
    private $dietPreference = null;

    /**
     * Special courtesies (VIP, board member).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $specialCourtesy
     */
    private $specialCourtesy = null;

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $specialArrangement
     */
    private $specialArrangement = null;

    /**
     * Location/organization to which the patient is discharged.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Category or kind of location after discharge.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $dischargeDisposition
     */
    private $dischargeDisposition = null;

    /**
     * Gets as preAdmissionIdentifier
     *
     * Pre-admission identifier.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
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
     * @param \TKusy\Hl7FhirR4\IdentifierType $preAdmissionIdentifier
     * @return self
     */
    public function setPreAdmissionIdentifier(\TKusy\Hl7FhirR4\IdentifierType $preAdmissionIdentifier)
    {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * Gets as origin
     *
     * The location/organization from which the patient came before admission.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $origin
     * @return self
     */
    public function setOrigin(\TKusy\Hl7FhirR4\ReferenceType $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as admitSource
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $admitSource
     * @return self
     */
    public function setAdmitSource(\TKusy\Hl7FhirR4\CodeableConceptType $admitSource)
    {
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * Gets as reAdmission
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * Sets a new reAdmission
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reAdmission
     * @return self
     */
    public function setReAdmission(\TKusy\Hl7FhirR4\CodeableConceptType $reAdmission)
    {
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * Adds as dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $dietPreference
     */
    public function addToDietPreference(\TKusy\Hl7FhirR4\CodeableConceptType $dietPreference)
    {
        $this->dietPreference[] = $dietPreference;
        return $this;
    }

    /**
     * isset dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDietPreference($index)
    {
        return isset($this->dietPreference[$index]);
    }

    /**
     * unset dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDietPreference($index)
    {
        unset($this->dietPreference[$index]);
    }

    /**
     * Gets as dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getDietPreference()
    {
        return $this->dietPreference;
    }

    /**
     * Sets a new dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $dietPreference
     * @return self
     */
    public function setDietPreference(array $dietPreference)
    {
        $this->dietPreference = $dietPreference;
        return $this;
    }

    /**
     * Adds as specialCourtesy
     *
     * Special courtesies (VIP, board member).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $specialCourtesy
     */
    public function addToSpecialCourtesy(\TKusy\Hl7FhirR4\CodeableConceptType $specialCourtesy)
    {
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * isset specialCourtesy
     *
     * Special courtesies (VIP, board member).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialCourtesy($index)
    {
        return isset($this->specialCourtesy[$index]);
    }

    /**
     * unset specialCourtesy
     *
     * Special courtesies (VIP, board member).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialCourtesy($index)
    {
        unset($this->specialCourtesy[$index]);
    }

    /**
     * Gets as specialCourtesy
     *
     * Special courtesies (VIP, board member).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSpecialCourtesy()
    {
        return $this->specialCourtesy;
    }

    /**
     * Sets a new specialCourtesy
     *
     * Special courtesies (VIP, board member).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $specialCourtesy
     * @return self
     */
    public function setSpecialCourtesy(array $specialCourtesy)
    {
        $this->specialCourtesy = $specialCourtesy;
        return $this;
    }

    /**
     * Adds as specialArrangement
     *
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $specialArrangement
     */
    public function addToSpecialArrangement(\TKusy\Hl7FhirR4\CodeableConceptType $specialArrangement)
    {
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * isset specialArrangement
     *
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialArrangement($index)
    {
        return isset($this->specialArrangement[$index]);
    }

    /**
     * unset specialArrangement
     *
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialArrangement($index)
    {
        unset($this->specialArrangement[$index]);
    }

    /**
     * Gets as specialArrangement
     *
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSpecialArrangement()
    {
        return $this->specialArrangement;
    }

    /**
     * Sets a new specialArrangement
     *
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $specialArrangement
     * @return self
     */
    public function setSpecialArrangement(array $specialArrangement)
    {
        $this->specialArrangement = $specialArrangement;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Location/organization to which the patient is discharged.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $destination
     * @return self
     */
    public function setDestination(\TKusy\Hl7FhirR4\ReferenceType $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as dischargeDisposition
     *
     * Category or kind of location after discharge.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $dischargeDisposition
     * @return self
     */
    public function setDischargeDisposition(\TKusy\Hl7FhirR4\CodeableConceptType $dischargeDisposition)
    {
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }


}

