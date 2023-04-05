<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenCollectionType
 *
 * A sample to be used for analysis.
 * XSD Type: Specimen.Collection
 */
class SpecimenCollectionType extends BackboneElementType
{

    /**
     * Person who collected the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $collector
     */
    private $collector = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $collectedDateTime
     */
    private $collectedDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $collectedPeriod
     */
    private $collectedPeriod = null;

    /**
     * The span of time over which the collection of a specimen occurred.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $duration
     */
    private $duration = null;

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     */
    private $method = null;

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     */
    private $device = null;

    /**
     * The procedure event during which the specimen was collected (e.g. the surgery leading to the collection of a pathology sample).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $procedure
     */
    private $procedure = null;

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site. This element is not used for environmental specimens.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite
     */
    private $bodySite = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $fastingStatusCodeableConcept
     */
    private $fastingStatusCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $fastingStatusDuration
     */
    private $fastingStatusDuration = null;

    /**
     * Gets as collector
     *
     * Person who collected the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * Sets a new collector
     *
     * Person who collected the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $collector
     * @return self
     */
    public function setCollector(?\TKusy\Hl7Fhir\R5\ReferenceType $collector = null)
    {
        $this->collector = $collector;
        return $this;
    }

    /**
     * Gets as collectedDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCollectedDateTime()
    {
        return $this->collectedDateTime;
    }

    /**
     * Sets a new collectedDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $collectedDateTime
     * @return self
     */
    public function setCollectedDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $collectedDateTime = null)
    {
        $this->collectedDateTime = $collectedDateTime;
        return $this;
    }

    /**
     * Gets as collectedPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getCollectedPeriod()
    {
        return $this->collectedPeriod;
    }

    /**
     * Sets a new collectedPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $collectedPeriod
     * @return self
     */
    public function setCollectedPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $collectedPeriod = null)
    {
        $this->collectedPeriod = $collectedPeriod;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The span of time over which the collection of a specimen occurred.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The span of time over which the collection of a specimen occurred.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $duration
     * @return self
     */
    public function setDuration(?\TKusy\Hl7Fhir\R5\DurationType $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as method
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     * @return self
     */
    public function setMethod(?\TKusy\Hl7Fhir\R5\CodeableConceptType $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as device
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     * @return self
     */
    public function setDevice(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as procedure
     *
     * The procedure event during which the specimen was collected (e.g. the surgery leading to the collection of a pathology sample).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * The procedure event during which the specimen was collected (e.g. the surgery leading to the collection of a pathology sample).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $procedure
     * @return self
     */
    public function setProcedure(?\TKusy\Hl7Fhir\R5\ReferenceType $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Gets as bodySite
     *
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site. This element is not used for environmental specimens.
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
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site. This element is not used for environmental specimens.
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
     * Gets as fastingStatusCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFastingStatusCodeableConcept()
    {
        return $this->fastingStatusCodeableConcept;
    }

    /**
     * Sets a new fastingStatusCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $fastingStatusCodeableConcept
     * @return self
     */
    public function setFastingStatusCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $fastingStatusCodeableConcept = null)
    {
        $this->fastingStatusCodeableConcept = $fastingStatusCodeableConcept;
        return $this;
    }

    /**
     * Gets as fastingStatusDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getFastingStatusDuration()
    {
        return $this->fastingStatusDuration;
    }

    /**
     * Sets a new fastingStatusDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $fastingStatusDuration
     * @return self
     */
    public function setFastingStatusDuration(?\TKusy\Hl7Fhir\R5\DurationType $fastingStatusDuration = null)
    {
        $this->fastingStatusDuration = $fastingStatusDuration;
        return $this;
    }


}

