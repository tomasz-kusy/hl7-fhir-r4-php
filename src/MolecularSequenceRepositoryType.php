<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MolecularSequenceRepositoryType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.Repository
 */
class MolecularSequenceRepositoryType extends BackboneElementType
{

    /**
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     *
     * @var \TKusy\Hl7FhirR4\RepositoryTypeType $type
     */
    private $type = null;

    /**
     * URI of an external repository which contains further details about the genetics data.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * URI of an external repository which contains further details about the genetics data.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     *
     * @var \TKusy\Hl7FhirR4\StringType $datasetId
     */
    private $datasetId = null;

    /**
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     *
     * @var \TKusy\Hl7FhirR4\StringType $variantsetId
     */
    private $variantsetId = null;

    /**
     * Id of the read in this external repository.
     *
     * @var \TKusy\Hl7FhirR4\StringType $readsetId
     */
    private $readsetId = null;

    /**
     * Gets as type
     *
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     *
     * @return \TKusy\Hl7FhirR4\RepositoryTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     *
     * @param \TKusy\Hl7FhirR4\RepositoryTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\RepositoryTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as url
     *
     * URI of an external repository which contains further details about the genetics data.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * URI of an external repository which contains further details about the genetics data.
     *
     * @param \TKusy\Hl7FhirR4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as name
     *
     * URI of an external repository which contains further details about the genetics data.
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
     * URI of an external repository which contains further details about the genetics data.
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
     * Gets as datasetId
     *
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDatasetId()
    {
        return $this->datasetId;
    }

    /**
     * Sets a new datasetId
     *
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     *
     * @param \TKusy\Hl7FhirR4\StringType $datasetId
     * @return self
     */
    public function setDatasetId(\TKusy\Hl7FhirR4\StringType $datasetId)
    {
        $this->datasetId = $datasetId;
        return $this;
    }

    /**
     * Gets as variantsetId
     *
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getVariantsetId()
    {
        return $this->variantsetId;
    }

    /**
     * Sets a new variantsetId
     *
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     *
     * @param \TKusy\Hl7FhirR4\StringType $variantsetId
     * @return self
     */
    public function setVariantsetId(\TKusy\Hl7FhirR4\StringType $variantsetId)
    {
        $this->variantsetId = $variantsetId;
        return $this;
    }

    /**
     * Gets as readsetId
     *
     * Id of the read in this external repository.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getReadsetId()
    {
        return $this->readsetId;
    }

    /**
     * Sets a new readsetId
     *
     * Id of the read in this external repository.
     *
     * @param \TKusy\Hl7FhirR4\StringType $readsetId
     * @return self
     */
    public function setReadsetId(\TKusy\Hl7FhirR4\StringType $readsetId)
    {
        $this->readsetId = $readsetId;
        return $this;
    }


}

