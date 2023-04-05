<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CapabilityStatementDocumentType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server or Client for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Document
 */
class CapabilityStatementDocumentType extends BackboneElementType
{

    /**
     * Mode of this document declaration - whether an application is a producer or consumer.
     *
     * @var \TKusy\Hl7Fhir\R5\DocumentModeType $mode
     */
    private $mode = null;

    /**
     * A description of how the application supports or uses the specified document profile. For example, when documents are created, what action is taken with consumed documents, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * A profile on the document Bundle that constrains which resources are present, and their contents.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Gets as mode
     *
     * Mode of this document declaration - whether an application is a producer or consumer.
     *
     * @return \TKusy\Hl7Fhir\R5\DocumentModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Mode of this document declaration - whether an application is a producer or consumer.
     *
     * @param \TKusy\Hl7Fhir\R5\DocumentModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R5\DocumentModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * A description of how the application supports or uses the specified document profile. For example, when documents are created, what action is taken with consumed documents, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * A description of how the application supports or uses the specified document profile. For example, when documents are created, what action is taken with consumed documents, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(?\TKusy\Hl7Fhir\R5\MarkdownType $documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Gets as profile
     *
     * A profile on the document Bundle that constrains which resources are present, and their contents.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * A profile on the document Bundle that constrains which resources are present, and their contents.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7Fhir\R5\CanonicalType $profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

