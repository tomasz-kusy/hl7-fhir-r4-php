<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BiologicallyDerivedProductDispenseType
 *
 * This resource reflects an instance of a biologically derived product dispense. The supply or dispense of a biologically derived product from the supply organization or department (e.g. hospital transfusion laboratory) to the clinical team responsible for clinical application.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: BiologicallyDerivedProductDispense
 */
class BiologicallyDerivedProductDispenseType extends DomainResourceType
{

    /**
     * Unique instance identifiers assigned to a biologically derived product dispense. Note: This is a business identifier, not a resource identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The order or request that the dispense is fulfilling. This is a reference to a ServiceRequest resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular event is a component.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the dispense event.
     *
     * @var \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispenseCodesType $status
     */
    private $status = null;

    /**
     * Indicates the relationship between the donor of the biologically derived product and the intended recipient.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $originRelationshipType
     */
    private $originRelationshipType = null;

    /**
     * A link to a resource identifying the biologically derived product that is being dispensed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $product
     */
    private $product = null;

    /**
     * A link to a resource representing the patient that the product is dispensed for.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * Indicates the type of matching associated with the dispense.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $matchStatus
     */
    private $matchStatus = null;

    /**
     * Indicates who or what performed an action.
     *
     * @var \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispensePerformerType[] $performer
     */
    private $performer = null;

    /**
     * The physical location where the dispense was performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * The amount of product in the dispense. Quantity will depend on the product being dispensed. Examples are: volume; cell count; concentration.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * When the product was selected/ matched.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $preparedDate
     */
    private $preparedDate = null;

    /**
     * When the product was dispatched for clinical use.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver
     */
    private $whenHandedOver = null;

    /**
     * Link to a resource identifying the physical location that the product was dispatched to.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Additional notes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Specific instructions for use.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $usageInstruction
     */
    private $usageInstruction = null;

    /**
     * Adds as identifier
     *
     * Unique instance identifiers assigned to a biologically derived product dispense. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product dispense. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product dispense. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product dispense. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product dispense. Note: This is a business identifier, not a resource identifier.
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
     * Adds as basedOn
     *
     * The order or request that the dispense is fulfilling. This is a reference to a ServiceRequest resource.
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
     * The order or request that the dispense is fulfilling. This is a reference to a ServiceRequest resource.
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
     * The order or request that the dispense is fulfilling. This is a reference to a ServiceRequest resource.
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
     * The order or request that the dispense is fulfilling. This is a reference to a ServiceRequest resource.
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
     * The order or request that the dispense is fulfilling. This is a reference to a ServiceRequest resource.
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
     * Adds as partOf
     *
     * A larger event of which this particular event is a component.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R5\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger event of which this particular event is a component.
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
     * A larger event of which this particular event is a component.
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
     * A larger event of which this particular event is a component.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger event of which this particular event is a component.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the state of the dispense event.
     *
     * @return \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispenseCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the state of the dispense event.
     *
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispenseCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispenseCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as originRelationshipType
     *
     * Indicates the relationship between the donor of the biologically derived product and the intended recipient.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOriginRelationshipType()
    {
        return $this->originRelationshipType;
    }

    /**
     * Sets a new originRelationshipType
     *
     * Indicates the relationship between the donor of the biologically derived product and the intended recipient.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $originRelationshipType
     * @return self
     */
    public function setOriginRelationshipType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $originRelationshipType = null)
    {
        $this->originRelationshipType = $originRelationshipType;
        return $this;
    }

    /**
     * Gets as product
     *
     * A link to a resource identifying the biologically derived product that is being dispensed.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * A link to a resource identifying the biologically derived product that is being dispensed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $product
     * @return self
     */
    public function setProduct(\TKusy\Hl7Fhir\R5\ReferenceType $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as patient
     *
     * A link to a resource representing the patient that the product is dispensed for.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * A link to a resource representing the patient that the product is dispensed for.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R5\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as matchStatus
     *
     * Indicates the type of matching associated with the dispense.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMatchStatus()
    {
        return $this->matchStatus;
    }

    /**
     * Sets a new matchStatus
     *
     * Indicates the type of matching associated with the dispense.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $matchStatus
     * @return self
     */
    public function setMatchStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $matchStatus = null)
    {
        $this->matchStatus = $matchStatus;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Indicates who or what performed an action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispensePerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispensePerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who or what performed an action.
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
     * Indicates who or what performed an action.
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
     * Indicates who or what performed an action.
     *
     * @return \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispensePerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what performed an action.
     *
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispensePerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * The physical location where the dispense was performed.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The physical location where the dispense was performed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount of product in the dispense. Quantity will depend on the product being dispensed. Examples are: volume; cell count; concentration.
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
     * The amount of product in the dispense. Quantity will depend on the product being dispensed. Examples are: volume; cell count; concentration.
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
     * Gets as preparedDate
     *
     * When the product was selected/ matched.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPreparedDate()
    {
        return $this->preparedDate;
    }

    /**
     * Sets a new preparedDate
     *
     * When the product was selected/ matched.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $preparedDate
     * @return self
     */
    public function setPreparedDate(?\TKusy\Hl7Fhir\R5\DateTimeType $preparedDate = null)
    {
        $this->preparedDate = $preparedDate;
        return $this;
    }

    /**
     * Gets as whenHandedOver
     *
     * When the product was dispatched for clinical use.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * Sets a new whenHandedOver
     *
     * When the product was dispatched for clinical use.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver
     * @return self
     */
    public function setWhenHandedOver(?\TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver = null)
    {
        $this->whenHandedOver = $whenHandedOver;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Link to a resource identifying the physical location that the product was dispatched to.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Link to a resource identifying the physical location that the product was dispatched to.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $destination
     * @return self
     */
    public function setDestination(?\TKusy\Hl7Fhir\R5\ReferenceType $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional notes.
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
     * Additional notes.
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
     * Additional notes.
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
     * Additional notes.
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
     * Additional notes.
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
     * Gets as usageInstruction
     *
     * Specific instructions for use.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getUsageInstruction()
    {
        return $this->usageInstruction;
    }

    /**
     * Sets a new usageInstruction
     *
     * Specific instructions for use.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $usageInstruction
     * @return self
     */
    public function setUsageInstruction(?\TKusy\Hl7Fhir\R5\StringType $usageInstruction = null)
    {
        $this->usageInstruction = $usageInstruction;
        return $this;
    }


}

