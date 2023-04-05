<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GenomicStudyAnalysisType
 *
 * A GenomicStudy is a set of analyses performed to analyze and generate genomic data.
 * XSD Type: GenomicStudy.Analysis
 */
class GenomicStudyAnalysisType extends BackboneElementType
{

    /**
     * Identifiers for the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Type of the methods used in the analysis, e.g., Fluorescence in situ hybridization (FISH), Karyotyping, or Microsatellite instability testing (MSI).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $methodType
     */
    private $methodType = null;

    /**
     * Type of the genomic changes studied in the analysis, e.g., DNA, RNA, or amino acid change.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $changeType
     */
    private $changeType = null;

    /**
     * The reference genome build that is used in this analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $genomeBuild
     */
    private $genomeBuild = null;

    /**
     * The defined protocol that describes the analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol that describes the analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * Name of the analysis event (human friendly).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The focus of a genomic analysis when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the GenomicStudy.subject would be the child (proband) and the GenomicStudy.analysis.focus of a specific analysis would be the parent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     */
    private $focus = null;

    /**
     * The specimen used in the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $specimen
     */
    private $specimen = null;

    /**
     * The date of the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Any notes capture with the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The protocol that was performed for the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $protocolPerformed
     */
    private $protocolPerformed = null;

    /**
     * The genomic regions to be studied in the analysis (BED file).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $regionsStudied
     */
    private $regionsStudied = null;

    /**
     * Genomic regions actually called in the analysis event (BED file).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $regionsCalled
     */
    private $regionsCalled = null;

    /**
     * Inputs for the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\GenomicStudyInputType[] $input
     */
    private $input = null;

    /**
     * Outputs for the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\GenomicStudyOutputType[] $output
     */
    private $output = null;

    /**
     * Performer for the analysis event.
     *
     * @var \TKusy\Hl7Fhir\R5\GenomicStudyPerformerType[] $performer
     */
    private $performer = null;

    /**
     * Devices used for the analysis (e.g., instruments, software), with settings and parameters.
     *
     * @var \TKusy\Hl7Fhir\R5\GenomicStudyDeviceType[] $device
     */
    private $device = null;

    /**
     * Adds as identifier
     *
     * Identifiers for the analysis event.
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
     * Identifiers for the analysis event.
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
     * Identifiers for the analysis event.
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
     * Identifiers for the analysis event.
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
     * Identifiers for the analysis event.
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
     * Adds as methodType
     *
     * Type of the methods used in the analysis, e.g., Fluorescence in situ hybridization (FISH), Karyotyping, or Microsatellite instability testing (MSI).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $methodType
     */
    public function addToMethodType(\TKusy\Hl7Fhir\R5\CodeableConceptType $methodType)
    {
        $this->methodType[] = $methodType;
        return $this;
    }

    /**
     * isset methodType
     *
     * Type of the methods used in the analysis, e.g., Fluorescence in situ hybridization (FISH), Karyotyping, or Microsatellite instability testing (MSI).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMethodType($index)
    {
        return isset($this->methodType[$index]);
    }

    /**
     * unset methodType
     *
     * Type of the methods used in the analysis, e.g., Fluorescence in situ hybridization (FISH), Karyotyping, or Microsatellite instability testing (MSI).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMethodType($index)
    {
        unset($this->methodType[$index]);
    }

    /**
     * Gets as methodType
     *
     * Type of the methods used in the analysis, e.g., Fluorescence in situ hybridization (FISH), Karyotyping, or Microsatellite instability testing (MSI).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getMethodType()
    {
        return $this->methodType;
    }

    /**
     * Sets a new methodType
     *
     * Type of the methods used in the analysis, e.g., Fluorescence in situ hybridization (FISH), Karyotyping, or Microsatellite instability testing (MSI).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $methodType
     * @return self
     */
    public function setMethodType(array $methodType = null)
    {
        $this->methodType = $methodType;
        return $this;
    }

    /**
     * Adds as changeType
     *
     * Type of the genomic changes studied in the analysis, e.g., DNA, RNA, or amino acid change.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $changeType
     */
    public function addToChangeType(\TKusy\Hl7Fhir\R5\CodeableConceptType $changeType)
    {
        $this->changeType[] = $changeType;
        return $this;
    }

