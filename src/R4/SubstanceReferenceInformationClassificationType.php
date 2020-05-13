<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceReferenceInformationClassificationType
 *
 * Todo.
 * XSD Type: SubstanceReferenceInformation.Classification
 */
class SubstanceReferenceInformationClassificationType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $domain
     */
    private $domain = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $classification
     */
    private $classification = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $subtype
     */
    private $subtype = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as domain
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $domain
     * @return self
     */
    public function setDomain(\TKusy\Hl7Fhir\R4\CodeableConceptType $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Gets as classification
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $classification
     * @return self
     */
    public function setClassification(\TKusy\Hl7Fhir\R4\CodeableConceptType $classification)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Adds as subtype
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $subtype
     */
    public function addToSubtype(\TKusy\Hl7Fhir\R4\CodeableConceptType $subtype)
    {
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * isset subtype
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubtype($index)
    {
        return isset($this->subtype[$index]);
    }

    /**
     * unset subtype
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubtype($index)
    {
        unset($this->subtype[$index]);
    }

    /**
     * Gets as subtype
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Sets a new subtype
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $subtype
     * @return self
     */
    public function setSubtype(array $subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * Adds as source
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7Fhir\R4\ReferenceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }


}

