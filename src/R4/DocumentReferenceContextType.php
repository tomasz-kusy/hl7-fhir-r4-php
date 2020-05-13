<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing DocumentReferenceContextType
 *
 * A reference to a document of any kind for any purpose. Provides metadata about the document so that the document can be discovered and managed. The scope of a document is any seralized object with a mime-type, so includes formal patient centric documents (CDA), cliical notes, scanned paper, and non-patient specific documents like policy text.
 * XSD Type: DocumentReference.Context
 */
class DocumentReferenceContextType extends BackboneElementType
{

    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $encounter
     */
    private $encounter = null;

    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $event
     */
    private $event = null;

    /**
     * The time period over which the service that is described by the document was provided.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * The kind of facility where the patient was seen.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $facilityType
     */
    private $facilityType = null;

    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $practiceSetting
     */
    private $practiceSetting = null;

    /**
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $sourcePatientInfo
     */
    private $sourcePatientInfo = null;

    /**
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $related
     */
    private $related = null;

    /**
     * Adds as encounter
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     */
    public function addToEncounter(\TKusy\Hl7Fhir\R4\ReferenceType $encounter)
    {
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * isset encounter
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncounter($index)
    {
        return isset($this->encounter[$index]);
    }

    /**
     * unset encounter
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncounter($index)
    {
        unset($this->encounter[$index]);
    }

    /**
     * Gets as encounter
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $encounter
     * @return self
     */
    public function setEncounter(array $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Adds as event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $event
     */
    public function addToEvent(\TKusy\Hl7Fhir\R4\CodeableConceptType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $event
     * @return self
     */
    public function setEvent(array $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Gets as period
     *
     * The time period over which the service that is described by the document was provided.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The time period over which the service that is described by the document was provided.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as facilityType
     *
     * The kind of facility where the patient was seen.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getFacilityType()
    {
        return $this->facilityType;
    }

    /**
     * Sets a new facilityType
     *
     * The kind of facility where the patient was seen.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $facilityType
     * @return self
     */
    public function setFacilityType(\TKusy\Hl7Fhir\R4\CodeableConceptType $facilityType)
    {
        $this->facilityType = $facilityType;
        return $this;
    }

    /**
     * Gets as practiceSetting
     *
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getPracticeSetting()
    {
        return $this->practiceSetting;
    }

    /**
     * Sets a new practiceSetting
     *
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $practiceSetting
     * @return self
     */
    public function setPracticeSetting(\TKusy\Hl7Fhir\R4\CodeableConceptType $practiceSetting)
    {
        $this->practiceSetting = $practiceSetting;
        return $this;
    }

    /**
     * Gets as sourcePatientInfo
     *
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSourcePatientInfo()
    {
        return $this->sourcePatientInfo;
    }

    /**
     * Sets a new sourcePatientInfo
     *
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $sourcePatientInfo
     * @return self
     */
    public function setSourcePatientInfo(\TKusy\Hl7Fhir\R4\ReferenceType $sourcePatientInfo)
    {
        $this->sourcePatientInfo = $sourcePatientInfo;
        return $this;
    }

    /**
     * Adds as related
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $related
     */
    public function addToRelated(\TKusy\Hl7Fhir\R4\ReferenceType $related)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * isset related
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelated($index)
    {
        return isset($this->related[$index]);
    }

    /**
     * unset related
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelated($index)
    {
        unset($this->related[$index]);
    }

    /**
     * Gets as related
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Sets a new related
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $related
     * @return self
     */
    public function setRelated(array $related)
    {
        $this->related = $related;
        return $this;
    }


}

