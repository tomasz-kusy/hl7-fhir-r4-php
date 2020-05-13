<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MolecularSequenceRocType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.Roc
 */
class MolecularSequenceRocType extends BackboneElementType
{

    /**
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType[] $score
     */
    private $score = null;

    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType[] $numTP
     */
    private $numTP = null;

    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType[] $numFP
     */
    private $numFP = null;

    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType[] $numFN
     */
    private $numFN = null;

    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType[] $precision
     */
    private $precision = null;

    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType[] $sensitivity
     */
    private $sensitivity = null;

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType[] $fMeasure
     */
    private $fMeasure = null;

    /**
     * Adds as score
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IntegerType $score
     */
    public function addToScore(\TKusy\Hl7Fhir\R4\IntegerType $score)
    {
        $this->score[] = $score;
        return $this;
    }

    /**
     * isset score
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScore($index)
    {
        return isset($this->score[$index]);
    }

    /**
     * unset score
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScore($index)
    {
        unset($this->score[$index]);
    }

    /**
     * Gets as score
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType[] $score
     * @return self
     */
    public function setScore(array $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Adds as numTP
     *
     * The number of true positives if the GQ score threshold was set to "score" field value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IntegerType $numTP
     */
    public function addToNumTP(\TKusy\Hl7Fhir\R4\IntegerType $numTP)
    {
        $this->numTP[] = $numTP;
        return $this;
    }

    /**
     * isset numTP
     *
     * The number of true positives if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumTP($index)
    {
        return isset($this->numTP[$index]);
    }

    /**
     * unset numTP
     *
     * The number of true positives if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumTP($index)
    {
        unset($this->numTP[$index]);
    }

    /**
     * Gets as numTP
     *
     * The number of true positives if the GQ score threshold was set to "score" field value.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType[]
     */
    public function getNumTP()
    {
        return $this->numTP;
    }

    /**
     * Sets a new numTP
     *
     * The number of true positives if the GQ score threshold was set to "score" field value.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType[] $numTP
     * @return self
     */
    public function setNumTP(array $numTP)
    {
        $this->numTP = $numTP;
        return $this;
    }

    /**
     * Adds as numFP
     *
     * The number of false positives if the GQ score threshold was set to "score" field value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IntegerType $numFP
     */
    public function addToNumFP(\TKusy\Hl7Fhir\R4\IntegerType $numFP)
    {
        $this->numFP[] = $numFP;
        return $this;
    }

    /**
     * isset numFP
     *
     * The number of false positives if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumFP($index)
    {
        return isset($this->numFP[$index]);
    }

    /**
     * unset numFP
     *
     * The number of false positives if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumFP($index)
    {
        unset($this->numFP[$index]);
    }

    /**
     * Gets as numFP
     *
     * The number of false positives if the GQ score threshold was set to "score" field value.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType[]
     */
    public function getNumFP()
    {
        return $this->numFP;
    }

    /**
     * Sets a new numFP
     *
     * The number of false positives if the GQ score threshold was set to "score" field value.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType[] $numFP
     * @return self
     */
    public function setNumFP(array $numFP)
    {
        $this->numFP = $numFP;
        return $this;
    }

    /**
     * Adds as numFN
     *
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IntegerType $numFN
     */
    public function addToNumFN(\TKusy\Hl7Fhir\R4\IntegerType $numFN)
    {
        $this->numFN[] = $numFN;
        return $this;
    }

    /**
     * isset numFN
     *
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumFN($index)
    {
        return isset($this->numFN[$index]);
    }

    /**
     * unset numFN
     *
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumFN($index)
    {
        unset($this->numFN[$index]);
    }

    /**
     * Gets as numFN
     *
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType[]
     */
    public function getNumFN()
    {
        return $this->numFN;
    }

    /**
     * Sets a new numFN
     *
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType[] $numFN
     * @return self
     */
    public function setNumFN(array $numFN)
    {
        $this->numFN = $numFN;
        return $this;
    }

    /**
     * Adds as precision
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\DecimalType $precision
     */
    public function addToPrecision(\TKusy\Hl7Fhir\R4\DecimalType $precision)
    {
        $this->precision[] = $precision;
        return $this;
    }

    /**
     * isset precision
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrecision($index)
    {
        return isset($this->precision[$index]);
    }

    /**
     * unset precision
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrecision($index)
    {
        unset($this->precision[$index]);
    }

    /**
     * Gets as precision
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType[]
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Sets a new precision
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType[] $precision
     * @return self
     */
    public function setPrecision(array $precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Adds as sensitivity
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\DecimalType $sensitivity
     */
    public function addToSensitivity(\TKusy\Hl7Fhir\R4\DecimalType $sensitivity)
    {
        $this->sensitivity[] = $sensitivity;
        return $this;
    }

    /**
     * isset sensitivity
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSensitivity($index)
    {
        return isset($this->sensitivity[$index]);
    }

    /**
     * unset sensitivity
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSensitivity($index)
    {
        unset($this->sensitivity[$index]);
    }

    /**
     * Gets as sensitivity
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType[]
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * Sets a new sensitivity
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType[] $sensitivity
     * @return self
     */
    public function setSensitivity(array $sensitivity)
    {
        $this->sensitivity = $sensitivity;
        return $this;
    }

    /**
     * Adds as fMeasure
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\DecimalType $fMeasure
     */
    public function addToFMeasure(\TKusy\Hl7Fhir\R4\DecimalType $fMeasure)
    {
        $this->fMeasure[] = $fMeasure;
        return $this;
    }

    /**
     * isset fMeasure
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFMeasure($index)
    {
        return isset($this->fMeasure[$index]);
    }

    /**
     * unset fMeasure
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFMeasure($index)
    {
        unset($this->fMeasure[$index]);
    }

    /**
     * Gets as fMeasure
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType[]
     */
    public function getFMeasure()
    {
        return $this->fMeasure;
    }

    /**
     * Sets a new fMeasure
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType[] $fMeasure
     * @return self
     */
    public function setFMeasure(array $fMeasure)
    {
        $this->fMeasure = $fMeasure;
        return $this;
    }


}

