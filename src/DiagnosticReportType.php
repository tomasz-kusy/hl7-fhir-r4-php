<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DiagnosticReportType
 *
 * The findings and interpretation of diagnostic tests performed on patients, groups of patients, devices, and locations, and/or specimens derived from these. The report includes clinical context such as requesting and provider information, and some mix of atomic results, images, textual and coded interpretations, and formatted representation of diagnostic reports.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DiagnosticReport
 */
class DiagnosticReportType extends DomainResourceType
{

    /**
     * Identifiers assigned to this report by the performer or other systems.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Details concerning a service requested.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The status of the diagnostic report.
     *
     * @var \TKusy\Hl7FhirR4\DiagnosticReportStatusType $status
     */
    private $status = null;

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * A code or name that describes this diagnostic report.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The subject of the report. Usually, but not always, this is a patient. However, diagnostic services also perform analyses on specimens collected from a variety of other sources.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The healthcare event (e.g. a patient and healthcare provider interaction) which this DiagnosticReport is about.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime
     */
    private $effectiveDateTime = null;

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * The date and time that this version of the report was made available to providers, typically after the report was reviewed and verified.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $issued
     */
    private $issued = null;

    /**
     * The diagnostic service that is responsible for issuing the report.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $performer
     */
    private $performer = null;

    /**
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $resultsInterpreter
     */
    private $resultsInterpreter = null;

    /**
     * Details about the specimens on which this diagnostic report is based.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $specimen
     */
    private $specimen = null;

    /**
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $result
     */
    private $result = null;

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $imagingStudy
     */
    private $imagingStudy = null;

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     *
     * @var \TKusy\Hl7FhirR4\DiagnosticReportMediaType[] $media
     */
    private $media = null;

    /**
     * Concise and clinically contextualized summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @var string $conclusion
     */
    private $conclusion = null;

