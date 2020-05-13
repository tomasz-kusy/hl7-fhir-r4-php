<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ImmunizationEducationType
 *
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 * XSD Type: Immunization.Education
 */
class ImmunizationEducationType extends BackboneElementType
{

    /**
     * Identifier of the material presented to the patient.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $documentType
     */
    private $documentType = null;

    /**
     * Reference pointer to the educational material given to the patient if the information was on line.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $reference
     */
    private $reference = null;

    /**
     * Date the educational material was published.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $publicationDate
     */
    private $publicationDate = null;

    /**
     * Date the educational material was given to the patient.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $presentationDate
     */
    private $presentationDate = null;

    /**
     * Gets as documentType
     *
     * Identifier of the material presented to the patient.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * Identifier of the material presented to the patient.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $documentType
     * @return self
     */
    public function setDocumentType(\TKusy\Hl7Fhir\R4\StringType $documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Reference pointer to the educational material given to the patient if the information was on line.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Reference pointer to the educational material given to the patient if the information was on line.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R4\UriType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as publicationDate
     *
     * Date the educational material was published.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Sets a new publicationDate
     *
     * Date the educational material was published.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $publicationDate
     * @return self
     */
    public function setPublicationDate(\TKusy\Hl7Fhir\R4\DateTimeType $publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * Gets as presentationDate
     *
     * Date the educational material was given to the patient.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getPresentationDate()
    {
        return $this->presentationDate;
    }

    /**
     * Sets a new presentationDate
     *
     * Date the educational material was given to the patient.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $presentationDate
     * @return self
     */
    public function setPresentationDate(\TKusy\Hl7Fhir\R4\DateTimeType $presentationDate)
    {
        $this->presentationDate = $presentationDate;
        return $this;
    }


}

