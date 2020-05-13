<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSourceMaterialHybridType
 *
 * Source material shall capture information on the taxonomic and anatomical origins as well as the fraction of a material that can result in or can be modified to form a substance. This set of data elements shall be used to define polymer substances isolated from biological matrices. Taxonomic and anatomical origins shall be described using a controlled vocabulary as required. This information is captured for naturally derived polymers ( . starch) and structurally diverse substances. For Organisms belonging to the Kingdom Plantae the Substance level defines the fresh material of a single species or infraspecies, the Herbal Drug and the Herbal preparation. For Herbal preparations, the fraction information will be captured at the Substance information level and additional information for herbal extracts will be captured at the Specified Substance Group 1 information level. See for further explanation the Substance Class: Structurally Diverse and the herbal annex.
 * XSD Type: SubstanceSourceMaterial.Hybrid
 */
class SubstanceSourceMaterialHybridType extends BackboneElementType
{

    /**
     * The identifier of the maternal species constituting the hybrid organism shall be specified based on a controlled vocabulary. For plants, the parents aren’t always known, and it is unlikely that it will be known which is maternal and which is paternal.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $maternalOrganismId
     */
    private $maternalOrganismId = null;

    /**
     * The name of the maternal species constituting the hybrid organism shall be specified. For plants, the parents aren’t always known, and it is unlikely that it will be known which is maternal and which is paternal.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $maternalOrganismName
     */
    private $maternalOrganismName = null;

    /**
     * The identifier of the paternal species constituting the hybrid organism shall be specified based on a controlled vocabulary.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $paternalOrganismId
     */
    private $paternalOrganismId = null;

    /**
     * The name of the paternal species constituting the hybrid organism shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $paternalOrganismName
     */
    private $paternalOrganismName = null;

    /**
     * The hybrid type of an organism shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $hybridType
     */
    private $hybridType = null;

    /**
     * Gets as maternalOrganismId
     *
     * The identifier of the maternal species constituting the hybrid organism shall be specified based on a controlled vocabulary. For plants, the parents aren’t always known, and it is unlikely that it will be known which is maternal and which is paternal.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getMaternalOrganismId()
    {
        return $this->maternalOrganismId;
    }

    /**
     * Sets a new maternalOrganismId
     *
     * The identifier of the maternal species constituting the hybrid organism shall be specified based on a controlled vocabulary. For plants, the parents aren’t always known, and it is unlikely that it will be known which is maternal and which is paternal.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $maternalOrganismId
     * @return self
     */
    public function setMaternalOrganismId(\TKusy\Hl7Fhir\R4\StringType $maternalOrganismId)
    {
        $this->maternalOrganismId = $maternalOrganismId;
        return $this;
    }

    /**
     * Gets as maternalOrganismName
     *
     * The name of the maternal species constituting the hybrid organism shall be specified. For plants, the parents aren’t always known, and it is unlikely that it will be known which is maternal and which is paternal.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getMaternalOrganismName()
    {
        return $this->maternalOrganismName;
    }

    /**
     * Sets a new maternalOrganismName
     *
     * The name of the maternal species constituting the hybrid organism shall be specified. For plants, the parents aren’t always known, and it is unlikely that it will be known which is maternal and which is paternal.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $maternalOrganismName
     * @return self
     */
    public function setMaternalOrganismName(\TKusy\Hl7Fhir\R4\StringType $maternalOrganismName)
    {
        $this->maternalOrganismName = $maternalOrganismName;
        return $this;
    }

    /**
     * Gets as paternalOrganismId
     *
     * The identifier of the paternal species constituting the hybrid organism shall be specified based on a controlled vocabulary.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getPaternalOrganismId()
    {
        return $this->paternalOrganismId;
    }

    /**
     * Sets a new paternalOrganismId
     *
     * The identifier of the paternal species constituting the hybrid organism shall be specified based on a controlled vocabulary.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $paternalOrganismId
     * @return self
     */
    public function setPaternalOrganismId(\TKusy\Hl7Fhir\R4\StringType $paternalOrganismId)
    {
        $this->paternalOrganismId = $paternalOrganismId;
        return $this;
    }

    /**
     * Gets as paternalOrganismName
     *
     * The name of the paternal species constituting the hybrid organism shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getPaternalOrganismName()
    {
        return $this->paternalOrganismName;
    }

    /**
     * Sets a new paternalOrganismName
     *
     * The name of the paternal species constituting the hybrid organism shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $paternalOrganismName
     * @return self
     */
    public function setPaternalOrganismName(\TKusy\Hl7Fhir\R4\StringType $paternalOrganismName)
    {
        $this->paternalOrganismName = $paternalOrganismName;
        return $this;
    }

    /**
     * Gets as hybridType
     *
     * The hybrid type of an organism shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getHybridType()
    {
        return $this->hybridType;
    }

    /**
     * Sets a new hybridType
     *
     * The hybrid type of an organism shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $hybridType
     * @return self
     */
    public function setHybridType(\TKusy\Hl7Fhir\R4\CodeableConceptType $hybridType)
    {
        $this->hybridType = $hybridType;
        return $this;
    }


}

