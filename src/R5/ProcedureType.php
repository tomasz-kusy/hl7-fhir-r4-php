<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ProcedureType
 *
 * An action that is or was performed on or for a patient, practitioner, device, organization, or location. For example, this can be a physical intervention on a patient like an operation, or less invasive like long term services, counseling, or hypnotherapy. This can be a quality or safety inspection for a location, organization, or device. This can be an accreditation procedure on a practitioner for licensing.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Procedure
 */
class ProcedureType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * A reference to a resource that contains details of the request for this procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular procedure is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the procedure. Generally, this will be the in-progress or completed state.
     *
     * @var \TKusy\Hl7Fhir\R5\EventStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * On whom or on what the procedure was performed. This is usually an individual human, but can also be performed on animals, groups of humans or animals, organizations or practitioners (for licensing), locations or devices (for safety inspections or regulatory authorizations). If the actual focus of the procedure is different from the subject, the focus element specifies the actual focus of the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Who is the target of the procedure when it is not the subject of record only. If focus is not present, then subject is the focus. If focus is present and the subject is one of the targets of the procedure, include subject as a focus as well. If focus is present and the subject is not included in focus, it implies that the procedure was only targeted on the focus. For example, when a caregiver is given education for a patient, the caregiver would be the focus and the procedure record is associated with the subject (e.g. patient). For example, use focus when recording the target of the education, training, or counseling is the parent or relative of a patient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    private $focus = null;

    /**
     * The Encounter during which this Procedure was created or performed or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $occurrenceString
     */
    private $occurrenceString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $occurrenceAge
     */
    private $occurrenceAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $occurrenceRange
     */
    private $occurrenceRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * The date the occurrence of the procedure was first captured in the record regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $recorded
     */
    private $recorded = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $recorder
     */
    private $recorder = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $reportedBoolean
     */
    private $reportedBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reportedReference
     */
    private $reportedReference = null;

    /**
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @var \TKusy\Hl7Fhir\R5\ProcedurePerformerType[] $performer
     */
    private $performer = null;

    /**
     * The location where the procedure actually happened. E.g. a newborn at home, a tracheostomy at a restaurant.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * The coded reason or reference why the procedure was performed. This may be a coded entity of some type, be present as text, or be a reference to one of several resources that justify the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodySite
     */
    private $bodySite = null;

    /**
     * The outcome of the procedure - did it resolve the reasons for the procedure being performed?
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $report
     */
    private $report = null;

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $complication
     */
    private $complication = null;

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $followUp
     */
    private $followUp = null;

    /**
     * Any other notes and comments about the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\ProcedureFocalDeviceType[] $focalDevice
     */
    private $focalDevice = null;

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $used
     */
    private $used = null;

    /**
     * Other resources from the patient record that may be relevant to the procedure. The information from these resources was either used to create the instance or is provided to help with its interpretation. This extension should not be used if more specific inline elements or extensions are available.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
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
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
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
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesCanonical($index)
    {
        return isset($this->instantiatesCanonical[$index]);
    }

    /**
     * unset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesCanonical($index)
    {
        unset($this->instantiatesCanonical[$index]);
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7Fhir\R5\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesUri($index)
    {
        return isset($this->instantiatesUri[$index]);
    }

    /**
     * unset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesUri($index)
    {
        unset($this->instantiatesUri[$index]);
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A reference to a resource that contains details of the request for this procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A reference to a resource that contains details of the request for this procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * A reference to a resource that contains details of the request for this procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * A reference to a resource that contains details of the request for this procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A reference to a resource that contains details of the request for this procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R5\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartOf($index)
    {
        return isset($this->partOf[$index]);
    }

    /**
     * unset partOf
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartOf($index)
    {
        unset($this->partOf[$index]);
    }

    /**
     * Gets as partOf
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the state of the procedure. Generally, this will be the in-progress or completed state.
     *
     * @return \TKusy\Hl7Fhir\R5\EventStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the state of the procedure. Generally, this will be the in-progress or completed state.
     *
     * @param \TKusy\Hl7Fhir\R5\EventStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EventStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current state of the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Captures the reason for the current state of the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Adds as category
     *
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
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
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
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
     * Gets as subject
     *
     * On whom or on what the procedure was performed. This is usually an individual human, but can also be performed on animals, groups of humans or animals, organizations or practitioners (for licensing), locations or devices (for safety inspections or regulatory authorizations). If the actual focus of the procedure is different from the subject, the focus element specifies the actual focus of the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * On whom or on what the procedure was performed. This is usually an individual human, but can also be performed on animals, groups of humans or animals, organizations or practitioners (for licensing), locations or devices (for safety inspections or regulatory authorizations). If the actual focus of the procedure is different from the subject, the focus element specifies the actual focus of the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as focus
     *
     * Who is the target of the procedure when it is not the subject of record only. If focus is not present, then subject is the focus. If focus is present and the subject is one of the targets of the procedure, include subject as a focus as well. If focus is present and the subject is not included in focus, it implies that the procedure was only targeted on the focus. For example, when a caregiver is given education for a patient, the caregiver would be the focus and the procedure record is associated with the subject (e.g. patient). For example, use focus when recording the target of the education, training, or counseling is the parent or relative of a patient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * Who is the target of the procedure when it is not the subject of record only. If focus is not present, then subject is the focus. If focus is present and the subject is one of the targets of the procedure, include subject as a focus as well. If focus is present and the subject is not included in focus, it implies that the procedure was only targeted on the focus. For example, when a caregiver is given education for a patient, the caregiver would be the focus and the procedure record is associated with the subject (e.g. patient). For example, use focus when recording the target of the education, training, or counseling is the parent or relative of a patient.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focus
     * @return self
     */
    public function setFocus(?\TKusy\Hl7Fhir\R5\ReferenceType $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which this Procedure was created or performed or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounter during which this Procedure was created or performed or to which the creation of this record is tightly associated.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime = null)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod = null)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as occurrenceString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getOccurrenceString()
    {
        return $this->occurrenceString;
    }

    /**
     * Sets a new occurrenceString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $occurrenceString
     * @return self
     */
    public function setOccurrenceString(?\TKusy\Hl7Fhir\R5\StringType $occurrenceString = null)
    {
        $this->occurrenceString = $occurrenceString;
        return $this;
    }

    /**
     * Gets as occurrenceAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getOccurrenceAge()
    {
        return $this->occurrenceAge;
    }

    /**
     * Sets a new occurrenceAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $occurrenceAge
     * @return self
     */
    public function setOccurrenceAge(?\TKusy\Hl7Fhir\R5\AgeType $occurrenceAge = null)
    {
        $this->occurrenceAge = $occurrenceAge;
        return $this;
    }

    /**
     * Gets as occurrenceRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getOccurrenceRange()
    {
        return $this->occurrenceRange;
    }

    /**
     * Sets a new occurrenceRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $occurrenceRange
     * @return self
     */
    public function setOccurrenceRange(?\TKusy\Hl7Fhir\R5\RangeType $occurrenceRange = null)
    {
        $this->occurrenceRange = $occurrenceRange;
        return $this;
    }

    /**
     * Gets as occurrenceTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Sets a new occurrenceTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     * @return self
     */
    public function setOccurrenceTiming(?\TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Gets as recorded
     *
     * The date the occurrence of the procedure was first captured in the record regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * Sets a new recorded
     *
     * The date the occurrence of the procedure was first captured in the record regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $recorded
     * @return self
     */
    public function setRecorded(?\TKusy\Hl7Fhir\R5\DateTimeType $recorded = null)
    {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Gets as recorder
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Sets a new recorder
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $recorder
     * @return self
     */
    public function setRecorder(?\TKusy\Hl7Fhir\R5\ReferenceType $recorder = null)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Gets as reportedBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getReportedBoolean()
    {
        return $this->reportedBoolean;
    }

    /**
     * Sets a new reportedBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $reportedBoolean
     * @return self
     */
    public function setReportedBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $reportedBoolean = null)
    {
        $this->reportedBoolean = $reportedBoolean;
        return $this;
    }

    /**
     * Gets as reportedReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReportedReference()
    {
        return $this->reportedReference;
    }

    /**
     * Sets a new reportedReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reportedReference
     * @return self
     */
    public function setReportedReference(?\TKusy\Hl7Fhir\R5\ReferenceType $reportedReference = null)
    {
        $this->reportedReference = $reportedReference;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ProcedurePerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\ProcedurePerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformer($index)
    {
        return isset($this->performer[$index]);
    }

    /**
     * unset performer
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformer($index)
    {
        unset($this->performer[$index]);
    }

    /**
     * Gets as performer
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @return \TKusy\Hl7Fhir\R5\ProcedurePerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @param \TKusy\Hl7Fhir\R5\ProcedurePerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a tracheostomy at a restaurant.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a tracheostomy at a restaurant.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The coded reason or reference why the procedure was performed. This may be a coded entity of some type, be present as text, or be a reference to one of several resources that justify the procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableReferenceType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * The coded reason or reference why the procedure was performed. This may be a coded entity of some type, be present as text, or be a reference to one of several resources that justify the procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * The coded reason or reference why the procedure was performed. This may be a coded entity of some type, be present as text, or be a reference to one of several resources that justify the procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * The coded reason or reference why the procedure was performed. This may be a coded entity of some type, be present as text, or be a reference to one of several resources that justify the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The coded reason or reference why the procedure was performed. This may be a coded entity of some type, be present as text, or be a reference to one of several resources that justify the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Adds as bodySite
     *
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * isset bodySite
     *
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodySite($index)
    {
        return isset($this->bodySite[$index]);
    }

    /**
     * unset bodySite
     *
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodySite($index)
    {
        unset($this->bodySite[$index]);
    }

    /**
     * Gets as bodySite
     *
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure being performed?
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure being performed?
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     * @return self
     */
    public function setOutcome(?\TKusy\Hl7Fhir\R5\CodeableConceptType $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Adds as report
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $report
     */
    public function addToReport(\TKusy\Hl7Fhir\R5\ReferenceType $report)
    {
        $this->report[] = $report;
        return $this;
    }

    /**
     * isset report
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReport($index)
    {
        return isset($this->report[$index]);
    }

    /**
     * unset report
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReport($index)
    {
        unset($this->report[$index]);
    }

    /**
     * Gets as report
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Sets a new report
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $report
     * @return self
     */
    public function setReport(array $report = null)
    {
        $this->report = $report;
        return $this;
    }

    /**
     * Adds as complication
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $complication
     */
    public function addToComplication(\TKusy\Hl7Fhir\R5\CodeableReferenceType $complication)
    {
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * isset complication
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComplication($index)
    {
        return isset($this->complication[$index]);
    }

    /**
     * unset complication
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComplication($index)
    {
        unset($this->complication[$index]);
    }

    /**
     * Gets as complication
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getComplication()
    {
        return $this->complication;
    }

    /**
     * Sets a new complication
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $complication
     * @return self
     */
    public function setComplication(array $complication = null)
    {
        $this->complication = $complication;
        return $this;
    }

    /**
     * Adds as followUp
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $followUp
     */
    public function addToFollowUp(\TKusy\Hl7Fhir\R5\CodeableConceptType $followUp)
    {
        $this->followUp[] = $followUp;
        return $this;
    }

    /**
     * isset followUp
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFollowUp($index)
    {
        return isset($this->followUp[$index]);
    }

    /**
     * unset followUp
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFollowUp($index)
    {
        unset($this->followUp[$index]);
    }

    /**
     * Gets as followUp
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * Sets a new followUp
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $followUp
     * @return self
     */
    public function setFollowUp(array $followUp = null)
    {
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * Adds as note
     *
     * Any other notes and comments about the procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Any other notes and comments about the procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Any other notes and comments about the procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Any other notes and comments about the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Any other notes and comments about the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as focalDevice
     *
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ProcedureFocalDeviceType $focalDevice
     */
    public function addToFocalDevice(\TKusy\Hl7Fhir\R5\ProcedureFocalDeviceType $focalDevice)
    {
        $this->focalDevice[] = $focalDevice;
        return $this;
    }

    /**
     * isset focalDevice
     *
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocalDevice($index)
    {
        return isset($this->focalDevice[$index]);
    }

    /**
     * unset focalDevice
     *
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocalDevice($index)
    {
        unset($this->focalDevice[$index]);
    }

    /**
     * Gets as focalDevice
     *
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\ProcedureFocalDeviceType[]
     */
    public function getFocalDevice()
    {
        return $this->focalDevice;
    }

    /**
     * Sets a new focalDevice
     *
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\ProcedureFocalDeviceType[] $focalDevice
     * @return self
     */
    public function setFocalDevice(array $focalDevice = null)
    {
        $this->focalDevice = $focalDevice;
        return $this;
    }

    /**
     * Adds as used
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $used
     */
    public function addToUsed(\TKusy\Hl7Fhir\R5\CodeableReferenceType $used)
    {
        $this->used[] = $used;
        return $this;
    }

    /**
     * isset used
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsed($index)
    {
        return isset($this->used[$index]);
    }

    /**
     * unset used
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsed($index)
    {
        unset($this->used[$index]);
    }

    /**
     * Gets as used
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Sets a new used
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $used
     * @return self
     */
    public function setUsed(array $used = null)
    {
        $this->used = $used;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Other resources from the patient record that may be relevant to the procedure. The information from these resources was either used to create the instance or is provided to help with its interpretation. This extension should not be used if more specific inline elements or extensions are available.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Other resources from the patient record that may be relevant to the procedure. The information from these resources was either used to create the instance or is provided to help with its interpretation. This extension should not be used if more specific inline elements or extensions are available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInfo($index)
    {
        return isset($this->supportingInfo[$index]);
    }

    /**
     * unset supportingInfo
     *
     * Other resources from the patient record that may be relevant to the procedure. The information from these resources was either used to create the instance or is provided to help with its interpretation. This extension should not be used if more specific inline elements or extensions are available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInfo($index)
    {
        unset($this->supportingInfo[$index]);
    }

    /**
     * Gets as supportingInfo
     *
     * Other resources from the patient record that may be relevant to the procedure. The information from these resources was either used to create the instance or is provided to help with its interpretation. This extension should not be used if more specific inline elements or extensions are available.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Other resources from the patient record that may be relevant to the procedure. The information from these resources was either used to create the instance or is provided to help with its interpretation. This extension should not be used if more specific inline elements or extensions are available.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo = null)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }


}

