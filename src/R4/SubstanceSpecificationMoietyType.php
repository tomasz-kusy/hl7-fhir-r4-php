<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSpecificationMoietyType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Moiety
 */
class SubstanceSpecificationMoietyType extends BackboneElementType
{

    /**
     * Role that the moiety is playing.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Identifier by which this moiety substance is known.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Textual name for this moiety substance.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * Stereochemistry type.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $stereochemistry
     */
    private $stereochemistry = null;

    /**
     * Optical activity type.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $opticalActivity
     */
    private $opticalActivity = null;

    /**
     * Molecular formula.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $molecularFormula
     */
    private $molecularFormula = null;

    /**
     * Quantitative value for this moiety. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $amountQuantity
     */
    private $amountQuantity = null;

    /**
     * Quantitative value for this moiety. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $amountString
     */
    private $amountString = null;

    /**
     * Gets as role
     *
     * Role that the moiety is playing.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7Fhir\R4\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as identifier
     *
     * Identifier by which this moiety substance is known.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * Textual name for this moiety substance.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as stereochemistry
     *
     * Stereochemistry type.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $stereochemistry
     * @return self
     */
    public function setStereochemistry(\TKusy\Hl7Fhir\R4\CodeableConceptType $stereochemistry)
    {
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * Gets as opticalActivity
     *
     * Optical activity type.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $opticalActivity
     * @return self
     */
    public function setOpticalActivity(\TKusy\Hl7Fhir\R4\CodeableConceptType $opticalActivity)
    {
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * Gets as molecularFormula
     *
     * Molecular formula.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getMolecularFormula()
    {
        return $this->molecularFormula;
    }

    /**
     * Sets a new molecularFormula
     *
     * Molecular formula.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $molecularFormula
     * @return self
     */
    public function setMolecularFormula(\TKusy\Hl7Fhir\R4\StringType $molecularFormula)
    {
        $this->molecularFormula = $molecularFormula;
        return $this;
    }

    /**
     * Gets as amountQuantity
     *
     * Quantitative value for this moiety. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * Sets a new amountQuantity
     *
     * Quantitative value for this moiety. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $amountQuantity
     * @return self
     */
    public function setAmountQuantity(\TKusy\Hl7Fhir\R4\QuantityType $amountQuantity)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Gets as amountString
     *
     * Quantitative value for this moiety. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * Sets a new amountString
     *
     * Quantitative value for this moiety. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $amountString
     * @return self
     */
    public function setAmountString(\TKusy\Hl7Fhir\R4\StringType $amountString)
    {
        $this->amountString = $amountString;
        return $this;
    }


}

