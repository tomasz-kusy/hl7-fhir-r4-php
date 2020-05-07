<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PractitionerQualificationType
 *
 * A person who is directly or indirectly involved in the provisioning of healthcare.
 * XSD Type: Practitioner.Qualification
 */
class PractitionerQualificationType extends BackboneElementType
{

    /**
     * An identifier that applies to this person's qualification in this role.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Coded representation of the qualification.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Period during which the qualification is valid.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Organization that regulates and issues the qualification.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $issuer
     */
    private $issuer = null;

    /**
     * Adds as identifier
     *
     * An identifier that applies to this person's qualification in this role.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * An identifier that applies to this person's qualification in this role.
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
     * An identifier that applies to this person's qualification in this role.
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
     * An identifier that applies to this person's qualification in this role.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * An identifier that applies to this person's qualification in this role.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as code
     *
     * Coded representation of the qualification.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Coded representation of the qualification.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as period
     *
     * Period during which the qualification is valid.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Period during which the qualification is valid.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * Organization that regulates and issues the qualification.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * Organization that regulates and issues the qualification.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $issuer
     * @return self
     */
    public function setIssuer(\TKusy\Hl7FhirR4\ReferenceType $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }


}

