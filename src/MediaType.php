<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MediaType
 *
 * A photo, video, or audio recording acquired or used in healthcare. The actual content may be inline or provided by direct reference.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Media
 */
class MediaType extends DomainResourceType
{

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular event is a component or step.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * The current state of the {{title}}.
     *
     * @var \TKusy\Hl7FhirR4\EventStatusType $status
     */
    private $status = null;

    /**
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $modality
     */
    private $modality = null;

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $view
     */
    private $view = null;

    /**
     * Who/What this Media is a record of.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter that establishes the context for this media.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The date and time(s) at which the media was collected. (choose any one of created*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $createdDateTime
     */
    private $createdDateTime = null;

    /**
     * The date and time(s) at which the media was collected. (choose any one of created*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $createdPeriod
     */
    private $createdPeriod = null;

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $issued
     */
    private $issued = null;

    /**
     * The person who administered the collection of the image.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $operator
     */
    private $operator = null;

    /**
     * Describes why the event occurred in coded or textual form.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     */
    private $bodySite = null;

    /**
     * The name of the device / manufacturer of the device that was used to make the recording.
     *
     * @var string $deviceName
     */
    private $deviceName = null;

    /**
     * The device used to collect the media.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $device
     */
    private $device = null;

    /**
     * Height of the image in pixels (photo/video).
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $height
     */
    private $height = null;

    /**
     * Width of the image in pixels (photo/video).
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $width
     */
    private $width = null;

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $frames
     */
    private $frames = null;

    /**
     * The duration of the recording in seconds - for audio and video.
     *
     * @var float $duration
     */
    private $duration = null;

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $content
     */
    private $content = null;

    /**
     * Comments made about the media by the performer, subject or other participants.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
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
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
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
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
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
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
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
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
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
     * A procedure that is fulfilled in whole or in part by the creation of this media.
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
     * A procedure that is fulfilled in whole or in part by the creation of this media.
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
     * A procedure that is fulfilled in whole or in part by the creation of this media.
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
     * A procedure that is fulfilled in whole or in part by the creation of this media.
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
     * A procedure that is fulfilled in whole or in part by the creation of this media.
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
     * Adds as partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $partOf
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
     * The current state of the {{title}}.
     *
     * @return \TKusy\Hl7FhirR4\EventStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the {{title}}.
     *
     * @param \TKusy\Hl7FhirR4\EventStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\EventStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as modality
     *
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Sets a new modality
     *
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $modality
     * @return self
     */
    public function setModality(\TKusy\Hl7FhirR4\CodeableConceptType $modality)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * Gets as view
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Sets a new view
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $view
     * @return self
     */
    public function setView(\TKusy\Hl7FhirR4\CodeableConceptType $view)
    {
        $this->view = $view;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Who/What this Media is a record of.
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
     * Who/What this Media is a record of.
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
     * The encounter that establishes the context for this media.
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
     * The encounter that establishes the context for this media.
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
     * Gets as createdDateTime
     *
     * The date and time(s) at which the media was collected. (choose any one of created*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * Sets a new createdDateTime
     *
     * The date and time(s) at which the media was collected. (choose any one of created*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $createdDateTime
     * @return self
     */
    public function setCreatedDateTime(\TKusy\Hl7FhirR4\DateTimeType $createdDateTime)
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * Gets as createdPeriod
     *
     * The date and time(s) at which the media was collected. (choose any one of created*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getCreatedPeriod()
    {
        return $this->createdPeriod;
    }

    /**
     * Sets a new createdPeriod
     *
     * The date and time(s) at which the media was collected. (choose any one of created*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $createdPeriod
     * @return self
     */
    public function setCreatedPeriod(\TKusy\Hl7FhirR4\PeriodType $createdPeriod)
    {
        $this->createdPeriod = $createdPeriod;
        return $this;
    }

    /**
     * Gets as issued
     *
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
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
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
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
     * Gets as operator
     *
     * The person who administered the collection of the image.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * The person who administered the collection of the image.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $operator
     * @return self
     */
    public function setOperator(\TKusy\Hl7FhirR4\ReferenceType $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Describes why the event occurred in coded or textual form.
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
     * Describes why the event occurred in coded or textual form.
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
     * Describes why the event occurred in coded or textual form.
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
     * Describes why the event occurred in coded or textual form.
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
     * Describes why the event occurred in coded or textual form.
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
     * Gets as bodySite
     *
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     * @return self
     */
    public function setBodySite(\TKusy\Hl7FhirR4\CodeableConceptType $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as deviceName
     *
     * The name of the device / manufacturer of the device that was used to make the recording.
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Sets a new deviceName
     *
     * The name of the device / manufacturer of the device that was used to make the recording.
     *
     * @param string $deviceName
     * @return self
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Gets as device
     *
     * The device used to collect the media.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The device used to collect the media.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7FhirR4\ReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as height
     *
     * Height of the image in pixels (photo/video).
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * Height of the image in pixels (photo/video).
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $height
     * @return self
     */
    public function setHeight(\TKusy\Hl7FhirR4\PositiveIntType $height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as width
     *
     * Width of the image in pixels (photo/video).
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * Width of the image in pixels (photo/video).
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $width
     * @return self
     */
    public function setWidth(\TKusy\Hl7FhirR4\PositiveIntType $width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as frames
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * Sets a new frames
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $frames
     * @return self
     */
    public function setFrames(\TKusy\Hl7FhirR4\PositiveIntType $frames)
    {
        $this->frames = $frames;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @param float $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as content
     *
     * The actual content of the media - inline or by direct reference to the media source file.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The actual content of the media - inline or by direct reference to the media source file.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $content
     * @return self
     */
    public function setContent(\TKusy\Hl7FhirR4\AttachmentType $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the media by the performer, subject or other participants.
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
     * Comments made about the media by the performer, subject or other participants.
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
     * Comments made about the media by the performer, subject or other participants.
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
     * Comments made about the media by the performer, subject or other participants.
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
     * Comments made about the media by the performer, subject or other participants.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

