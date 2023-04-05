<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PermissionJustificationType
 *
 * Permission resource holds access rules for a given data and context.
 * XSD Type: Permission.Justification
 */
class PermissionJustificationType extends BackboneElementType
{

    /**
     * This would be a codeableconcept, or a coding, which can be constrained to , for example, the 6 grounds for processing in GDPR.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $basis
     */
    private $basis = null;

    /**
     * Justifing rational.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $evidence
     */
    private $evidence = null;

    /**
     * Adds as basis
     *
     * This would be a codeableconcept, or a coding, which can be constrained to , for example, the 6 grounds for processing in GDPR.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $basis
     */
    public function addToBasis(\TKusy\Hl7Fhir\R5\CodeableConceptType $basis)
    {
        $this->basis[] = $basis;
        return $this;
    }

    /**
     * isset basis
     *
     * This would be a codeableconcept, or a coding, which can be constrained to , for example, the 6 grounds for processing in GDPR.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasis($index)
    {
        return isset($this->basis[$index]);
    }

    /**
     * unset basis
     *
     * This would be a codeableconcept, or a coding, which can be constrained to , for example, the 6 grounds for processing in GDPR.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasis($index)
    {
        unset($this->basis[$index]);
    }

    /**
     * Gets as basis
     *
     * This would be a codeableconcept, or a coding, which can be constrained to , for example, the 6 grounds for processing in GDPR.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Sets a new basis
     *
     * This would be a codeableconcept, or a coding, which can be constrained to , for example, the 6 grounds for processing in GDPR.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $basis
     * @return self
     */
    public function setBasis(array $basis = null)
    {
        $this->basis = $basis;
        return $this;
    }

    /**
     * Adds as evidence
     *
     * Justifing rational.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $evidence
     */
    public function addToEvidence(\TKusy\Hl7Fhir\R5\ReferenceType $evidence)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * isset evidence
     *
     * Justifing rational.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidence($index)
    {
        return isset($this->evidence[$index]);
    }

    /**
     * unset evidence
     *
     * Justifing rational.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidence($index)
    {
        unset($this->evidence[$index]);
    }

    /**
     * Gets as evidence
     *
     * Justifing rational.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Sets a new evidence
     *
     * Justifing rational.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $evidence
     * @return self
     */
    public function setEvidence(array $evidence = null)
    {
        $this->evidence = $evidence;
        return $this;
    }


}

