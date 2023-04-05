<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstancePolymerDegreeOfPolymerisationType
 *
 * Properties of a substance specific to it being a polymer.
 * XSD Type: SubstancePolymer.DegreeOfPolymerisation
 */
class SubstancePolymerDegreeOfPolymerisationType extends BackboneElementType
{

    /**
     * The type of the degree of polymerisation shall be described, e.g. SRU/Polymer Ratio.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * An average amount of polymerisation.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $average
     */
    private $average = null;

    /**
     * A low expected limit of the amount.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $low
     */
    private $low = null;

    /**
     * A high expected limit of the amount.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $high
     */
    private $high = null;

    /**
     * Gets as type
     *
     * The type of the degree of polymerisation shall be described, e.g. SRU/Polymer Ratio.
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
     * The type of the degree of polymerisation shall be described, e.g. SRU/Polymer Ratio.
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
     * Gets as average
     *
     * An average amount of polymerisation.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * Sets a new average
     *
     * An average amount of polymerisation.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $average
     * @return self
     */
    public function setAverage(?\TKusy\Hl7Fhir\R5\IntegerType $average = null)
    {
        $this->average = $average;
        return $this;
    }

    /**
     * Gets as low
     *
     * A low expected limit of the amount.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Sets a new low
     *
     * A low expected limit of the amount.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $low
     * @return self
     */
    public function setLow(?\TKusy\Hl7Fhir\R5\IntegerType $low = null)
    {
        $this->low = $low;
        return $this;
    }

    /**
     * Gets as high
     *
     * A high expected limit of the amount.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Sets a new high
     *
     * A high expected limit of the amount.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $high
     * @return self
     */
    public function setHigh(?\TKusy\Hl7Fhir\R5\IntegerType $high = null)
    {
        $this->high = $high;
        return $this;
    }


}

