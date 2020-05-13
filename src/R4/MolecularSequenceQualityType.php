<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\QualityTypeType $type
     */
    private $type = null;

    /**
     * Gold standard sequence used for comparing against.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $standardSequence
     */
    private $standardSequence = null;

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $start
     */
    private $start = null;

    /**
     * End position of the sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $end
     */
    private $end = null;

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $score
     */
    private $score = null;

    /**
     * Which method is used to get sequence quality.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $truthTP
     */
    private $truthTP = null;

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $queryTP
     */
    private $queryTP = null;

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $truthFN
     */
    private $truthFN = null;

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $queryFP
     */
    private $queryFP = null;

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $gtFP
     */
    private $gtFP = null;

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $precision
     */
    private $precision = null;

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $recall
     */
    private $recall = null;

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $fScore
     */
    private $fScore = null;

    /**
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity tradeoff.
     *
     * @var \TKusy\Hl7Fhir\R4\MolecularSequenceRocType $roc
     */
    private $roc = null;

    /**
     * Gets as type
     *
     * INDEL / SNP / Undefined variant.
     *
     * @return \TKusy\Hl7Fhir\R4\QualityTypeType
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
     * @param \TKusy\Hl7Fhir\R4\QualityTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\QualityTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as standardSequence
     *
     * Gold standard sequence used for comparing against.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $standardSequence
     * @return self
     */
    public function setStandardSequence(\TKusy\Hl7Fhir\R4\CodeableConceptType $standardSequence)
    {
        $this->standardSequence = $standardSequence;
        return $this;
    }

    /**
     * Gets as start
     *
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
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
     * @param \TKusy\Hl7Fhir\R4\IntegerType $start
     * @return self
     */
    public function setStart(\TKusy\Hl7Fhir\R4\IntegerType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * End position of the sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
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
     * @param \TKusy\Hl7Fhir\R4\IntegerType $end
     * @return self
     */
    public function setEnd(\TKusy\Hl7Fhir\R4\IntegerType $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as score
     *
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
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
     * @param \TKusy\Hl7Fhir\R4\QuantityType $score
     * @return self
     */
    public function setScore(\TKusy\Hl7Fhir\R4\QuantityType $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as method
     *
     * Which method is used to get sequence quality.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7Fhir\R4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as truthTP
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $truthTP
     * @return self
     */
    public function setTruthTP(\TKusy\Hl7Fhir\R4\DecimalType $truthTP)
    {
        $this->truthTP = $truthTP;
        return $this;
    }

    /**
     * Gets as queryTP
     *
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $queryTP
     * @return self
     */
    public function setQueryTP(\TKusy\Hl7Fhir\R4\DecimalType $queryTP)
    {
        $this->queryTP = $queryTP;
        return $this;
    }

    /**
     * Gets as truthFN
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $truthFN
     * @return self
     */
    public function setTruthFN(\TKusy\Hl7Fhir\R4\DecimalType $truthFN)
    {
        $this->truthFN = $truthFN;
        return $this;
    }

    /**
     * Gets as queryFP
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $queryFP
     * @return self
     */
    public function setQueryFP(\TKusy\Hl7Fhir\R4\DecimalType $queryFP)
    {
        $this->queryFP = $queryFP;
        return $this;
    }

    /**
     * Gets as gtFP
     *
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $gtFP
     * @return self
     */
    public function setGtFP(\TKusy\Hl7Fhir\R4\DecimalType $gtFP)
    {
        $this->gtFP = $gtFP;
        return $this;
    }

    /**
     * Gets as precision
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $precision
     * @return self
     */
    public function setPrecision(\TKusy\Hl7Fhir\R4\DecimalType $precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Gets as recall
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $recall
     * @return self
     */
    public function setRecall(\TKusy\Hl7Fhir\R4\DecimalType $recall)
    {
        $this->recall = $recall;
        return $this;
    }

    /**
     * Gets as fScore
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $fScore
     * @return self
     */
    public function setFScore(\TKusy\Hl7Fhir\R4\DecimalType $fScore)
    {
        $this->fScore = $fScore;
        return $this;
    }

    /**
     * Gets as roc
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity tradeoff.
     *
     * @return \TKusy\Hl7Fhir\R4\MolecularSequenceRocType
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
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceRocType $roc
     * @return self
     */
    public function setRoc(\TKusy\Hl7Fhir\R4\MolecularSequenceRocType $roc)
    {
        $this->roc = $roc;
        return $this;
    }


}

