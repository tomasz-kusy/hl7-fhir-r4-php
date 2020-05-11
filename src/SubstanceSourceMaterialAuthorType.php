<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSourceMaterialAuthorType
 *
 * Source material shall capture information on the taxonomic and anatomical origins as well as the fraction of a material that can result in or can be modified to form a substance. This set of data elements shall be used to define polymer substances isolated from biological matrices. Taxonomic and anatomical origins shall be described using a controlled vocabulary as required. This information is captured for naturally derived polymers ( . starch) and structurally diverse substances. For Organisms belonging to the Kingdom Plantae the Substance level defines the fresh material of a single species or infraspecies, the Herbal Drug and the Herbal preparation. For Herbal preparations, the fraction information will be captured at the Substance information level and additional information for herbal extracts will be captured at the Specified Substance Group 1 information level. See for further explanation the Substance Class: Structurally Diverse and the herbal annex.
 * XSD Type: SubstanceSourceMaterial.Author
 */
class SubstanceSourceMaterialAuthorType extends BackboneElementType
{

    /**
     * The type of author of an organism species shall be specified. The parenthetical author of an organism species refers to the first author who published the plant/animal name (of any rank). The primary author of an organism species refers to the first author(s), who validly published the plant/animal name.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $authorType
     */
    private $authorType = null;

    /**
     * The author of an organism species shall be specified. The author year of an organism shall also be specified when applicable; refers to the year in which the first author(s) published the infraspecific plant/animal name (of any rank).
     *
     * @var string $authorDescription
     */
    private $authorDescription = null;

    /**
     * Gets as authorType
     *
     * The type of author of an organism species shall be specified. The parenthetical author of an organism species refers to the first author who published the plant/animal name (of any rank). The primary author of an organism species refers to the first author(s), who validly published the plant/animal name.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAuthorType()
    {
        return $this->authorType;
    }

    /**
     * Sets a new authorType
     *
     * The type of author of an organism species shall be specified. The parenthetical author of an organism species refers to the first author who published the plant/animal name (of any rank). The primary author of an organism species refers to the first author(s), who validly published the plant/animal name.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $authorType
     * @return self
     */
    public function setAuthorType(\TKusy\Hl7FhirR4\CodeableConceptType $authorType)
    {
        $this->authorType = $authorType;
        return $this;
    }

    /**
     * Gets as authorDescription
     *
     * The author of an organism species shall be specified. The author year of an organism shall also be specified when applicable; refers to the year in which the first author(s) published the infraspecific plant/animal name (of any rank).
     *
     * @return string
     */
    public function getAuthorDescription()
    {
        return $this->authorDescription;
    }

    /**
     * Sets a new authorDescription
     *
     * The author of an organism species shall be specified. The author year of an organism shall also be specified when applicable; refers to the year in which the first author(s) published the infraspecific plant/animal name (of any rank).
     *
     * @param string $authorDescription
     * @return self
     */
    public function setAuthorDescription($authorDescription)
    {
        $this->authorDescription = $authorDescription;
        return $this;
    }


}

