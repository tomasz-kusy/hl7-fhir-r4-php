<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \integer[] $score
     */
    private $score = null;

    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     *
     * @var \integer[] $numTP
     */
    private $numTP = null;

    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     *
     * @var \integer[] $numFP
     */
    private $numFP = null;

    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     *
     * @var \integer[] $numFN
     */
    private $numFN = null;

    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @var float[] $precision
     */
    private $precision = null;

    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @var float[] $sensitivity
     */
    private $sensitivity = null;

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @var float[] $fMeasure
     */
    private $fMeasure = null;

    /**
     * Adds as score
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @return self
     * @param \integer $score
     */
    public function addToScore(\integer $score)
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
     * @return \integer[]
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
     * @param \integer[] $score
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
     * @param \integer $numTP
     */
    public function addToNumTP(\integer $numTP)
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
     * @return \integer[]
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
     * @param \integer[] $numTP
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
     * @param \integer $numFP
     */
    public function addToNumFP(\integer $numFP)
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
     * @return \integer[]
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
     * @param \integer[] $numFP
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
     * @param \integer $numFN
     */
    public function addToNumFN(\integer $numFN)
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
     * @return \integer[]
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
     * @param \integer[] $numFN
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
     * @param float $precision
     */
    public function addToPrecision($precision)
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
     * @return float[]
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
     * @param float[] $precision
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
     * @param float $sensitivity
     */
    public function addToSensitivity($sensitivity)
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
     * @return float[]
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
     * @param float[] $sensitivity
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
     * @param float $fMeasure
     */
    public function addToFMeasure($fMeasure)
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
     * @return float[]
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
     * @param float[] $fMeasure
     * @return self
     */
    public function setFMeasure(array $fMeasure)
    {
        $this->fMeasure = $fMeasure;
        return $this;
    }


}

