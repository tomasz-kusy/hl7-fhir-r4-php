<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ProcedureType
 *
 * An action that is or was performed on or for a patient. This can be a physical intervention like an operation, or less invasive like long term services, counseling, or hypnotherapy.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Procedure
 */
class ProcedureType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, order set or other definition that is adhered to in whole or in part by this Procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * A reference to a resource that contains details of the request for this procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular procedure is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the procedure. Generally, this will be the in-progress or completed state.
     *
     * @var \TKusy\Hl7Fhir\R4\EventStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The person, animal or group on which the procedure was performed.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this Procedure was created or performed or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $performedDateTime
     */
    private $performedDateTime = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $performedPeriod
     */
    private $performedPeriod = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $performedString
     */
    private $performedString = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AgeType $performedAge
     */
    private $performedAge = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $performedRange
     */
    private $performedRange = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $recorder
     */
    private $recorder = null;

    /**
     * Individual who is making the procedure statement.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $asserter
     */
    private $asserter = null;

    /**
     * Limited to "real" people rather than equipment.
     *
     * @var \TKusy\Hl7Fhir\R4\ProcedurePerformerType[] $performer
     */
    private $performer = null;

    /**
     * The location where the procedure actually happened. E.g. a newborn at home, a tracheostomy at a restaurant.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $location
     */
    private $location = null;

    /**
     * The coded reason why the procedure was performed. This may be a coded entity of some type, or may simply be present as text.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * The justification of why the procedure was performed.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $bodySite
     */
    private $bodySite = null;

    /**
     * The outcome of the procedure - did it resolve the reasons for the procedure being performed?
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $report
     */
    private $report = null;

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $complication
     */
    private $complication = null;

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $complicationDetail
     */
    private $complicationDetail = null;

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $followUp
     */
    private $followUp = null;

    /**
     * Any other notes and comments about the procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\ProcedureFocalDeviceType[] $focalDevice
     */
    private $focalDevice = null;

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $usedReference
     */
    private $usedReference = null;

    /**
     * Identifies coded items that were used as part of the procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $usedCode
     */
    private $usedCode = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and is propagated from server to server.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
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
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7Fhir\R4\CanonicalType $instantiatesCanonical)
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
     * @return \TKusy\Hl7Fhir\R4\CanonicalType[]
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
     * @param \TKusy\Hl7Fhir\R4\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical)
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
     * @param \TKusy\Hl7Fhir\R4\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7Fhir\R4\UriType $instantiatesUri)
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
     * @return \TKusy\Hl7Fhir\R4\UriType[]
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
     * @param \TKusy\Hl7Fhir\R4\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R4\ReferenceType $basedOn)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R4\ReferenceType $partOf)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the state of the procedure. Generally, this will be the in-progress or completed state.
     *
     * @return \TKusy\Hl7Fhir\R4\EventStatusType
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
     * @param \TKusy\Hl7Fhir\R4\EventStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\EventStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current state of the procedure.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(\TKusy\Hl7Fhir\R4\CodeableConceptType $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as category
     *
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7Fhir\R4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The person, animal or group on which the procedure was performed.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The person, animal or group on which the procedure was performed.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which this Procedure was created or performed or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7Fhir\R4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as performedDateTime
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getPerformedDateTime()
    {
        return $this->performedDateTime;
    }

    /**
     * Sets a new performedDateTime
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $performedDateTime
     * @return self
     */
    public function setPerformedDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $performedDateTime)
    {
        $this->performedDateTime = $performedDateTime;
        return $this;
    }

    /**
     * Gets as performedPeriod
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getPerformedPeriod()
    {
        return $this->performedPeriod;
    }

    /**
     * Sets a new performedPeriod
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $performedPeriod
     * @return self
     */
    public function setPerformedPeriod(\TKusy\Hl7Fhir\R4\PeriodType $performedPeriod)
    {
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * Gets as performedString
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getPerformedString()
    {
        return $this->performedString;
    }

    /**
     * Sets a new performedString
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $performedString
     * @return self
     */
    public function setPerformedString(\TKusy\Hl7Fhir\R4\StringType $performedString)
    {
        $this->performedString = $performedString;
        return $this;
    }

    /**
     * Gets as performedAge
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AgeType
     */
    public function getPerformedAge()
    {
        return $this->performedAge;
    }

    /**
     * Sets a new performedAge
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AgeType $performedAge
     * @return self
     */
    public function setPerformedAge(\TKusy\Hl7Fhir\R4\AgeType $performedAge)
    {
        $this->performedAge = $performedAge;
        return $this;
    }

    /**
     * Gets as performedRange
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getPerformedRange()
    {
        return $this->performedRange;
    }

    /**
     * Sets a new performedRange
     *
     * Estimated or actual date, date-time, period, or age when the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $performedRange
     * @return self
     */
    public function setPerformedRange(\TKusy\Hl7Fhir\R4\RangeType $performedRange)
    {
        $this->performedRange = $performedRange;
        return $this;
    }

    /**
     * Gets as recorder
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $recorder
     * @return self
     */
    public function setRecorder(\TKusy\Hl7Fhir\R4\ReferenceType $recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Gets as asserter
     *
     * Individual who is making the procedure statement.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * Sets a new asserter
     *
     * Individual who is making the procedure statement.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $asserter
     * @return self
     */
    public function setAsserter(\TKusy\Hl7Fhir\R4\ReferenceType $asserter)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Limited to "real" people rather than equipment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ProcedurePerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R4\ProcedurePerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Limited to "real" people rather than equipment.
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
     * Limited to "real" people rather than equipment.
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
     * Limited to "real" people rather than equipment.
     *
     * @return \TKusy\Hl7Fhir\R4\ProcedurePerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Limited to "real" people rather than equipment.
     *
     * @param \TKusy\Hl7Fhir\R4\ProcedurePerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a tracheostomy at a restaurant.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7Fhir\R4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * The coded reason why the procedure was performed. This may be a coded entity of some type, or may simply be present as text.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * The coded reason why the procedure was performed. This may be a coded entity of some type, or may simply be present as text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonCode($index)
    {
        return isset($this->reasonCode[$index]);
    }

    /**
     * unset reasonCode
     *
     * The coded reason why the procedure was performed. This may be a coded entity of some type, or may simply be present as text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonCode($index)
    {
        unset($this->reasonCode[$index]);
    }

    /**
     * Gets as reasonCode
     *
     * The coded reason why the procedure was performed. This may be a coded entity of some type, or may simply be present as text.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * The coded reason why the procedure was performed. This may be a coded entity of some type, or may simply be present as text.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
     * @return self
     */
    public function setReasonCode(array $reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Adds as reasonReference
     *
     * The justification of why the procedure was performed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7Fhir\R4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * The justification of why the procedure was performed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonReference($index)
    {
        return isset($this->reasonReference[$index]);
    }

    /**
     * unset reasonReference
     *
     * The justification of why the procedure was performed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonReference($index)
    {
        unset($this->reasonReference[$index]);
    }

    /**
     * Gets as reasonReference
     *
     * The justification of why the procedure was performed.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * The justification of why the procedure was performed.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Adds as bodySite
     *
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R4\CodeableConceptType $bodySite)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure being performed?
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7Fhir\R4\CodeableConceptType $outcome)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $report
     */
    public function addToReport(\TKusy\Hl7Fhir\R4\ReferenceType $report)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $report
     * @return self
     */
    public function setReport(array $report)
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $complication
     */
    public function addToComplication(\TKusy\Hl7Fhir\R4\CodeableConceptType $complication)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $complication
     * @return self
     */
    public function setComplication(array $complication)
    {
        $this->complication = $complication;
        return $this;
    }

    /**
     * Adds as complicationDetail
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $complicationDetail
     */
    public function addToComplicationDetail(\TKusy\Hl7Fhir\R4\ReferenceType $complicationDetail)
    {
        $this->complicationDetail[] = $complicationDetail;
        return $this;
    }

    /**
     * isset complicationDetail
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComplicationDetail($index)
    {
        return isset($this->complicationDetail[$index]);
    }

    /**
     * unset complicationDetail
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComplicationDetail($index)
    {
        unset($this->complicationDetail[$index]);
    }

    /**
     * Gets as complicationDetail
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getComplicationDetail()
    {
        return $this->complicationDetail;
    }

    /**
     * Sets a new complicationDetail
     *
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $complicationDetail
     * @return self
     */
    public function setComplicationDetail(array $complicationDetail)
    {
        $this->complicationDetail = $complicationDetail;
        return $this;
    }

    /**
     * Adds as followUp
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The follow up may be represented as a simple note or could potentially be more complex, in which case the CarePlan resource can be used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $followUp
     */
    public function addToFollowUp(\TKusy\Hl7Fhir\R4\CodeableConceptType $followUp)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $followUp
     * @return self
     */
    public function setFollowUp(array $followUp)
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R4\AnnotationType $note)
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
     * @return \TKusy\Hl7Fhir\R4\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
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
     * @param \TKusy\Hl7Fhir\R4\ProcedureFocalDeviceType $focalDevice
     */
    public function addToFocalDevice(\TKusy\Hl7Fhir\R4\ProcedureFocalDeviceType $focalDevice)
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
     * @return \TKusy\Hl7Fhir\R4\ProcedureFocalDeviceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ProcedureFocalDeviceType[] $focalDevice
     * @return self
     */
    public function setFocalDevice(array $focalDevice)
    {
        $this->focalDevice = $focalDevice;
        return $this;
    }

    /**
     * Adds as usedReference
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $usedReference
     */
    public function addToUsedReference(\TKusy\Hl7Fhir\R4\ReferenceType $usedReference)
    {
        $this->usedReference[] = $usedReference;
        return $this;
    }

    /**
     * isset usedReference
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsedReference($index)
    {
        return isset($this->usedReference[$index]);
    }

    /**
     * unset usedReference
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsedReference($index)
    {
        unset($this->usedReference[$index]);
    }

    /**
     * Gets as usedReference
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getUsedReference()
    {
        return $this->usedReference;
    }

    /**
     * Sets a new usedReference
     *
     * Identifies medications, devices and any other substance used as part of the procedure.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $usedReference
     * @return self
     */
    public function setUsedReference(array $usedReference)
    {
        $this->usedReference = $usedReference;
        return $this;
    }

    /**
     * Adds as usedCode
     *
     * Identifies coded items that were used as part of the procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $usedCode
     */
    public function addToUsedCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $usedCode)
    {
        $this->usedCode[] = $usedCode;
        return $this;
    }

    /**
     * isset usedCode
     *
     * Identifies coded items that were used as part of the procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsedCode($index)
    {
        return isset($this->usedCode[$index]);
    }

    /**
     * unset usedCode
     *
     * Identifies coded items that were used as part of the procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsedCode($index)
    {
        unset($this->usedCode[$index]);
    }

    /**
     * Gets as usedCode
     *
     * Identifies coded items that were used as part of the procedure.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getUsedCode()
    {
        return $this->usedCode;
    }

    /**
     * Sets a new usedCode
     *
     * Identifies coded items that were used as part of the procedure.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $usedCode
     * @return self
     */
    public function setUsedCode(array $usedCode)
    {
        $this->usedCode = $usedCode;
        return $this;
    }


}

