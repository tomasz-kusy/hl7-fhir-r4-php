<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContractSignerType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Signer
 */
class ContractSignerType extends BackboneElementType
{

    /**
     * Role of this Contract signer, e.g. notary, grantee.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $type
     */
    private $type = null;

    /**
     * Party which is a signator to this Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $party
     */
    private $party = null;

    /**
     * Legally binding Contract DSIG signature contents in Base64.
     *
     * @var \TKusy\Hl7Fhir\R5\SignatureType[] $signature
     */
    private $signature = null;

    /**
     * Gets as type
     *
     * Role of this Contract signer, e.g. notary, grantee.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Role of this Contract signer, e.g. notary, grantee.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodingType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as party
     *
     * Party which is a signator to this Contract.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * Party which is a signator to this Contract.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $party
     * @return self
     */
    public function setParty(\TKusy\Hl7Fhir\R5\ReferenceType $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Adds as signature
     *
     * Legally binding Contract DSIG signature contents in Base64.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SignatureType $signature
     */
    public function addToSignature(\TKusy\Hl7Fhir\R5\SignatureType $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * Legally binding Contract DSIG signature contents in Base64.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * Legally binding Contract DSIG signature contents in Base64.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * Legally binding Contract DSIG signature contents in Base64.
     *
     * @return \TKusy\Hl7Fhir\R5\SignatureType[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * Legally binding Contract DSIG signature contents in Base64.
     *
     * @param \TKusy\Hl7Fhir\R5\SignatureType[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