    /**
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $conclusionCode
     */
    private $conclusionCode = null;

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType[] $presentedForm
     */
    private $presentedForm = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this report by the performer or other systems.
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
     * Identifiers assigned to this report by the performer or other systems.
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
     * Identifiers assigned to this report by the performer or other systems.
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
     * Identifiers assigned to this report by the performer or other systems.
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
     * Identifiers assigned to this report by the performer or other systems.
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
     * Adds as basedOn
     *
     * Details concerning a service requested.
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
     * Details concerning a service requested.
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
     * Details concerning a service requested.
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
     * Details concerning a service requested.
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
     * Details concerning a service requested.
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
     * Gets as status
     *
     * The status of the diagnostic report.
     *
     * @return \TKusy\Hl7FhirR4\DiagnosticReportStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the diagnostic report.
     *
     * @param \TKusy\Hl7FhirR4\DiagnosticReportStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\DiagnosticReportStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
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
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
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
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code or name that describes this diagnostic report.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code or name that describes this diagnostic report.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The subject of the report. Usually, but not always, this is a patient. However, diagnostic services also perform analyses on specimens collected from a variety of other sources.
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
     * The subject of the report. Usually, but not always, this is a patient. However, diagnostic services also perform analyses on specimens collected from a variety of other sources.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) which this DiagnosticReport is about.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) which this DiagnosticReport is about.
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
     * Gets as effectiveDateTime
     *
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * Sets a new effectiveDateTime
     *
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime
     * @return self
     */
    public function setEffectiveDateTime(\TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\TKusy\Hl7FhirR4\PeriodType $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as issued
     *
     * The date and time that this version of the report was made available to providers, typically after the report was reviewed and verified.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Sets a new issued
     *
     * The date and time that this version of the report was made available to providers, typically after the report was reviewed and verified.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $issued
     * @return self
     */
    public function setIssued(\TKusy\Hl7FhirR4\InstantType $issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Adds as performer
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    public function addToPerformer(\TKusy\Hl7FhirR4\ReferenceType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * The diagnostic service that is responsible for issuing the report.
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
     * The diagnostic service that is responsible for issuing the report.
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
     * The diagnostic service that is responsible for issuing the report.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as resultsInterpreter
     *
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $resultsInterpreter
     */
    public function addToResultsInterpreter(\TKusy\Hl7FhirR4\ReferenceType $resultsInterpreter)
    {
        $this->resultsInterpreter[] = $resultsInterpreter;
        return $this;
    }

    /**
     * isset resultsInterpreter
     *
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResultsInterpreter($index)
    {
        return isset($this->resultsInterpreter[$index]);
    }

    /**
     * unset resultsInterpreter
     *
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResultsInterpreter($index)
    {
        unset($this->resultsInterpreter[$index]);
    }

    /**
     * Gets as resultsInterpreter
     *
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getResultsInterpreter()
    {
        return $this->resultsInterpreter;
    }

    /**
     * Sets a new resultsInterpreter
     *
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $resultsInterpreter
     * @return self
     */
    public function setResultsInterpreter(array $resultsInterpreter)
    {
        $this->resultsInterpreter = $resultsInterpreter;
        return $this;
    }

    /**
     * Adds as specimen
     *
     * Details about the specimens on which this diagnostic report is based.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $specimen
     */
    public function addToSpecimen(\TKusy\Hl7FhirR4\ReferenceType $specimen)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * isset specimen
     *
     * Details about the specimens on which this diagnostic report is based.
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
     * Details about the specimens on which this diagnostic report is based.
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
     * Details about the specimens on which this diagnostic report is based.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * Details about the specimens on which this diagnostic report is based.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $specimen
     * @return self
     */
    public function setSpecimen(array $specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Adds as result
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $result
     */
    public function addToResult(\TKusy\Hl7FhirR4\ReferenceType $result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * isset result
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $result
     * @return self
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Adds as imagingStudy
     *
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $imagingStudy
     */
    public function addToImagingStudy(\TKusy\Hl7FhirR4\ReferenceType $imagingStudy)
    {
        $this->imagingStudy[] = $imagingStudy;
        return $this;
    }

    /**
     * isset imagingStudy
     *
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImagingStudy($index)
    {
        return isset($this->imagingStudy[$index]);
    }

    /**
     * unset imagingStudy
     *
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImagingStudy($index)
    {
        unset($this->imagingStudy[$index]);
    }

    /**
     * Gets as imagingStudy
     *
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * Sets a new imagingStudy
     *
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $imagingStudy
     * @return self
     */
    public function setImagingStudy(array $imagingStudy)
    {
        $this->imagingStudy = $imagingStudy;
        return $this;
    }

    /**
     * Adds as media
     *
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DiagnosticReportMediaType $media
     */
    public function addToMedia(\TKusy\Hl7FhirR4\DiagnosticReportMediaType $media)
    {
        $this->media[] = $media;
        return $this;
    }

    /**
     * isset media
     *
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMedia($index)
    {
        return isset($this->media[$index]);
    }

    /**
     * unset media
     *
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMedia($index)
    {
        unset($this->media[$index]);
    }

    /**
     * Gets as media
     *
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     *
     * @return \TKusy\Hl7FhirR4\DiagnosticReportMediaType[]
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets a new media
     *
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     *
     * @param \TKusy\Hl7FhirR4\DiagnosticReportMediaType[] $media
     * @return self
     */
    public function setMedia(array $media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * Gets as conclusion
     *
     * Concise and clinically contextualized summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @return string
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Sets a new conclusion
     *
     * Concise and clinically contextualized summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @param string $conclusion
     * @return self
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * Adds as conclusionCode
     *
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $conclusionCode
     */
    public function addToConclusionCode(\TKusy\Hl7FhirR4\CodeableConceptType $conclusionCode)
    {
        $this->conclusionCode[] = $conclusionCode;
        return $this;
    }

    /**
     * isset conclusionCode
     *
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConclusionCode($index)
    {
        return isset($this->conclusionCode[$index]);
    }

    /**
     * unset conclusionCode
     *
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConclusionCode($index)
    {
        unset($this->conclusionCode[$index]);
    }

    /**
     * Gets as conclusionCode
     *
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getConclusionCode()
    {
        return $this->conclusionCode;
    }

    /**
     * Sets a new conclusionCode
     *
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $conclusionCode
     * @return self
     */
    public function setConclusionCode(array $conclusionCode)
    {
        $this->conclusionCode = $conclusionCode;
        return $this;
    }

    /**
     * Adds as presentedForm
     *
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AttachmentType $presentedForm
     */
    public function addToPresentedForm(\TKusy\Hl7FhirR4\AttachmentType $presentedForm)
    {
        $this->presentedForm[] = $presentedForm;
        return $this;
    }

    /**
     * isset presentedForm
     *
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPresentedForm($index)
    {
        return isset($this->presentedForm[$index]);
    }

    /**
     * unset presentedForm
     *
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPresentedForm($index)
    {
        unset($this->presentedForm[$index]);
    }

    /**
     * Gets as presentedForm
     *
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType[]
     */
    public function getPresentedForm()
    {
        return $this->presentedForm;
    }

    /**
     * Sets a new presentedForm
     *
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType[] $presentedForm
     * @return self
     */
    public function setPresentedForm(array $presentedForm)
    {
        $this->presentedForm = $presentedForm;
        return $this;
    }


}

