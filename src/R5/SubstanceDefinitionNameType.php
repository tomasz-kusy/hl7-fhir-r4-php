<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionNameType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.Name
 */
class SubstanceDefinitionNameType extends BackboneElementType
{

    /**
     * The actual name.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Name type, for example 'systematic', 'scientific, 'brand'.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The status of the name, for example 'current', 'proposed'.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * If this is the preferred name for this substance.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $preferred
     */
    private $preferred = null;

    /**
     * Human language that the name is written in.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $language
     */
    private $language = null;

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $domain
     */
    private $domain = null;

    /**
     * The jurisdiction where this name applies.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * A synonym of this particular name, by which the substance is also known.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[] $synonym
     */
    private $synonym = null;

    /**
     * A translation for this name into another human language.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[] $translation
     */
    private $translation = null;

    /**
     * Details of the official nature of this name.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionOfficialType[] $official
     */
    private $official = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as name
     *
     * The actual name.
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
     * The actual name.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * Name type, for example 'systematic', 'scientific, 'brand'.
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
     * Name type, for example 'systematic', 'scientific, 'brand'.
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
     * Gets as status
     *
     * The status of the name, for example 'current', 'proposed'.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the name, for example 'current', 'proposed'.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as preferred
     *
     * If this is the preferred name for this substance.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getPreferred()
    {
        return $this->preferred;
    }

    /**
     * Sets a new preferred
     *
     * If this is the preferred name for this substance.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $preferred
     * @return self
     */
    public function setPreferred(?\TKusy\Hl7Fhir\R5\BooleanType $preferred = null)
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Adds as language
     *
     * Human language that the name is written in.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     */
    public function addToLanguage(\TKusy\Hl7Fhir\R5\CodeableConceptType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * Human language that the name is written in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * Human language that the name is written in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * Human language that the name is written in.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Human language that the name is written in.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $language
     * @return self
     */
    public function setLanguage(array $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as domain
     *
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $domain
     */
    public function addToDomain(\TKusy\Hl7Fhir\R5\CodeableConceptType $domain)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * isset domain
     *
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomain($index)
    {
        return isset($this->domain[$index]);
    }

    /**
     * unset domain
     *
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomain($index)
    {
        unset($this->domain[$index]);
    }

    /**
     * Gets as domain
     *
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $domain
     * @return self
     */
    public function setDomain(array $domain = null)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Adds as jurisdiction
     *
     * The jurisdiction where this name applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * The jurisdiction where this name applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdiction($index)
    {
        return isset($this->jurisdiction[$index]);
    }

    /**
     * unset jurisdiction
     *
     * The jurisdiction where this name applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdiction($index)
    {
        unset($this->jurisdiction[$index]);
    }

    /**
     * Gets as jurisdiction
     *
     * The jurisdiction where this name applies.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * The jurisdiction where this name applies.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction = null)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Adds as synonym
     *
     * A synonym of this particular name, by which the substance is also known.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType $synonym
     */
    public function addToSynonym(\TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType $synonym)
    {
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * isset synonym
     *
     * A synonym of this particular name, by which the substance is also known.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSynonym($index)
    {
        return isset($this->synonym[$index]);
    }

    /**
     * unset synonym
     *
     * A synonym of this particular name, by which the substance is also known.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSynonym($index)
    {
        unset($this->synonym[$index]);
    }

    /**
     * Gets as synonym
     *
     * A synonym of this particular name, by which the substance is also known.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * Sets a new synonym
     *
     * A synonym of this particular name, by which the substance is also known.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[] $synonym
     * @return self
     */
    public function setSynonym(array $synonym = null)
    {
        $this->synonym = $synonym;
        return $this;
    }

    /**
     * Adds as translation
     *
     * A translation for this name into another human language.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType $translation
     */
    public function addToTranslation(\TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType $translation)
    {
        $this->translation[] = $translation;
        return $this;
    }

    /**
     * isset translation
     *
     * A translation for this name into another human language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTranslation($index)
    {
        return isset($this->translation[$index]);
    }

    /**
     * unset translation
     *
     * A translation for this name into another human language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTranslation($index)
    {
        unset($this->translation[$index]);
    }

    /**
     * Gets as translation
     *
     * A translation for this name into another human language.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[]
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Sets a new translation
     *
     * A translation for this name into another human language.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[] $translation
     * @return self
     */
    public function setTranslation(array $translation = null)
    {
        $this->translation = $translation;
        return $this;
    }

    /**
     * Adds as official
     *
     * Details of the official nature of this name.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionOfficialType $official
     */
    public function addToOfficial(\TKusy\Hl7Fhir\R5\SubstanceDefinitionOfficialType $official)
    {
        $this->official[] = $official;
        return $this;
    }

    /**
     * isset official
     *
     * Details of the official nature of this name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfficial($index)
    {
        return isset($this->official[$index]);
    }

    /**
     * unset official
     *
     * Details of the official nature of this name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfficial($index)
    {
        unset($this->official[$index]);
    }

    /**
     * Gets as official
     *
     * Details of the official nature of this name.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionOfficialType[]
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * Sets a new official
     *
     * Details of the official nature of this name.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionOfficialType[] $official
     * @return self
     */
    public function setOfficial(array $official = null)
    {
        $this->official = $official;
        return $this;
    }

    /**
     * Adds as source
     *
     * Supporting literature.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7Fhir\R5\ReferenceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Supporting literature.
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
     * Supporting literature.
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
     * Supporting literature.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Supporting literature.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source = null)
    {
        $this->source = $source;
        return $this;
    }


}

