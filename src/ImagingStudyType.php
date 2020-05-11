<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImagingStudyType
 *
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context. A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ImagingStudy
 */
class ImagingStudyType extends DomainResourceType
{

    /**
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID, and Accession Number.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The current state of the ImagingStudy.
     *
     * @var \TKusy\Hl7FhirR4\ImagingStudyStatusType $status
     */
    private $status = null;

    /**
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $modality
     */
    private $modality = [
        
    ];

    /**
     * The subject, typically a patient, of the imaging study.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this ImagingStudy is made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Date and time the study started.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $started
     */
    private $started = null;

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = [
        
    ];

    /**
     * The requesting/referring physician.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $referrer
     */
    private $referrer = null;

    /**
     * Who read the study and interpreted the images or other content.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $interpreter
     */
    private $interpreter = [
        
    ];

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     */
    private $endpoint = [
        
    ];

    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $numberOfSeries
     */
    private $numberOfSeries = null;

    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $numberOfInstances
     */
    private $numberOfInstances = null;

    /**
     * The procedure which this ImagingStudy was part of.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $procedureReference
     */
    private $procedureReference = null;

    /**
     * The code for the performed procedure type.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $procedureCode
     */
    private $procedureCode = [
        
    ];

    /**
     * The principal physical location where the ImagingStudy was performed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * Description of clinical condition indicating why the ImagingStudy was requested.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = [
        
    ];

    /**
     * Indicates another resource whose existence justifies this Study.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = [
        
    ];

    /**
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Each study has one or more series of images or other content.
     *
     * @var \TKusy\Hl7FhirR4\ImagingStudySeriesType[] $series
     */
    private $series = [
        
    ];

    /**
     * Adds as identifier
     *
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID, and Accession Number.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID, and Accession Number.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID, and Accession Number.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID, and Accession Number.
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
     * Identifiers for the ImagingStudy such as DICOM Study Instance UID, and Accession Number.
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
     * The current state of the ImagingStudy.
     *
     * @return \TKusy\Hl7FhirR4\ImagingStudyStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the ImagingStudy.
     *
     * @param \TKusy\Hl7FhirR4\ImagingStudyStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ImagingStudyStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as modality
     *
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $modality
     */
    public function addToModality(\TKusy\Hl7FhirR4\CodingType $modality)
    {
        $this->modality[] = $modality;
        return $this;
    }

    /**
     * isset modality
     *
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
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
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
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
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Sets a new modality
     *
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $modality
     * @return self
     */
    public function setModality(array $modality)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The subject, typically a patient, of the imaging study.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this ImagingStudy is made.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this ImagingStudy is made.
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
     * Gets as started
     *
     * Date and time the study started.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $started
     * @return self
     */
    public function setStarted(\TKusy\Hl7FhirR4\DateTimeType $started)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7FhirR4\ReferenceType $basedOn)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as referrer
     *
     * The requesting/referring physician.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $referrer
     * @return self
     */
    public function setReferrer(\TKusy\Hl7FhirR4\ReferenceType $referrer)
    {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Adds as interpreter
     *
     * Who read the study and interpreted the images or other content.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $interpreter
     */
    public function addToInterpreter(\TKusy\Hl7FhirR4\ReferenceType $interpreter)
    {
        $this->interpreter[] = $interpreter;
        return $this;
    }

    /**
     * isset interpreter
     *
     * Who read the study and interpreted the images or other content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterpreter($index)
    {
        return isset($this->interpreter[$index]);
    }

    /**
     * unset interpreter
     *
     * Who read the study and interpreted the images or other content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterpreter($index)
    {
        unset($this->interpreter[$index]);
    }

    /**
     * Gets as interpreter
     *
     * Who read the study and interpreted the images or other content.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * Sets a new interpreter
     *
     * Who read the study and interpreted the images or other content.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $interpreter
     * @return self
     */
    public function setInterpreter(array $interpreter)
    {
        $this->interpreter = $interpreter;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7FhirR4\ReferenceType $endpoint)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Gets as numberOfSeries
     *
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
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
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $numberOfSeries
     * @return self
     */
    public function setNumberOfSeries(\TKusy\Hl7FhirR4\UnsignedIntType $numberOfSeries)
    {
        $this->numberOfSeries = $numberOfSeries;
        return $this;
    }

    /**
     * Gets as numberOfInstances
     *
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
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
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $numberOfInstances
     * @return self
     */
    public function setNumberOfInstances(\TKusy\Hl7FhirR4\UnsignedIntType $numberOfInstances)
    {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Gets as procedureReference
     *
     * The procedure which this ImagingStudy was part of.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProcedureReference()
    {
        return $this->procedureReference;
    }

    /**
     * Sets a new procedureReference
     *
     * The procedure which this ImagingStudy was part of.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $procedureReference
     * @return self
     */
    public function setProcedureReference(\TKusy\Hl7FhirR4\ReferenceType $procedureReference)
    {
        $this->procedureReference = $procedureReference;
        return $this;
    }

    /**
     * Adds as procedureCode
     *
     * The code for the performed procedure type.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $procedureCode
     */
    public function addToProcedureCode(\TKusy\Hl7FhirR4\CodeableConceptType $procedureCode)
    {
        $this->procedureCode[] = $procedureCode;
        return $this;
    }

    /**
     * isset procedureCode
     *
     * The code for the performed procedure type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcedureCode($index)
    {
        return isset($this->procedureCode[$index]);
    }

    /**
     * unset procedureCode
     *
     * The code for the performed procedure type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcedureCode($index)
    {
        unset($this->procedureCode[$index]);
    }

    /**
     * Gets as procedureCode
     *
     * The code for the performed procedure type.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getProcedureCode()
    {
        return $this->procedureCode;
    }

    /**
     * Sets a new procedureCode
     *
     * The code for the performed procedure type.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $procedureCode
     * @return self
     */
    public function setProcedureCode(array $procedureCode)
    {
        $this->procedureCode = $procedureCode;
        return $this;
    }

    /**
     * Gets as location
     *
     * The principal physical location where the ImagingStudy was performed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Description of clinical condition indicating why the ImagingStudy was requested.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7FhirR4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * Description of clinical condition indicating why the ImagingStudy was requested.
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
     * Description of clinical condition indicating why the ImagingStudy was requested.
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
     * Description of clinical condition indicating why the ImagingStudy was requested.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * Description of clinical condition indicating why the ImagingStudy was requested.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
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
     * Indicates another resource whose existence justifies this Study.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7FhirR4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * Indicates another resource whose existence justifies this Study.
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
     * Indicates another resource whose existence justifies this Study.
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
     * Indicates another resource whose existence justifies this Study.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * Indicates another resource whose existence justifies this Study.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Adds as note
     *
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as description
     *
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
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
     * @param \TKusy\Hl7FhirR4\ImagingStudySeriesType $series
     */
    public function addToSeries(\TKusy\Hl7FhirR4\ImagingStudySeriesType $series)
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
     * @return \TKusy\Hl7FhirR4\ImagingStudySeriesType[]
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
     * @param \TKusy\Hl7FhirR4\ImagingStudySeriesType[] $series
     * @return self
     */
    public function setSeries(array $series)
    {
        $this->series = $series;
        return $this;
    }


}

