<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSpecificationNameType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Name
 */
class SubstanceSpecificationNameType extends BackboneElementType
{

    /**
     * The actual name.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Name type.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The status of the name.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * If this is the preferred name for this substance.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $preferred
     */
    private $preferred = null;

    /**
     * Language of the name.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $language
     */
    private $language = null;

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $domain
     */
    private $domain = null;

    /**
     * The jurisdiction where this name applies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * A synonym of this name.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[] $synonym
     */
    private $synonym = null;

    /**
     * A translation for this name.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[] $translation
     */
    private $translation = null;

    /**
     * Details of the official nature of this name.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationOfficialType[] $official
     */
    private $official = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as name
     *
     * The actual name.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * Name type.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Name type.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the name.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the name.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as preferred
     *
     * If this is the preferred name for this substance.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $preferred
     * @return self
     */
    public function setPreferred(\TKusy\Hl7FhirR4\BooleanType $preferred)
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Adds as language
     *
     * Language of the name.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $language
     */
    public function addToLanguage(\TKusy\Hl7FhirR4\CodeableConceptType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * Language of the name.
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
     * Language of the name.
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
     * Language of the name.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language of the name.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $language
     * @return self
     */
    public function setLanguage(array $language)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $domain
     */
    public function addToDomain(\TKusy\Hl7FhirR4\CodeableConceptType $domain)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $domain
     * @return self
     */
    public function setDomain(array $domain)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Adds as synonym
     *
     * A synonym of this name.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationNameType $synonym
     */
    public function addToSynonym(\TKusy\Hl7FhirR4\SubstanceSpecificationNameType $synonym)
    {
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * isset synonym
     *
     * A synonym of this name.
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
     * A synonym of this name.
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
     * A synonym of this name.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * Sets a new synonym
     *
     * A synonym of this name.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[] $synonym
     * @return self
     */
    public function setSynonym(array $synonym)
    {
        $this->synonym = $synonym;
        return $this;
    }

    /**
     * Adds as translation
     *
     * A translation for this name.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationNameType $translation
     */
    public function addToTranslation(\TKusy\Hl7FhirR4\SubstanceSpecificationNameType $translation)
    {
        $this->translation[] = $translation;
        return $this;
    }

    /**
     * isset translation
     *
     * A translation for this name.
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
     * A translation for this name.
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
     * A translation for this name.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[]
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Sets a new translation
     *
     * A translation for this name.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[] $translation
     * @return self
     */
    public function setTranslation(array $translation)
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationOfficialType $official
     */
    public function addToOfficial(\TKusy\Hl7FhirR4\SubstanceSpecificationOfficialType $official)
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
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationOfficialType[]
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationOfficialType[] $official
     * @return self
     */
    public function setOfficial(array $official)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7FhirR4\ReferenceType $source)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }


}

