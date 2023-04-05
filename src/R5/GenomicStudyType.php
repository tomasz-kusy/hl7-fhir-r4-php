<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GenomicStudyType
 *
 * A GenomicStudy is a set of analyses performed to analyze and generate genomic data.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: GenomicStudy
 */
class GenomicStudyType extends DomainResourceType
{

    /**
     * Identifiers for this genomic study.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of the genomic study.
     *
     * @var \TKusy\Hl7Fhir\R5\GenomicStudyStatusType $status
     */
    private $status = null;

    /**
     * The type of the study, e.g., Familial variant segregation, Functional variation detection, or Gene expression profiling.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The primary subject of the genomic study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The healthcare event with which this genomics study is associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * When the genomic study was started.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $startDate
     */
    private $startDate = null;

    /**
     * Event resources that the genomic study is based on.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Healthcare professional who requested or referred the genomic study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $referrer
     */
    private $referrer = null;

    /**
     * Healthcare professionals who interpreted the genomic study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $interpreter
     */
    private $interpreter = null;

    /**
     * Why the genomic study was performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * The defined protocol that describes the study.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol that describes the study.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * Comments related to the genomic study.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Description of the genomic study.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The details about a specific analysis that was performed in this GenomicStudy.
     *
     * @var \TKusy\Hl7Fhir\R5\GenomicStudyAnalysisType[] $analysis
     */
    private $analysis = null;

    /**
     * Adds as identifier
     *
     * Identifiers for this genomic study.
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
     * Identifiers for this genomic study.
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
     * Identifiers for this genomic study.
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
     * Identifiers for this genomic study.
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
     * Identifiers for this genomic study.
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
     * The status of the genomic study.
     *
     * @return \TKusy\Hl7Fhir\R5\GenomicStudyStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the genomic study.
     *
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\GenomicStudyStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as type
     *
     * The type of the study, e.g., Familial variant segregation, Functional variation detection, or Gene expression profiling.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The type of the study, e.g., Familial variant segregation, Functional variation detection, or Gene expression profiling.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The type of the study, e.g., Familial variant segregation, Functional variation detection, or Gene expression profiling.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The type of the study, e.g., Familial variant segregation, Functional variation detection, or Gene expression profiling.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the study, e.g., Familial variant segregation, Functional variation detection, or Gene expression profiling.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The primary subject of the genomic study.
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
     * The primary subject of the genomic study.
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
     * The healthcare event with which this genomics study is associated.
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
     * The healthcare event with which this genomics study is associated.
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
     * Gets as startDate
     *
     * When the genomic study was started.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * When the genomic study was started.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $startDate
     * @return self
     */
    public function setStartDate(?\TKusy\Hl7Fhir\R5\DateTimeType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * Event resources that the genomic study is based on.
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
     * Event resources that the genomic study is based on.
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
     * Event resources that the genomic study is based on.
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
     * Event resources that the genomic study is based on.
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
     * Event resources that the genomic study is based on.
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
     * Gets as referrer
     *
     * Healthcare professional who requested or referred the genomic study.
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
     * Healthcare professional who requested or referred the genomic study.
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
     * Adds as interpreter
     *
     * Healthcare professionals who interpreted the genomic study.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $interpreter
     */
    public function addToInterpreter(\TKusy\Hl7Fhir\R5\ReferenceType $interpreter)
    {
        $this->interpreter[] = $interpreter;
        return $this;
    }

    /**
     * isset interpreter
     *
     * Healthcare professionals who interpreted the genomic study.
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
     * Healthcare professionals who interpreted the genomic study.
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
     * Healthcare professionals who interpreted the genomic study.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * Sets a new interpreter
     *
     * Healthcare professionals who interpreted the genomic study.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $interpreter
     * @return self
     */
    public function setInterpreter(array $interpreter = null)
    {
        $this->interpreter = $interpreter;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Why the genomic study was performed.
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
     * Why the genomic study was performed.
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
     * Why the genomic study was performed.
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
     * Why the genomic study was performed.
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
     * Why the genomic study was performed.
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
     * Gets as instantiatesCanonical
     *
     * The defined protocol that describes the study.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The defined protocol that describes the study.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol that describes the study.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol that describes the study.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(?\TKusy\Hl7Fhir\R5\UriType $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments related to the genomic study.
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
     * Comments related to the genomic study.
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
     * Comments related to the genomic study.
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
     * Comments related to the genomic study.
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
     * Comments related to the genomic study.
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
     * Description of the genomic study.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the genomic study.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as analysis
     *
     * The details about a specific analysis that was performed in this GenomicStudy.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyAnalysisType $analysis
     */
    public function addToAnalysis(\TKusy\Hl7Fhir\R5\GenomicStudyAnalysisType $analysis)
    {
        $this->analysis[] = $analysis;
        return $this;
    }

    /**
     * isset analysis
     *
     * The details about a specific analysis that was performed in this GenomicStudy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnalysis($index)
    {
        return isset($this->analysis[$index]);
    }

    /**
     * unset analysis
     *
     * The details about a specific analysis that was performed in this GenomicStudy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnalysis($index)
    {
        unset($this->analysis[$index]);
    }

    /**
     * Gets as analysis
     *
     * The details about a specific analysis that was performed in this GenomicStudy.
     *
     * @return \TKusy\Hl7Fhir\R5\GenomicStudyAnalysisType[]
     */
    public function getAnalysis()
    {
        return $this->analysis;
    }

    /**
     * Sets a new analysis
     *
     * The details about a specific analysis that was performed in this GenomicStudy.
     *
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyAnalysisType[] $analysis
     * @return self
     */
    public function setAnalysis(array $analysis = null)
    {
        $this->analysis = $analysis;
        return $this;
    }


}

