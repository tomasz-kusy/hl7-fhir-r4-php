<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImagingStudyType
 *
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context. A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ImagingStudy
 */
class ImagingStudyType extends DomainResourceType
{

    /**
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The current state of the ImagingStudy resource. This is not the status of any ServiceRequest or Task resources associated with the ImagingStudy.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingStudyStatusType $status
     */
    private $status = null;

    /**
     * A list of all the distinct values of series.modality. This may include both acquisition and non-acquisition modalities.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $modality
     */
    private $modality = null;

    /**
     * The subject, typically a patient, of the imaging study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this ImagingStudy is made.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Date and time the study started.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $started
     */
    private $started = null;

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular ImagingStudy is a component or step. For example, an ImagingStudy as part of a procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * The requesting/referring physician.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $referrer
     */
    private $referrer = null;

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfSeries
     */
    private $numberOfSeries = null;

    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfInstances
     */
    private $numberOfInstances = null;

    /**
     * This field corresponds to the DICOM Procedure Code Sequence (0008,1032). This is different from the FHIR Procedure resource that may include the ImagingStudy.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $procedure
     */
    private $procedure = null;

    /**
     * The principal physical location where the ImagingStudy was performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Description of clinical condition indicating why the ImagingStudy was requested, and/or Indicates another resource whose existence justifies this Study.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Each study has one or more series of images or other content.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingStudySeriesType[] $series
     */
    private $series = null;

    /**
     * Adds as identifier
     *
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID.
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
     * Gets as status
     *
     * The current state of the ImagingStudy resource. This is not the status of any ServiceRequest or Task resources associated with the ImagingStudy.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingStudyStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the ImagingStudy resource. This is not the status of any ServiceRequest or Task resources associated with the ImagingStudy.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingStudyStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ImagingStudyStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as modality
     *
     * A list of all the distinct values of series.modality. This may include both acquisition and non-acquisition modalities.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $modality
     */
    public function addToModality(\TKusy\Hl7Fhir\R5\CodeableConceptType $modality)
    {
        $this->modality[] = $modality;
        return $this;
    }

