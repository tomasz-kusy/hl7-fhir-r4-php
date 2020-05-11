<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MolecularSequenceQualityType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.Quality
 */
class MolecularSequenceQualityType extends BackboneElementType
{

    /**
     * INDEL / SNP / Undefined variant.
     *
     * @var \TKusy\Hl7FhirR4\QualityTypeType $type
     */
    private $type = null;

    /**
     * Gold standard sequence used for comparing against.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $standardSequence
     */
    private $standardSequence = null;

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \integer $start
     */
    private $start = null;

    /**
     * End position of the sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \integer $end
     */
    private $end = null;

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $score
     */
    private $score = null;

    /**
     * Which method is used to get sequence quality.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @var float $truthTP
     */
    private $truthTP = null;

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @var float $queryTP
     */
    private $queryTP = null;

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @var float $truthFN
     */
    private $truthFN = null;

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     *
     * @var float $queryFP
     */
    private $queryFP = null;

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     *
     * @var float $gtFP
     */
    private $gtFP = null;

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @var float $precision
     */
    private $precision = null;

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @var float $recall
     */
    private $recall = null;

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     *
     * @var float $fScore
     */
    private $fScore = null;

    /**
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity tradeoff.
     *
     * @var \TKusy\Hl7FhirR4\MolecularSequenceRocType $roc
     */
    private $roc = null;

    /**
     * Gets as type
     *
     * INDEL / SNP / Undefined variant.
     *
     * @return \TKusy\Hl7FhirR4\QualityTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * INDEL / SNP / Undefined variant.
     *
     * @param \TKusy\Hl7FhirR4\QualityTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\QualityTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as standardSequence
     *
     * Gold standard sequence used for comparing against.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStandardSequence()
    {
        return $this->standardSequence;
    }

    /**
     * Sets a new standardSequence
     *
     * Gold standard sequence used for comparing against.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $standardSequence
     * @return self
     */
    public function setStandardSequence(\TKusy\Hl7FhirR4\CodeableConceptType $standardSequence)
    {
        $this->standardSequence = $standardSequence;
        return $this;
    }

    /**
     * Gets as start
     *
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return \integer
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @param \integer $start
     * @return self
     */
    public function setStart(\integer $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * End position of the sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @return \integer
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * End position of the sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @param \integer $end
     * @return self
     */
    public function setEnd(\integer $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as score
     *
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $score
     * @return self
     */
    public function setScore(\TKusy\Hl7FhirR4\QuantityType $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as method
     *
     * Which method is used to get sequence quality.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * Which method is used to get sequence quality.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as truthTP
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @return float
     */
    public function getTruthTP()
    {
        return $this->truthTP;
    }

    /**
     * Sets a new truthTP
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @param float $truthTP
     * @return self
     */
    public function setTruthTP($truthTP)
    {
        $this->truthTP = $truthTP;
        return $this;
    }

    /**
     * Gets as queryTP
     *
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @return float
     */
    public function getQueryTP()
    {
        return $this->queryTP;
    }

    /**
     * Sets a new queryTP
     *
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @param float $queryTP
     * @return self
     */
    public function setQueryTP($queryTP)
    {
        $this->queryTP = $queryTP;
        return $this;
    }

    /**
     * Gets as truthFN
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @return float
     */
    public function getTruthFN()
    {
        return $this->truthFN;
    }

    /**
     * Sets a new truthFN
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @param float $truthFN
     * @return self
     */
    public function setTruthFN($truthFN)
    {
        $this->truthFN = $truthFN;
        return $this;
    }

    /**
     * Gets as queryFP
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     *
     * @return float
     */
    public function getQueryFP()
    {
        return $this->queryFP;
    }

    /**
     * Sets a new queryFP
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     *
     * @param float $queryFP
     * @return self
     */
    public function setQueryFP($queryFP)
    {
        $this->queryFP = $queryFP;
        return $this;
    }

    /**
     * Gets as gtFP
     *
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     *
     * @return float
     */
    public function getGtFP()
    {
        return $this->gtFP;
    }

    /**
     * Sets a new gtFP
     *
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     *
     * @param float $gtFP
     * @return self
     */
    public function setGtFP($gtFP)
    {
        $this->gtFP = $gtFP;
        return $this;
    }

    /**
     * Gets as precision
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @return float
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Sets a new precision
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @param float $precision
     * @return self
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Gets as recall
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @return float
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * Sets a new recall
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @param float $recall
     * @return self
     */
    public function setRecall($recall)
    {
        $this->recall = $recall;
        return $this;
    }

    /**
     * Gets as fScore
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     *
     * @return float
     */
    public function getFScore()
    {
        return $this->fScore;
    }

    /**
     * Sets a new fScore
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     *
     * @param float $fScore
     * @return self
     */
    public function setFScore($fScore)
    {
        $this->fScore = $fScore;
        return $this;
    }

    /**
     * Gets as roc
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity tradeoff.
     *
     * @return \TKusy\Hl7FhirR4\MolecularSequenceRocType
     */
    public function getRoc()
    {
        return $this->roc;
    }

    /**
     * Sets a new roc
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity tradeoff.
     *
     * @param \TKusy\Hl7FhirR4\MolecularSequenceRocType $roc
     * @return self
     */
    public function setRoc(\TKusy\Hl7FhirR4\MolecularSequenceRocType $roc)
    {
        $this->roc = $roc;
        return $this;
    }


}

