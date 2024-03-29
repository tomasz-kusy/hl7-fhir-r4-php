<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResourceType
 *
 * This is the base resource type for everything.
 * XSD Type: Resource
 */
class ResourceType extends BaseType
{

    /**
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $id
     */
    private $id = null;

    /**
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.
     *
     * @var \TKusy\Hl7Fhir\R5\MetaType $meta
     */
    private $meta = null;

    /**
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content. Often, this is a reference to an implementation guide that defines the special rules along with other profiles etc.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $implicitRules
     */
    private $implicitRules = null;

    /**
     * The base language in which the resource is written.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $language
     */
    private $language = null;

    /**
     * Gets as id
     *
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * The logical id of the resource, as used in the URL for the resource. Once assigned, this value never changes.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $id
     * @return self
     */
    public function setId(?\TKusy\Hl7Fhir\R5\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as meta
     *
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.
     *
     * @return \TKusy\Hl7Fhir\R5\MetaType
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Sets a new meta
     *
     * The metadata about the resource. This is content that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.
     *
     * @param \TKusy\Hl7Fhir\R5\MetaType $meta
     * @return self
     */
    public function setMeta(?\TKusy\Hl7Fhir\R5\MetaType $meta = null)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * Gets as implicitRules
     *
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content. Often, this is a reference to an implementation guide that defines the special rules along with other profiles etc.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getImplicitRules()
    {
        return $this->implicitRules;
    }

    /**
     * Sets a new implicitRules
     *
     * A reference to a set of rules that were followed when the resource was constructed, and which must be understood when processing the content. Often, this is a reference to an implementation guide that defines the special rules along with other profiles etc.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $implicitRules
     * @return self
     */
    public function setImplicitRules(?\TKusy\Hl7Fhir\R5\UriType $implicitRules = null)
    {
        $this->implicitRules = $implicitRules;
        return $this;
    }

    /**
     * Gets as language
     *
     * The base language in which the resource is written.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The base language in which the resource is written.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CodeType $language = null)
    {
        $this->language = $language;
        return $this;
    }


}