    /**
     * isset modality
     *
     * A list of all the distinct values of series.modality. This may include both acquisition and non-acquisition modalities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModality($index)
    {
        return isset($this->modality[$index]);
    }

    /**
     * unset modality
     *
     * A list of all the distinct values of series.modality. This may include both acquisition and non-acquisition modalities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModality($index)
    {
        unset($this->modality[$index]);
    }

    /**
     * Gets as modality
     *
     * A list of all the distinct values of series.modality. This may include both acquisition and non-acquisition modalities.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Sets a new modality
     *
     * A list of all the distinct values of series.modality. This may include both acquisition and non-acquisition modalities.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $modality
     * @return self
     */
    public function setModality(array $modality = null)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The subject, typically a patient, of the imaging study.
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
     * The subject, typically a patient, of the imaging study.
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
     * Gets as encounter
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this ImagingStudy is made.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this ImagingStudy is made.
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
     * Gets as started
     *
     * Date and time the study started.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Sets a new started
     *
     * Date and time the study started.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $started
     * @return self
     */
    public function setStarted(?\TKusy\Hl7Fhir\R5\DateTimeType $started = null)
    {
        $this->started = $started;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A list of the diagnostic requests that resulted in this imaging study being performed.
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
     * A list of the diagnostic requests that resulted in this imaging study being performed.
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
     * A list of the diagnostic requests that resulted in this imaging study being performed.
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
     * A list of the diagnostic requests that resulted in this imaging study being performed.
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
     * A list of the diagnostic requests that resulted in this imaging study being performed.
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
     * A larger event of which this particular ImagingStudy is a component or step. For example, an ImagingStudy as part of a procedure.
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
     * A larger event of which this particular ImagingStudy is a component or step. For example, an ImagingStudy as part of a procedure.
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
     * A larger event of which this particular ImagingStudy is a component or step. For example, an ImagingStudy as part of a procedure.
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
     * A larger event of which this particular ImagingStudy is a component or step. For example, an ImagingStudy as part of a procedure.
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
     * A larger event of which this particular ImagingStudy is a component or step. For example, an ImagingStudy as part of a procedure.
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
     * Gets as referrer
     *
     * The requesting/referring physician.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * Sets a new referrer
     *
     * The requesting/referring physician.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $referrer
     * @return self
     */
    public function setReferrer(?\TKusy\Hl7Fhir\R5\ReferenceType $referrer = null)
    {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7Fhir\R5\ReferenceType $endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * isset endpoint
     *
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndpoint($index)
    {
        return isset($this->endpoint[$index]);
    }

    /**
     * unset endpoint
     *
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndpoint($index)
    {
        unset($this->endpoint[$index]);
    }

    /**
     * Gets as endpoint
     *
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint = null)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Gets as numberOfSeries
     *
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }

    /**
     * Sets a new numberOfSeries
     *
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfSeries
     * @return self
     */
    public function setNumberOfSeries(?\TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfSeries = null)
    {
        $this->numberOfSeries = $numberOfSeries;
        return $this;
    }

    /**
     * Gets as numberOfInstances
     *
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * Sets a new numberOfInstances
     *
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfInstances
     * @return self
     */
    public function setNumberOfInstances(?\TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfInstances = null)
    {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Adds as procedure
     *
     * This field corresponds to the DICOM Procedure Code Sequence (0008,1032). This is different from the FHIR Procedure resource that may include the ImagingStudy.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $procedure
     */
    public function addToProcedure(\TKusy\Hl7Fhir\R5\CodeableReferenceType $procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * isset procedure
     *
     * This field corresponds to the DICOM Procedure Code Sequence (0008,1032). This is different from the FHIR Procedure resource that may include the ImagingStudy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcedure($index)
    {
        return isset($this->procedure[$index]);
    }

    /**
     * unset procedure
     *
     * This field corresponds to the DICOM Procedure Code Sequence (0008,1032). This is different from the FHIR Procedure resource that may include the ImagingStudy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcedure($index)
    {
        unset($this->procedure[$index]);
    }

    /**
     * Gets as procedure
     *
     * This field corresponds to the DICOM Procedure Code Sequence (0008,1032). This is different from the FHIR Procedure resource that may include the ImagingStudy.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * This field corresponds to the DICOM Procedure Code Sequence (0008,1032). This is different from the FHIR Procedure resource that may include the ImagingStudy.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $procedure
     * @return self
     */
    public function setProcedure(array $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Gets as location
     *
     * The principal physical location where the ImagingStudy was performed.
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
     * The principal physical location where the ImagingStudy was performed.
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
     * Description of clinical condition indicating why the ImagingStudy was requested, and/or Indicates another resource whose existence justifies this Study.
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
     * Description of clinical condition indicating why the ImagingStudy was requested, and/or Indicates another resource whose existence justifies this Study.
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
     * Description of clinical condition indicating why the ImagingStudy was requested, and/or Indicates another resource whose existence justifies this Study.
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
     * Description of clinical condition indicating why the ImagingStudy was requested, and/or Indicates another resource whose existence justifies this Study.
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
     * Description of clinical condition indicating why the ImagingStudy was requested, and/or Indicates another resource whose existence justifies this Study.
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
     * Adds as note
     *
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
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
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
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
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
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
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
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
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
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
     * Gets as description
     *
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as series
     *
     * Each study has one or more series of images or other content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImagingStudySeriesType $series
     */
    public function addToSeries(\TKusy\Hl7Fhir\R5\ImagingStudySeriesType $series)
    {
        $this->series[] = $series;
        return $this;
    }

    /**
     * isset series
     *
     * Each study has one or more series of images or other content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeries($index)
    {
        return isset($this->series[$index]);
    }

    /**
     * unset series
     *
     * Each study has one or more series of images or other content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeries($index)
    {
        unset($this->series[$index]);
    }

    /**
     * Gets as series
     *
     * Each study has one or more series of images or other content.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingStudySeriesType[]
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Sets a new series
     *
     * Each study has one or more series of images or other content.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingStudySeriesType[] $series
     * @return self
     */
    public function setSeries(array $series = null)
    {
        $this->series = $series;
        return $this;
    }


}