    /**
     * isset changeType
     *
     * Type of the genomic changes studied in the analysis, e.g., DNA, RNA, or amino acid change.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChangeType($index)
    {
        return isset($this->changeType[$index]);
    }

    /**
     * unset changeType
     *
     * Type of the genomic changes studied in the analysis, e.g., DNA, RNA, or amino acid change.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChangeType($index)
    {
        unset($this->changeType[$index]);
    }

    /**
     * Gets as changeType
     *
     * Type of the genomic changes studied in the analysis, e.g., DNA, RNA, or amino acid change.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getChangeType()
    {
        return $this->changeType;
    }

    /**
     * Sets a new changeType
     *
     * Type of the genomic changes studied in the analysis, e.g., DNA, RNA, or amino acid change.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $changeType
     * @return self
     */
    public function setChangeType(array $changeType = null)
    {
        $this->changeType = $changeType;
        return $this;
    }

    /**
     * Gets as genomeBuild
     *
     * The reference genome build that is used in this analysis.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getGenomeBuild()
    {
        return $this->genomeBuild;
    }

    /**
     * Sets a new genomeBuild
     *
     * The reference genome build that is used in this analysis.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $genomeBuild
     * @return self
     */
    public function setGenomeBuild(?\TKusy\Hl7Fhir\R5\CodeableConceptType $genomeBuild = null)
    {
        $this->genomeBuild = $genomeBuild;
        return $this;
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The defined protocol that describes the analysis.
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
     * The defined protocol that describes the analysis.
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
     * The URL pointing to an externally maintained protocol that describes the analysis.
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
     * The URL pointing to an externally maintained protocol that describes the analysis.
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
     * Gets as title
     *
     * Name of the analysis event (human friendly).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Name of the analysis event (human friendly).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as focus
     *
     * The focus of a genomic analysis when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the GenomicStudy.subject would be the child (proband) and the GenomicStudy.analysis.focus of a specific analysis would be the parent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    public function addToFocus(\TKusy\Hl7Fhir\R5\ReferenceType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * The focus of a genomic analysis when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the GenomicStudy.subject would be the child (proband) and the GenomicStudy.analysis.focus of a specific analysis would be the parent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocus($index)
    {
        return isset($this->focus[$index]);
    }

    /**
     * unset focus
     *
     * The focus of a genomic analysis when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the GenomicStudy.subject would be the child (proband) and the GenomicStudy.analysis.focus of a specific analysis would be the parent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocus($index)
    {
        unset($this->focus[$index]);
    }

    /**
     * Gets as focus
     *
     * The focus of a genomic analysis when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the GenomicStudy.subject would be the child (proband) and the GenomicStudy.analysis.focus of a specific analysis would be the parent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The focus of a genomic analysis when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the GenomicStudy.subject would be the child (proband) and the GenomicStudy.analysis.focus of a specific analysis would be the parent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Adds as specimen
     *
     * The specimen used in the analysis event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $specimen
     */
    public function addToSpecimen(\TKusy\Hl7Fhir\R5\ReferenceType $specimen)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * isset specimen
     *
     * The specimen used in the analysis event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecimen($index)
    {
        return isset($this->specimen[$index]);
    }

    /**
     * unset specimen
     *
     * The specimen used in the analysis event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecimen($index)
    {
        unset($this->specimen[$index]);
    }

    /**
     * Gets as specimen
     *
     * The specimen used in the analysis event.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * The specimen used in the analysis event.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $specimen
     * @return self
     */
    public function setSpecimen(array $specimen = null)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date of the analysis event.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date of the analysis event.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as note
     *
     * Any notes capture with the analysis event.
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
     * Any notes capture with the analysis event.
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
     * Any notes capture with the analysis event.
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
     * Any notes capture with the analysis event.
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
     * Any notes capture with the analysis event.
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
     * Gets as protocolPerformed
     *
     * The protocol that was performed for the analysis event.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProtocolPerformed()
    {
        return $this->protocolPerformed;
    }

    /**
     * Sets a new protocolPerformed
     *
     * The protocol that was performed for the analysis event.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $protocolPerformed
     * @return self
     */
    public function setProtocolPerformed(?\TKusy\Hl7Fhir\R5\ReferenceType $protocolPerformed = null)
    {
        $this->protocolPerformed = $protocolPerformed;
        return $this;
    }

    /**
     * Adds as regionsStudied
     *
     * The genomic regions to be studied in the analysis (BED file).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $regionsStudied
     */
    public function addToRegionsStudied(\TKusy\Hl7Fhir\R5\ReferenceType $regionsStudied)
    {
        $this->regionsStudied[] = $regionsStudied;
        return $this;
    }

    /**
     * isset regionsStudied
     *
     * The genomic regions to be studied in the analysis (BED file).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegionsStudied($index)
    {
        return isset($this->regionsStudied[$index]);
    }

    /**
     * unset regionsStudied
     *
     * The genomic regions to be studied in the analysis (BED file).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegionsStudied($index)
    {
        unset($this->regionsStudied[$index]);
    }

    /**
     * Gets as regionsStudied
     *
     * The genomic regions to be studied in the analysis (BED file).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRegionsStudied()
    {
        return $this->regionsStudied;
    }

    /**
     * Sets a new regionsStudied
     *
     * The genomic regions to be studied in the analysis (BED file).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $regionsStudied
     * @return self
     */
    public function setRegionsStudied(array $regionsStudied = null)
    {
        $this->regionsStudied = $regionsStudied;
        return $this;
    }

    /**
     * Adds as regionsCalled
     *
     * Genomic regions actually called in the analysis event (BED file).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $regionsCalled
     */
    public function addToRegionsCalled(\TKusy\Hl7Fhir\R5\ReferenceType $regionsCalled)
    {
        $this->regionsCalled[] = $regionsCalled;
        return $this;
    }

    /**
     * isset regionsCalled
     *
     * Genomic regions actually called in the analysis event (BED file).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegionsCalled($index)
    {
        return isset($this->regionsCalled[$index]);
    }

    /**
     * unset regionsCalled
     *
     * Genomic regions actually called in the analysis event (BED file).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegionsCalled($index)
    {
        unset($this->regionsCalled[$index]);
    }

    /**
     * Gets as regionsCalled
     *
     * Genomic regions actually called in the analysis event (BED file).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRegionsCalled()
    {
        return $this->regionsCalled;
    }

    /**
     * Sets a new regionsCalled
     *
     * Genomic regions actually called in the analysis event (BED file).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $regionsCalled
     * @return self
     */
    public function setRegionsCalled(array $regionsCalled = null)
    {
        $this->regionsCalled = $regionsCalled;
        return $this;
    }

    /**
     * Adds as input
     *
     * Inputs for the analysis event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyInputType $input
     */
    public function addToInput(\TKusy\Hl7Fhir\R5\GenomicStudyInputType $input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * isset input
     *
     * Inputs for the analysis event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInput($index)
    {
        return isset($this->input[$index]);
    }

    /**
     * unset input
     *
     * Inputs for the analysis event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInput($index)
    {
        unset($this->input[$index]);
    }

    /**
     * Gets as input
     *
     * Inputs for the analysis event.
     *
     * @return \TKusy\Hl7Fhir\R5\GenomicStudyInputType[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Sets a new input
     *
     * Inputs for the analysis event.
     *
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyInputType[] $input
     * @return self
     */
    public function setInput(array $input = null)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * Adds as output
     *
     * Outputs for the analysis event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyOutputType $output
     */
    public function addToOutput(\TKusy\Hl7Fhir\R5\GenomicStudyOutputType $output)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * isset output
     *
     * Outputs for the analysis event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutput($index)
    {
        return isset($this->output[$index]);
    }

    /**
     * unset output
     *
     * Outputs for the analysis event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutput($index)
    {
        unset($this->output[$index]);
    }

    /**
     * Gets as output
     *
     * Outputs for the analysis event.
     *
     * @return \TKusy\Hl7Fhir\R5\GenomicStudyOutputType[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Sets a new output
     *
     * Outputs for the analysis event.
     *
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyOutputType[] $output
     * @return self
     */
    public function setOutput(array $output = null)
    {
        $this->output = $output;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Performer for the analysis event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\GenomicStudyPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Performer for the analysis event.
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
     * Performer for the analysis event.
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
     * Performer for the analysis event.
     *
     * @return \TKusy\Hl7Fhir\R5\GenomicStudyPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Performer for the analysis event.
     *
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as device
     *
     * Devices used for the analysis (e.g., instruments, software), with settings and parameters.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyDeviceType $device
     */
    public function addToDevice(\TKusy\Hl7Fhir\R5\GenomicStudyDeviceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * Devices used for the analysis (e.g., instruments, software), with settings and parameters.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * Devices used for the analysis (e.g., instruments, software), with settings and parameters.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * Devices used for the analysis (e.g., instruments, software), with settings and parameters.
     *
     * @return \TKusy\Hl7Fhir\R5\GenomicStudyDeviceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Devices used for the analysis (e.g., instruments, software), with settings and parameters.
     *
     * @param \TKusy\Hl7Fhir\R5\GenomicStudyDeviceType[] $device
     * @return self
     */
    public function setDevice(array $device = null)
    {
        $this->device = $device;
        return $this;
    }


}

