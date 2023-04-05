<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing FormularyItemType
 *
 * This resource describes a product or service that is available through a program and includes the conditions and constraints of availability. All of the information in this resource is specific to the inclusion of the item in the formulary and is not inherent to the item itself.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: FormularyItem
 */
class FormularyItemType extends DomainResourceType
{

    /**
     * Business identifier for this formulary item.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A code (or set of codes) that specify the product or service that is identified by this formulary item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The validity about the information of the formulary item and not of the underlying product or service itself.
     *
     * @var \TKusy\Hl7Fhir\R5\FormularyItemStatusCodesType $status
     */
    private $status = null;

    /**
     * Adds as identifier
     *
     * Business identifier for this formulary item.
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
     * Business identifier for this formulary item.
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
     * Business identifier for this formulary item.
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
     * Business identifier for this formulary item.
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
     * Business identifier for this formulary item.
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
     * Gets as code
     *
     * A code (or set of codes) that specify the product or service that is identified by this formulary item.
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
     * A code (or set of codes) that specify the product or service that is identified by this formulary item.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as status
     *
     * The validity about the information of the formulary item and not of the underlying product or service itself.
     *
     * @return \TKusy\Hl7Fhir\R5\FormularyItemStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The validity about the information of the formulary item and not of the underlying product or service itself.
     *
     * @param \TKusy\Hl7Fhir\R5\FormularyItemStatusCodesType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\FormularyItemStatusCodesType $status = null)
    {
        $this->status = $status;
        return $this;
    }


}

