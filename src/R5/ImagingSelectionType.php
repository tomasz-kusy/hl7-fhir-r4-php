<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImagingSelectionType
 *
 * A selection of DICOM SOP instances and/or frames within a single Study and Series. This might include additional specifics such as an image region, an Observation UID or a Segmentation Number, allowing linkage to an Observation Resource or transferring this information along with the ImagingStudy Resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ImagingSelection
 */
class ImagingSelectionType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this imaging selection.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The current state of the ImagingSelection resource. This is not the status of any ImagingStudy, ServiceRequest, or Task resources associated with the ImagingSelection.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingSelectionStatusType $status
     */
    private $status = null;

    /**
     * The patient, or group of patients, location, device, organization, procedure or practitioner this imaging selection is about and into whose or what record the imaging selection is placed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The date and time this imaging selection was created.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $issued
     */
    private $issued = null;

    /**
     * Selector of the instances – human or machine.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingSelectionPerformerType[] $performer
     */
    private $performer = null;

    /**
     * A list of the diagnostic requests that resulted in this imaging selection being performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Classifies the imaging selection.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Reason for referencing the selected content.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The Study Instance UID for the DICOM Study from which the images were selected.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $studyUid
     */
    private $studyUid = null;

    /**
     * The imaging study from which the imaging selection is made.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * The network service providing retrieval access to the selected images, frames, etc. See implementation notes for information about using DICOM endpoints.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * The Series Instance UID for the DICOM Series from which the images were selected.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $seriesUid
     */
    private $seriesUid = null;

    /**
     * The Series Number for the DICOM Series from which the images were selected.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $seriesNumber
     */
    private $seriesNumber = null;

    /**
     * The Frame of Reference UID identifying the coordinate system that conveys spatial and/or temporal information for the selected images or frames.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $frameOfReferenceUid
     */
    private $frameOfReferenceUid = null;

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite
     */
    private $bodySite = null;

    /**
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     */
    private $focus = null;

    /**
     * Each imaging selection includes one or more selected DICOM SOP instances.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingSelectionInstanceType[] $instance
     */
    private $instance = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this imaging selection.
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
     * A unique identifier assigned to this imaging selection.
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
     * A unique identifier assigned to this imaging selection.
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
     * A unique identifier assigned to this imaging selection.
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
     * A unique identifier assigned to this imaging selection.
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
     * The current state of the ImagingSelection resource. This is not the status of any ImagingStudy, ServiceRequest, or Task resources associated with the ImagingSelection.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingSelectionStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the ImagingSelection resource. This is not the status of any ImagingStudy, ServiceRequest, or Task resources associated with the ImagingSelection.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ImagingSelectionStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient, or group of patients, location, device, organization, procedure or practitioner this imaging selection is about and into whose or what record the imaging selection is placed.
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
     * The patient, or group of patients, location, device, organization, procedure or practitioner this imaging selection is about and into whose or what record the imaging selection is placed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as issued
     *
     * The date and time this imaging selection was created.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Sets a new issued
     *
     * The date and time this imaging selection was created.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $issued
     * @return self
     */
    public function setIssued(?\TKusy\Hl7Fhir\R5\InstantType $issued = null)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Selector of the instances – human or machine.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\ImagingSelectionPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Selector of the instances – human or machine.
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
     * Selector of the instances – human or machine.
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
     * Selector of the instances – human or machine.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingSelectionPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Selector of the instances – human or machine.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A list of the diagnostic requests that resulted in this imaging selection being performed.
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
     * A list of the diagnostic requests that resulted in this imaging selection being performed.
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
     * A list of the diagnostic requests that resulted in this imaging selection being performed.
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
     * A list of the diagnostic requests that resulted in this imaging selection being performed.
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
     * A list of the diagnostic requests that resulted in this imaging selection being performed.
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
     * Adds as category
     *
     * Classifies the imaging selection.
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
     * Classifies the imaging selection.
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
     * Classifies the imaging selection.
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
     * Classifies the imaging selection.
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
     * Classifies the imaging selection.
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
     * Reason for referencing the selected content.
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
     * Reason for referencing the selected content.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as studyUid
     *
     * The Study Instance UID for the DICOM Study from which the images were selected.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getStudyUid()
    {
        return $this->studyUid;
    }

    /**
     * Sets a new studyUid
     *
     * The Study Instance UID for the DICOM Study from which the images were selected.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $studyUid
     * @return self
     */
    public function setStudyUid(?\TKusy\Hl7Fhir\R5\IdType $studyUid = null)
    {
        $this->studyUid = $studyUid;
        return $this;
    }

    /**
     * Adds as derivedFrom
     *
     * The imaging study from which the imaging selection is made.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $derivedFrom
     */
    public function addToDerivedFrom(\TKusy\Hl7Fhir\R5\ReferenceType $derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * isset derivedFrom
     *
     * The imaging study from which the imaging selection is made.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFrom($index)
    {
        return isset($this->derivedFrom[$index]);
    }

    /**
     * unset derivedFrom
     *
     * The imaging study from which the imaging selection is made.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFrom($index)
    {
        unset($this->derivedFrom[$index]);
    }

    /**
     * Gets as derivedFrom
     *
     * The imaging study from which the imaging selection is made.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * The imaging study from which the imaging selection is made.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $derivedFrom
     * @return self
     */
    public function setDerivedFrom(array $derivedFrom = null)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * The network service providing retrieval access to the selected images, frames, etc. See implementation notes for information about using DICOM endpoints.
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
     * The network service providing retrieval access to the selected images, frames, etc. See implementation notes for information about using DICOM endpoints.
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
     * The network service providing retrieval access to the selected images, frames, etc. See implementation notes for information about using DICOM endpoints.
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
     * The network service providing retrieval access to the selected images, frames, etc. See implementation notes for information about using DICOM endpoints.
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
     * The network service providing retrieval access to the selected images, frames, etc. See implementation notes for information about using DICOM endpoints.
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
     * Gets as seriesUid
     *
     * The Series Instance UID for the DICOM Series from which the images were selected.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getSeriesUid()
    {
        return $this->seriesUid;
    }

    /**
     * Sets a new seriesUid
     *
     * The Series Instance UID for the DICOM Series from which the images were selected.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $seriesUid
     * @return self
     */
    public function setSeriesUid(?\TKusy\Hl7Fhir\R5\IdType $seriesUid = null)
    {
        $this->seriesUid = $seriesUid;
        return $this;
    }

    /**
     * Gets as seriesNumber
     *
     * The Series Number for the DICOM Series from which the images were selected.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getSeriesNumber()
    {
        return $this->seriesNumber;
    }

    /**
     * Sets a new seriesNumber
     *
     * The Series Number for the DICOM Series from which the images were selected.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $seriesNumber
     * @return self
     */
    public function setSeriesNumber(?\TKusy\Hl7Fhir\R5\UnsignedIntType $seriesNumber = null)
    {
        $this->seriesNumber = $seriesNumber;
        return $this;
    }

    /**
     * Gets as frameOfReferenceUid
     *
     * The Frame of Reference UID identifying the coordinate system that conveys spatial and/or temporal information for the selected images or frames.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getFrameOfReferenceUid()
    {
        return $this->frameOfReferenceUid;
    }

    /**
     * Sets a new frameOfReferenceUid
     *
     * The Frame of Reference UID identifying the coordinate system that conveys spatial and/or temporal information for the selected images or frames.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $frameOfReferenceUid
     * @return self
     */
    public function setFrameOfReferenceUid(?\TKusy\Hl7Fhir\R5\IdType $frameOfReferenceUid = null)
    {
        $this->frameOfReferenceUid = $frameOfReferenceUid;
        return $this;
    }

    /**
     * Gets as bodySite
     *
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite
     * @return self
     */
    public function setBodySite(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Adds as focus
     *
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
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
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
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
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
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
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
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
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
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
     * Adds as instance
     *
     * Each imaging selection includes one or more selected DICOM SOP instances.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionInstanceType $instance
     */
    public function addToInstance(\TKusy\Hl7Fhir\R5\ImagingSelectionInstanceType $instance)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * isset instance
     *
     * Each imaging selection includes one or more selected DICOM SOP instances.
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
     * Each imaging selection includes one or more selected DICOM SOP instances.
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
     * Each imaging selection includes one or more selected DICOM SOP instances.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingSelectionInstanceType[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * Each imaging selection includes one or more selected DICOM SOP instances.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionInstanceType[] $instance
     * @return self
     */
    public function setInstance(array $instance = null)
    {
        $this->instance = $instance;
        return $this;
    }


}

