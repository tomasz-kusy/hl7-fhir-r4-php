<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryReportType
 *
 * A report of inventory or stock items.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: InventoryReport
 */
class InventoryReportType extends DomainResourceType
{

    /**
     * Business identifier for the InventoryReport.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of the inventory check or notification - whether this is draft (e.g. the report is still pending some updates) or active.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryReportStatusType $status
     */
    private $status = null;

    /**
     * Whether the report is about the current inventory count (snapshot) or a differential change in inventory (change).
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryCountTypeType $countType
     */
    private $countType = null;

    /**
     * What type of operation is being performed - addition or subtraction.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $operationType
     */
    private $operationType = null;

    /**
     * The reason for this count - regular count, ad-hoc count, new arrivals, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $operationTypeReason
     */
    private $operationTypeReason = null;

    /**
     * When the report has been submitted.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $reportedDateTime
     */
    private $reportedDateTime = null;

    /**
     * Who submits the report.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reporter
     */
    private $reporter = null;

    /**
     * The period the report refers to.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $reportingPeriod
     */
    private $reportingPeriod = null;

    /**
     * An inventory listing section (grouped by any of the attributes).
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryReportInventoryListingType[] $inventoryListing
     */
    private $inventoryListing = null;

    /**
     * A note associated with the InventoryReport.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifier for the InventoryReport.
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
     * Business identifier for the InventoryReport.
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
     * Business identifier for the InventoryReport.
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
     * Business identifier for the InventoryReport.
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
     * Business identifier for the InventoryReport.
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
     * The status of the inventory check or notification - whether this is draft (e.g. the report is still pending some updates) or active.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryReportStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the inventory check or notification - whether this is draft (e.g. the report is still pending some updates) or active.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryReportStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\InventoryReportStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as countType
     *
     * Whether the report is about the current inventory count (snapshot) or a differential change in inventory (change).
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryCountTypeType
     */
    public function getCountType()
    {
        return $this->countType;
    }

    /**
     * Sets a new countType
     *
     * Whether the report is about the current inventory count (snapshot) or a differential change in inventory (change).
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryCountTypeType $countType
     * @return self
     */
    public function setCountType(\TKusy\Hl7Fhir\R5\InventoryCountTypeType $countType)
    {
        $this->countType = $countType;
        return $this;
    }

    /**
     * Gets as operationType
     *
     * What type of operation is being performed - addition or subtraction.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Sets a new operationType
     *
     * What type of operation is being performed - addition or subtraction.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $operationType
     * @return self
     */
    public function setOperationType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $operationType = null)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * Gets as operationTypeReason
     *
     * The reason for this count - regular count, ad-hoc count, new arrivals, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOperationTypeReason()
    {
        return $this->operationTypeReason;
    }

    /**
     * Sets a new operationTypeReason
     *
     * The reason for this count - regular count, ad-hoc count, new arrivals, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $operationTypeReason
     * @return self
     */
    public function setOperationTypeReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $operationTypeReason = null)
    {
        $this->operationTypeReason = $operationTypeReason;
        return $this;
    }

    /**
     * Gets as reportedDateTime
     *
     * When the report has been submitted.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getReportedDateTime()
    {
        return $this->reportedDateTime;
    }

    /**
     * Sets a new reportedDateTime
     *
     * When the report has been submitted.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $reportedDateTime
     * @return self
     */
    public function setReportedDateTime(\TKusy\Hl7Fhir\R5\DateTimeType $reportedDateTime)
    {
        $this->reportedDateTime = $reportedDateTime;
        return $this;
    }

    /**
     * Gets as reporter
     *
     * Who submits the report.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Sets a new reporter
     *
     * Who submits the report.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reporter
     * @return self
     */
    public function setReporter(?\TKusy\Hl7Fhir\R5\ReferenceType $reporter = null)
    {
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * Gets as reportingPeriod
     *
     * The period the report refers to.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getReportingPeriod()
    {
        return $this->reportingPeriod;
    }

    /**
     * Sets a new reportingPeriod
     *
     * The period the report refers to.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $reportingPeriod
     * @return self
     */
    public function setReportingPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $reportingPeriod = null)
    {
        $this->reportingPeriod = $reportingPeriod;
        return $this;
    }

    /**
     * Adds as inventoryListing
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InventoryReportInventoryListingType $inventoryListing
     */
    public function addToInventoryListing(\TKusy\Hl7Fhir\R5\InventoryReportInventoryListingType $inventoryListing)
    {
        $this->inventoryListing[] = $inventoryListing;
        return $this;
    }

    /**
     * isset inventoryListing
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryListing($index)
    {
        return isset($this->inventoryListing[$index]);
    }

    /**
     * unset inventoryListing
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryListing($index)
    {
        unset($this->inventoryListing[$index]);
    }

    /**
     * Gets as inventoryListing
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryReportInventoryListingType[]
     */
    public function getInventoryListing()
    {
        return $this->inventoryListing;
    }

    /**
     * Sets a new inventoryListing
     *
     * An inventory listing section (grouped by any of the attributes).
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryReportInventoryListingType[] $inventoryListing
     * @return self
     */
    public function setInventoryListing(array $inventoryListing = null)
    {
        $this->inventoryListing = $inventoryListing;
        return $this;
    }

    /**
     * Adds as note
     *
     * A note associated with the InventoryReport.
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
     * A note associated with the InventoryReport.
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
     * A note associated with the InventoryReport.
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
     * A note associated with the InventoryReport.
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
     * A note associated with the InventoryReport.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

