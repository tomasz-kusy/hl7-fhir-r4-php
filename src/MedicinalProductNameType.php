<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductNameType
 *
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * XSD Type: MedicinalProduct.Name
 */
class MedicinalProductNameType extends BackboneElementType
{

    /**
     * The full product name.
     *
     * @var string $productName
     */
    private $productName = null;

    /**
     * Coding words or phrases of the name.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductNamePartType[] $namePart
     */
    private $namePart = null;

    /**
     * Country where the name applies.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductCountryLanguageType[] $countryLanguage
     */
    private $countryLanguage = null;

    /**
     * Gets as productName
     *
     * The full product name.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * The full product name.
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Adds as namePart
     *
     * Coding words or phrases of the name.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductNamePartType $namePart
     */
    public function addToNamePart(\TKusy\Hl7FhirR4\MedicinalProductNamePartType $namePart)
    {
        $this->namePart[] = $namePart;
        return $this;
    }

    /**
     * isset namePart
     *
     * Coding words or phrases of the name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNamePart($index)
    {
        return isset($this->namePart[$index]);
    }

    /**
     * unset namePart
     *
     * Coding words or phrases of the name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNamePart($index)
    {
        unset($this->namePart[$index]);
    }

    /**
     * Gets as namePart
     *
     * Coding words or phrases of the name.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductNamePartType[]
     */
    public function getNamePart()
    {
        return $this->namePart;
    }

    /**
     * Sets a new namePart
     *
     * Coding words or phrases of the name.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductNamePartType[] $namePart
     * @return self
     */
    public function setNamePart(array $namePart)
    {
        $this->namePart = $namePart;
        return $this;
    }

    /**
     * Adds as countryLanguage
     *
     * Country where the name applies.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductCountryLanguageType $countryLanguage
     */
    public function addToCountryLanguage(\TKusy\Hl7FhirR4\MedicinalProductCountryLanguageType $countryLanguage)
    {
        $this->countryLanguage[] = $countryLanguage;
        return $this;
    }

    /**
     * isset countryLanguage
     *
     * Country where the name applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountryLanguage($index)
    {
        return isset($this->countryLanguage[$index]);
    }

    /**
     * unset countryLanguage
     *
     * Country where the name applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountryLanguage($index)
    {
        unset($this->countryLanguage[$index]);
    }

    /**
     * Gets as countryLanguage
     *
     * Country where the name applies.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductCountryLanguageType[]
     */
    public function getCountryLanguage()
    {
        return $this->countryLanguage;
    }

    /**
     * Sets a new countryLanguage
     *
     * Country where the name applies.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductCountryLanguageType[] $countryLanguage
     * @return self
     */
    public function setCountryLanguage(array $countryLanguage)
    {
        $this->countryLanguage = $countryLanguage;
        return $this;
    }


}

