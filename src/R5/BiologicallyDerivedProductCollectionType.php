<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BiologicallyDerivedProductCollectionType
 *
 * This resource reflects an instance of a biologically derived product. A material substance originating from a biological entity intended to be transplanted or infused
 * into another (possibly the same) biological entity.
 * XSD Type: BiologicallyDerivedProduct.Collection
 */
class BiologicallyDerivedProductCollectionType extends BackboneElementType
{

    /**
     * Healthcare professional who is performing the collection.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $collector
     */
    private $collector = null;

    /**
     * The patient or entity, such as a hospital or vendor in the case of a processed/manipulated/manufactured product, providing the product.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    private $source = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $collectedDateTime
     */
    private $collectedDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $collectedPeriod
     */
    private $collectedPeriod = null;

    /**
     * Gets as collector
     *
     * Healthcare professional who is performing the collection.
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
     * Healthcare professional who is performing the collection.
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
     * Gets as source
     *
     * The patient or entity, such as a hospital or vendor in the case of a processed/manipulated/manufactured product, providing the product.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The patient or entity, such as a hospital or vendor in the case of a processed/manipulated/manufactured product, providing the product.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\ReferenceType $source = null)
    {
        $this->source = $source;
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


}

