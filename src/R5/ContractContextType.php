<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContractContextType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Context
 */
class ContractContextType extends BackboneElementType
{

    /**
     * Asset context reference may include the creator, custodian, or owning Person or Organization (e.g., bank, repository), location held, e.g., building, jurisdiction.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Coded representation of the context generally or of the Referenced entity, such as the asset holder type or location.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * Context description.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $text
     */
    private $text = null;

    /**
     * Gets as reference
     *
     * Asset context reference may include the creator, custodian, or owning Person or Organization (e.g., bank, repository), location held, e.g., building, jurisdiction.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Asset context reference may include the creator, custodian, or owning Person or Organization (e.g., bank, repository), location held, e.g., building, jurisdiction.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(?\TKusy\Hl7Fhir\R5\ReferenceType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as code
     *
     * Coded representation of the context generally or of the Referenced entity, such as the asset holder type or location.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * Coded representation of the context generally or of the Referenced entity, such as the asset holder type or location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * Coded representation of the context generally or of the Referenced entity, such as the asset holder type or location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * Coded representation of the context generally or of the Referenced entity, such as the asset holder type or location.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Coded representation of the context generally or of the Referenced entity, such as the asset holder type or location.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as text
     *
     * Context description.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Context description.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $text
     * @return self
     */
    public function setText(?\TKusy\Hl7Fhir\R5\StringType $text = null)
    {
        $this->text = $text;
        return $this;
    }


}

