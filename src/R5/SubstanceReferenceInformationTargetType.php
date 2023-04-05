<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceReferenceInformationTargetType
 *
 * Todo.
 * XSD Type: SubstanceReferenceInformation.Target
 */
class SubstanceReferenceInformationTargetType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $target
     */
    private $target = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $interaction
     */
    private $interaction = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $organism
     */
    private $organism = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $organismType
     */
    private $organismType = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $amountQuantity
     */
    private $amountQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $amountRange
     */
    private $amountRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $amountString
     */
    private $amountString = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $amountType
     */
    private $amountType = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as target
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $target
     * @return self
     */
    public function setTarget(?\TKusy\Hl7Fhir\R5\IdentifierType $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as type
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as interaction
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Sets a new interaction
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $interaction
     * @return self
     */
    public function setInteraction(?\TKusy\Hl7Fhir\R5\CodeableConceptType $interaction = null)
    {
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * Gets as organism
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOrganism()
    {
        return $this->organism;
    }

    /**
     * Sets a new organism
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $organism
     * @return self
     */
    public function setOrganism(?\TKusy\Hl7Fhir\R5\CodeableConceptType $organism = null)
    {
        $this->organism = $organism;
        return $this;
    }

    /**
     * Gets as organismType
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOrganismType()
    {
        return $this->organismType;
    }

    /**
     * Sets a new organismType
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $organismType
     * @return self
     */
    public function setOrganismType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $organismType = null)
    {
        $this->organismType = $organismType;
        return $this;
    }

    /**
     * Gets as amountQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * Sets a new amountQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $amountQuantity
     * @return self
     */
    public function setAmountQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $amountQuantity = null)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Gets as amountRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getAmountRange()
    {
        return $this->amountRange;
    }

    /**
     * Sets a new amountRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $amountRange
     * @return self
     */
    public function setAmountRange(?\TKusy\Hl7Fhir\R5\RangeType $amountRange = null)
    {
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * Gets as amountString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * Sets a new amountString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $amountString
     * @return self
     */
    public function setAmountString(?\TKusy\Hl7Fhir\R5\StringType $amountString = null)
    {
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * Gets as amountType
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAmountType()
    {
        return $this->amountType;
    }

    /**
     * Sets a new amountType
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $amountType
     * @return self
     */
    public function setAmountType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $amountType = null)
    {
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * Adds as source
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7Fhir\R5\ReferenceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source = null)
    {
        $this->source = $source;
        return $this;
    }


}

