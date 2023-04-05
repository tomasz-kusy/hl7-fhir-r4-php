<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceSourceMaterialOrganismGeneralType
 *
 * Source material shall capture information on the taxonomic and anatomical origins as well as the fraction of a material that can result in or can be modified to form a substance. This set of data elements shall be used to define polymer substances isolated from biological matrices. Taxonomic and anatomical origins shall be described using a controlled vocabulary as required. This information is captured for naturally derived polymers ( . starch) and structurally diverse substances. For Organisms belonging to the Kingdom Plantae the Substance level defines the fresh material of a single species or infraspecies, the Herbal Drug and the Herbal preparation. For Herbal preparations, the fraction information will be captured at the Substance information level and additional information for herbal extracts will be captured at the Specified Substance Group 1 information level. See for further explanation the Substance Class: Structurally Diverse and the herbal annex.
 * XSD Type: SubstanceSourceMaterial.OrganismGeneral
 */
class SubstanceSourceMaterialOrganismGeneralType extends BackboneElementType
{

    /**
     * The kingdom of an organism shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $kingdom
     */
    private $kingdom = null;

    /**
     * The phylum of an organism shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $phylum
     */
    private $phylum = null;

    /**
     * The class of an organism shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     */
    private $class = null;

    /**
     * The order of an organism shall be specified,.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $order
     */
    private $order = null;

    /**
     * Gets as kingdom
     *
     * The kingdom of an organism shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getKingdom()
    {
        return $this->kingdom;
    }

    /**
     * Sets a new kingdom
     *
     * The kingdom of an organism shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $kingdom
     * @return self
     */
    public function setKingdom(?\TKusy\Hl7Fhir\R5\CodeableConceptType $kingdom = null)
    {
        $this->kingdom = $kingdom;
        return $this;
    }

    /**
     * Gets as phylum
     *
     * The phylum of an organism shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPhylum()
    {
        return $this->phylum;
    }

    /**
     * Sets a new phylum
     *
     * The phylum of an organism shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $phylum
     * @return self
     */
    public function setPhylum(?\TKusy\Hl7Fhir\R5\CodeableConceptType $phylum = null)
    {
        $this->phylum = $phylum;
        return $this;
    }

    /**
     * Gets as class
     *
     * The class of an organism shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The class of an organism shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     * @return self
     */
    public function setClass(?\TKusy\Hl7Fhir\R5\CodeableConceptType $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as order
     *
     * The order of an organism shall be specified,.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * The order of an organism shall be specified,.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $order
     * @return self
     */
    public function setOrder(?\TKusy\Hl7Fhir\R5\CodeableConceptType $order = null)
    {
        $this->order = $order;
        return $this;
    }


}

