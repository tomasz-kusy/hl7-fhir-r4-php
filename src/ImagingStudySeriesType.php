<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImagingStudySeriesType
 *
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context. A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 * XSD Type: ImagingStudy.Series
 */
class ImagingStudySeriesType extends BackboneElementType
{

    /**
     * The DICOM Series Instance UID for the series.
     *
     * @var \TKusy\Hl7FhirR4\IdType $uid
     */
    private $uid = null;

    /**
     * The numeric identifier of this series in the study.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $number
     */
    private $number = null;

    /**
     * The modality of this series sequence.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $modality
     */
    private $modality = null;

    /**
     * A description of the series.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $numberOfInstances
     */
    private $numberOfInstances = null;

    /**
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $bodySite
     */
    private $bodySite = null;

    /**
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $laterality
     */
    private $laterality = null;

    /**
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $specimen
     */
    private $specimen = null;

    /**
     * The date and time the series was started.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $started
     */
    private $started = null;

    /**
     * Indicates who or what performed the series and how they were involved.
     *
     * @var \TKusy\Hl7FhirR4\ImagingStudyPerformerType[] $performer
     */
    private $performer = null;

    /**
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @var \TKusy\Hl7FhirR4\ImagingStudyInstanceType[] $instance
     */
    private $instance = null;

    /**
     * Gets as uid
     *
     * The DICOM Series Instance UID for the series.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * The DICOM Series Instance UID for the series.
     *
     * @param \TKusy\Hl7FhirR4\IdType $uid
     * @return self
     */
    public function setUid(\TKusy\Hl7FhirR4\IdType $uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as number
     *
     * The numeric identifier of this series in the study.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The numeric identifier of this series in the study.
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $number
     * @return self
     */
    public function setNumber(\TKusy\Hl7FhirR4\UnsignedIntType $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as modality
     *
     * The modality of this series sequence.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Sets a new modality
     *
     * The modality of this series sequence.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $modality
     * @return self
     */
    public function setModality(\TKusy\Hl7FhirR4\CodingType $modality)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the series.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the series.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as numberOfInstances
     *
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
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
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
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
     * Adds as endpoint
     *
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
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
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
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
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
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
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
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
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
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
     * Gets as bodySite
     *
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $bodySite
     * @return self
     */
    public function setBodySite(\TKusy\Hl7FhirR4\CodingType $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as laterality
     *
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getLaterality()
    {
        return $this->laterality;
    }

    /**
     * Sets a new laterality
     *
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $laterality
     * @return self
     */
    public function setLaterality(\TKusy\Hl7FhirR4\CodingType $laterality)
    {
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * Adds as specimen
     *
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
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
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
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
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
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
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
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
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
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
     * Gets as started
     *
     * The date and time the series was started.
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
     * The date and time the series was started.
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
     * Adds as performer
     *
     * Indicates who or what performed the series and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImagingStudyPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7FhirR4\ImagingStudyPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who or what performed the series and how they were involved.
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
     * Indicates who or what performed the series and how they were involved.
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
     * Indicates who or what performed the series and how they were involved.
     *
     * @return \TKusy\Hl7FhirR4\ImagingStudyPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what performed the series and how they were involved.
     *
     * @param \TKusy\Hl7FhirR4\ImagingStudyPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as instance
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImagingStudyInstanceType $instance
     */
    public function addToInstance(\TKusy\Hl7FhirR4\ImagingStudyInstanceType $instance)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * isset instance
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstance($index)
    {
        return isset($this->instance[$index]);
    }

    /**
     * unset instance
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstance($index)
    {
        unset($this->instance[$index]);
    }

    /**
     * Gets as instance
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @return \TKusy\Hl7FhirR4\ImagingStudyInstanceType[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @param \TKusy\Hl7FhirR4\ImagingStudyInstanceType[] $instance
     * @return self
     */
    public function setInstance(array $instance)
    {
        $this->instance = $instance;
        return $this;
    }


}

