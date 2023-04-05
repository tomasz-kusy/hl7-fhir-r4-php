<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionMoietyType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.Moiety
 */
class SubstanceDefinitionMoietyType extends BackboneElementType
{

    /**
     * Role that the moiety is playing.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Identifier by which this moiety substance is known.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Textual name for this moiety substance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Stereochemistry type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $stereochemistry
     */
    private $stereochemistry = null;

    /**
     * Optical activity type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $opticalActivity
     */
    private $opticalActivity = null;

    /**
     * Molecular formula for this moiety of this substance, typically using the Hill system.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $molecularFormula
     */
    private $molecularFormula = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $amountQuantity
     */
    private $amountQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $amountString
     */
    private $amountString = null;

    /**
     * The measurement type of the quantitative value. In capturing the actual relative amounts of substances or molecular fragments it may be necessary to indicate whether the amount refers to, for example, a mole ratio or weight ratio.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $measurementType
     */
    private $measurementType = null;

    /**
     * Gets as role
     *
     * Role that the moiety is playing.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Role that the moiety is playing.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(?\TKusy\Hl7Fhir\R5\CodeableConceptType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as identifier
     *
     * Identifier by which this moiety substance is known.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier by which this moiety substance is known.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * Textual name for this moiety substance.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Textual name for this moiety substance.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as stereochemistry
     *
     * Stereochemistry type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStereochemistry()
    {
        return $this->stereochemistry;
    }

    /**
     * Sets a new stereochemistry
     *
     * Stereochemistry type.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $stereochemistry
     * @return self
     */
    public function setStereochemistry(?\TKusy\Hl7Fhir\R5\CodeableConceptType $stereochemistry = null)
    {
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * Gets as opticalActivity
     *
     * Optical activity type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOpticalActivity()
    {
        return $this->opticalActivity;
    }

    /**
     * Sets a new opticalActivity
     *
     * Optical activity type.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $opticalActivity
     * @return self
     */
    public function setOpticalActivity(?\TKusy\Hl7Fhir\R5\CodeableConceptType $opticalActivity = null)
    {
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * Gets as molecularFormula
     *
     * Molecular formula for this moiety of this substance, typically using the Hill system.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMolecularFormula()
    {
        return $this->molecularFormula;
    }

    /**
     * Sets a new molecularFormula
     *
     * Molecular formula for this moiety of this substance, typically using the Hill system.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $molecularFormula
     * @return self
     */
    public function setMolecularFormula(?\TKusy\Hl7Fhir\R5\StringType $molecularFormula = null)
    {
        $this->molecularFormula = $molecularFormula;
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
     * Gets as measurementType
     *
     * The measurement type of the quantitative value. In capturing the actual relative amounts of substances or molecular fragments it may be necessary to indicate whether the amount refers to, for example, a mole ratio or weight ratio.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMeasurementType()
    {
        return $this->measurementType;
    }

    /**
     * Sets a new measurementType
     *
     * The measurement type of the quantitative value. In capturing the actual relative amounts of substances or molecular fragments it may be necessary to indicate whether the amount refers to, for example, a mole ratio or weight ratio.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $measurementType
     * @return self
     */
    public function setMeasurementType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $measurementType = null)
    {
        $this->measurementType = $measurementType;
        return $this;
    }


}

