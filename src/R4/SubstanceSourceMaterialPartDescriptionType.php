<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSourceMaterialPartDescriptionType
 *
 * Source material shall capture information on the taxonomic and anatomical origins as well as the fraction of a material that can result in or can be modified to form a substance. This set of data elements shall be used to define polymer substances isolated from biological matrices. Taxonomic and anatomical origins shall be described using a controlled vocabulary as required. This information is captured for naturally derived polymers ( . starch) and structurally diverse substances. For Organisms belonging to the Kingdom Plantae the Substance level defines the fresh material of a single species or infraspecies, the Herbal Drug and the Herbal preparation. For Herbal preparations, the fraction information will be captured at the Substance information level and additional information for herbal extracts will be captured at the Specified Substance Group 1 information level. See for further explanation the Substance Class: Structurally Diverse and the herbal annex.
 * XSD Type: SubstanceSourceMaterial.PartDescription
 */
class SubstanceSourceMaterialPartDescriptionType extends BackboneElementType
{

    /**
     * Entity of anatomical origin of source material within an organism.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $part
     */
    private $part = null;

    /**
     * The detailed anatomic location when the part can be extracted from different anatomical locations of the organism. Multiple alternative locations may apply.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $partLocation
     */
    private $partLocation = null;

    /**
     * Gets as part
     *
     * Entity of anatomical origin of source material within an organism.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part
     *
     * Entity of anatomical origin of source material within an organism.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $part
     * @return self
     */
    public function setPart(\TKusy\Hl7Fhir\R4\CodeableConceptType $part)
    {
        $this->part = $part;
        return $this;
    }

    /**
     * Gets as partLocation
     *
     * The detailed anatomic location when the part can be extracted from different anatomical locations of the organism. Multiple alternative locations may apply.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getPartLocation()
    {
        return $this->partLocation;
    }

    /**
     * Sets a new partLocation
     *
     * The detailed anatomic location when the part can be extracted from different anatomical locations of the organism. Multiple alternative locations may apply.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $partLocation
     * @return self
     */
    public function setPartLocation(\TKusy\Hl7Fhir\R4\CodeableConceptType $partLocation)
    {
        $this->partLocation = $partLocation;
        return $this;
    }


}

