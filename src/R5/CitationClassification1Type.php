<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationClassification1Type
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Classification1
 */
class CitationClassification1Type extends BackboneElementType
{

    /**
     * The kind of classifier (e.g. publication type, keyword).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The specific classification value.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     */
    private $classifier = null;

    /**
     * Complex or externally created classification.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $artifactAssessment
     */
    private $artifactAssessment = null;

    /**
     * Gets as type
     *
     * The kind of classifier (e.g. publication type, keyword).
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
     * The kind of classifier (e.g. publication type, keyword).
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
     * Adds as classifier
     *
     * The specific classification value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classifier
     */
    public function addToClassifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $classifier)
    {
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * isset classifier
     *
     * The specific classification value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifier($index)
    {
        return isset($this->classifier[$index]);
    }

    /**
     * unset classifier
     *
     * The specific classification value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifier($index)
    {
        unset($this->classifier[$index]);
    }

    /**
     * Gets as classifier
     *
     * The specific classification value.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClassifier()
    {
        return $this->classifier;
    }

    /**
     * Sets a new classifier
     *
     * The specific classification value.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     * @return self
     */
    public function setClassifier(array $classifier = null)
    {
        $this->classifier = $classifier;
        return $this;
    }

    /**
     * Adds as artifactAssessment
     *
     * Complex or externally created classification.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $artifactAssessment
     */
    public function addToArtifactAssessment(\TKusy\Hl7Fhir\R5\ReferenceType $artifactAssessment)
    {
        $this->artifactAssessment[] = $artifactAssessment;
        return $this;
    }

    /**
     * isset artifactAssessment
     *
     * Complex or externally created classification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtifactAssessment($index)
    {
        return isset($this->artifactAssessment[$index]);
    }

    /**
     * unset artifactAssessment
     *
     * Complex or externally created classification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtifactAssessment($index)
    {
        unset($this->artifactAssessment[$index]);
    }

    /**
     * Gets as artifactAssessment
     *
     * Complex or externally created classification.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getArtifactAssessment()
    {
        return $this->artifactAssessment;
    }

    /**
     * Sets a new artifactAssessment
     *
     * Complex or externally created classification.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $artifactAssessment
     * @return self
     */
    public function setArtifactAssessment(array $artifactAssessment = null)
    {
        $this->artifactAssessment = $artifactAssessment;
        return $this;
    }


}

