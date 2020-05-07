<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\ReferenceType $collector
     */
    private $collector = null;

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $collectedDateTime
     */
    private $collectedDateTime = null;

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $collectedPeriod
     */
    private $collectedPeriod = null;

    /**
     * The span of time over which the collection of a specimen occurred.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $duration
     */
    private $duration = null;

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site. This element is not used for environmental specimens.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     */
    private $bodySite = null;

    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection. (choose any one of fastingStatus*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $fastingStatusCodeableConcept
     */
    private $fastingStatusCodeableConcept = null;

    /**
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection. (choose any one of fastingStatus*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $fastingStatusDuration
     */
    private $fastingStatusDuration = null;

    /**
     * Gets as collector
     *
     * Person who collected the specimen.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $collector
     * @return self
     */
    public function setCollector(\TKusy\Hl7FhirR4\ReferenceType $collector)
    {
        $this->collector = $collector;
        return $this;
    }

    /**
     * Gets as collectedDateTime
     *
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getCollectedDateTime()
    {
        return $this->collectedDateTime;
    }

    /**
     * Sets a new collectedDateTime
     *
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $collectedDateTime
     * @return self
     */
    public function setCollectedDateTime(\TKusy\Hl7FhirR4\DateTimeType $collectedDateTime)
    {
        $this->collectedDateTime = $collectedDateTime;
        return $this;
    }

    /**
     * Gets as collectedPeriod
     *
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getCollectedPeriod()
    {
        return $this->collectedPeriod;
    }

    /**
     * Sets a new collectedPeriod
     *
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $collectedPeriod
     * @return self
     */
    public function setCollectedPeriod(\TKusy\Hl7FhirR4\PeriodType $collectedPeriod)
    {
        $this->collectedPeriod = $collectedPeriod;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The span of time over which the collection of a specimen occurred.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
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
     * @param \TKusy\Hl7FhirR4\DurationType $duration
     * @return self
     */
    public function setDuration(\TKusy\Hl7FhirR4\DurationType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
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
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as method
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as bodySite
     *
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site. This element is not used for environmental specimens.
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
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site. This element is not used for environmental specimens.
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
     * Gets as fastingStatusCodeableConcept
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection. (choose any one of fastingStatus*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getFastingStatusCodeableConcept()
    {
        return $this->fastingStatusCodeableConcept;
    }

    /**
     * Sets a new fastingStatusCodeableConcept
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection. (choose any one of fastingStatus*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $fastingStatusCodeableConcept
     * @return self
     */
    public function setFastingStatusCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $fastingStatusCodeableConcept)
    {
        $this->fastingStatusCodeableConcept = $fastingStatusCodeableConcept;
        return $this;
    }

    /**
     * Gets as fastingStatusDuration
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection. (choose any one of fastingStatus*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getFastingStatusDuration()
    {
        return $this->fastingStatusDuration;
    }

    /**
     * Sets a new fastingStatusDuration
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of time prior to sample collection. (choose any one of fastingStatus*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $fastingStatusDuration
     * @return self
     */
    public function setFastingStatusDuration(\TKusy\Hl7FhirR4\DurationType $fastingStatusDuration)
    {
        $this->fastingStatusDuration = $fastingStatusDuration;
        return $this;
    }


}

