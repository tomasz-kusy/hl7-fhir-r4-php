<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSpecificationPropertyType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Property
 */
class SubstanceSpecificationPropertyType extends BackboneElementType
{

    /**
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Property type e.g. viscosity, pH, isoelectric point.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Parameters that were used in the measurement of a property (e.g. for viscosity: measured at 20C with a pH of 7.1).
     *
     * @var \TKusy\Hl7FhirR4\StringType $parameters
     */
    private $parameters = null;

    /**
     * A substance upon which a defining property depends (e.g. for solubility: in water, in alcohol). (choose any one of definingSubstance*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $definingSubstanceReference
     */
    private $definingSubstanceReference = null;

    /**
     * A substance upon which a defining property depends (e.g. for solubility: in water, in alcohol). (choose any one of definingSubstance*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $definingSubstanceCodeableConcept
     */
    private $definingSubstanceCodeableConcept = null;

    /**
     * Quantitative value for this property. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $amountQuantity
     */
    private $amountQuantity = null;

    /**
     * Quantitative value for this property. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $amountString
     */
    private $amountString = null;

    /**
     * Gets as category
     *
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * Property type e.g. viscosity, pH, isoelectric point.
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
     * Property type e.g. viscosity, pH, isoelectric point.
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
     * Gets as parameters
     *
     * Parameters that were used in the measurement of a property (e.g. for viscosity: measured at 20C with a pH of 7.1).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * Parameters that were used in the measurement of a property (e.g. for viscosity: measured at 20C with a pH of 7.1).
     *
     * @param \TKusy\Hl7FhirR4\StringType $parameters
     * @return self
     */
    public function setParameters(\TKusy\Hl7FhirR4\StringType $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * Gets as definingSubstanceReference
     *
     * A substance upon which a defining property depends (e.g. for solubility: in water, in alcohol). (choose any one of definingSubstance*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDefiningSubstanceReference()
    {
        return $this->definingSubstanceReference;
    }

    /**
     * Sets a new definingSubstanceReference
     *
     * A substance upon which a defining property depends (e.g. for solubility: in water, in alcohol). (choose any one of definingSubstance*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $definingSubstanceReference
     * @return self
     */
    public function setDefiningSubstanceReference(\TKusy\Hl7FhirR4\ReferenceType $definingSubstanceReference)
    {
        $this->definingSubstanceReference = $definingSubstanceReference;
        return $this;
    }

    /**
     * Gets as definingSubstanceCodeableConcept
     *
     * A substance upon which a defining property depends (e.g. for solubility: in water, in alcohol). (choose any one of definingSubstance*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDefiningSubstanceCodeableConcept()
    {
        return $this->definingSubstanceCodeableConcept;
    }

    /**
     * Sets a new definingSubstanceCodeableConcept
     *
     * A substance upon which a defining property depends (e.g. for solubility: in water, in alcohol). (choose any one of definingSubstance*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $definingSubstanceCodeableConcept
     * @return self
     */
    public function setDefiningSubstanceCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $definingSubstanceCodeableConcept)
    {
        $this->definingSubstanceCodeableConcept = $definingSubstanceCodeableConcept;
        return $this;
    }

    /**
     * Gets as amountQuantity
     *
     * Quantitative value for this property. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * Sets a new amountQuantity
     *
     * Quantitative value for this property. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $amountQuantity
     * @return self
     */
    public function setAmountQuantity(\TKusy\Hl7FhirR4\QuantityType $amountQuantity)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Gets as amountString
     *
     * Quantitative value for this property. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * Sets a new amountString
     *
     * Quantitative value for this property. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $amountString
     * @return self
     */
    public function setAmountString(\TKusy\Hl7FhirR4\StringType $amountString)
    {
        $this->amountString = $amountString;
        return $this;
    }


}

