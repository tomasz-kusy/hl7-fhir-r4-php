<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSourceMaterialFractionDescriptionType
 *
 * Source material shall capture information on the taxonomic and anatomical origins as well as the fraction of a material that can result in or can be modified to form a substance. This set of data elements shall be used to define polymer substances isolated from biological matrices. Taxonomic and anatomical origins shall be described using a controlled vocabulary as required. This information is captured for naturally derived polymers ( . starch) and structurally diverse substances. For Organisms belonging to the Kingdom Plantae the Substance level defines the fresh material of a single species or infraspecies, the Herbal Drug and the Herbal preparation. For Herbal preparations, the fraction information will be captured at the Substance information level and additional information for herbal extracts will be captured at the Specified Substance Group 1 information level. See for further explanation the Substance Class: Structurally Diverse and the herbal annex.
 * XSD Type: SubstanceSourceMaterial.FractionDescription
 */
class SubstanceSourceMaterialFractionDescriptionType extends BackboneElementType
{

    /**
     * This element is capturing information about the fraction of a plant part, or human plasma for fractionation.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $fraction
     */
    private $fraction = null;

    /**
     * The specific type of the material constituting the component. For Herbal preparations the particulars of the extracts (liquid/dry) is described in Specified Substance Group 1.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $materialType
     */
    private $materialType = null;

    /**
     * Gets as fraction
     *
     * This element is capturing information about the fraction of a plant part, or human plasma for fractionation.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getFraction()
    {
        return $this->fraction;
    }

    /**
     * Sets a new fraction
     *
     * This element is capturing information about the fraction of a plant part, or human plasma for fractionation.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $fraction
     * @return self
     */
    public function setFraction(\TKusy\Hl7Fhir\R4\StringType $fraction)
    {
        $this->fraction = $fraction;
        return $this;
    }

    /**
     * Gets as materialType
     *
     * The specific type of the material constituting the component. For Herbal preparations the particulars of the extracts (liquid/dry) is described in Specified Substance Group 1.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getMaterialType()
    {
        return $this->materialType;
    }

    /**
     * Sets a new materialType
     *
     * The specific type of the material constituting the component. For Herbal preparations the particulars of the extracts (liquid/dry) is described in Specified Substance Group 1.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $materialType
     * @return self
     */
    public function setMaterialType(\TKusy\Hl7Fhir\R4\CodeableConceptType $materialType)
    {
        $this->materialType = $materialType;
        return $this;
    }


}

