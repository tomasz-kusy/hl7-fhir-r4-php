<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RegulatedAuthorizationType
 *
 * Regulatory approval, clearance or licencing related to a regulated product, treatment, facility or activity that is cited in a guidance, regulation, rule or legislative act. An example is Market Authorization relating to a Medicinal Product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: RegulatedAuthorization
 */
class RegulatedAuthorizationType extends DomainResourceType
{

    /**
     * Business identifier for the authorization, typically assigned by the authorizing body.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * Overall type of this authorization, for example drug marketing approval, orphan drug designation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * General textual supporting information.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has been granted.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $region
     */
    private $region = null;

    /**
     * The status that is authorised e.g. approved. Intermediate states and actions can be tracked with cases and applications.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * The date at which the current status was assigned.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $statusDate
     */
    private $statusDate = null;

    /**
     * The time period in which the regulatory approval, clearance or licencing is in effect. As an example, a Marketing Authorization includes the date of authorization and/or an expiration date.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Condition for which the use of the regulated product applies.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $indication
     */
    private $indication = null;

    /**
     * The intended use of the product, e.g. prevention, treatment, diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $intendedUse
     */
    private $intendedUse = null;

    /**
     * The legal or regulatory framework against which this authorization is granted, or other reasons for it.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $basis
     */
    private $basis = null;

    /**
     * The organization that has been granted this authorization, by some authoritative body (the 'regulator').
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $holder
     */
    private $holder = null;

    /**
     * The regulatory authority or authorizing body granting the authorization. For example, European Medicines Agency (EMA), Food and Drug Administration (FDA), Health Canada (HC), etc.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $regulator
     */
    private $regulator = null;

    /**
     * Additional information or supporting documentation about the authorization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $attachedDocument
     */
    private $attachedDocument = null;

    /**
     * The case or regulatory procedure for granting or amending a regulated authorization. An authorization is granted in response to submissions/applications by those seeking authorization. A case is the administrative process that deals with the application(s) that relate to this and assesses them. Note: This area is subject to ongoing review and the workgroup is seeking implementer feedback on its use (see link at bottom of page).
     *
     * @var \TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType $case
     */
    private $case = null;

    /**
     * Adds as identifier
     *
     * Business identifier for the authorization, typically assigned by the authorizing body.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Business identifier for the authorization, typically assigned by the authorizing body.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Business identifier for the authorization, typically assigned by the authorizing body.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Business identifier for the authorization, typically assigned by the authorizing body.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifier for the authorization, typically assigned by the authorizing body.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as subject
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as type
     *
     * Overall type of this authorization, for example drug marketing approval, orphan drug designation.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Overall type of this authorization, for example drug marketing approval, orphan drug designation.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as description
     *
     * General textual supporting information.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * General textual supporting information.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as region
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has been granted.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $region
     */
    public function addToRegion(\TKusy\Hl7Fhir\R5\CodeableConceptType $region)
    {
        $this->region[] = $region;
        return $this;
    }

    /**
     * isset region
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has been granted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegion($index)
    {
        return isset($this->region[$index]);
    }

    /**
     * unset region
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has been granted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegion($index)
    {
        unset($this->region[$index]);
    }

    /**
     * Gets as region
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has been granted.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has been granted.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $region
     * @return self
     */
    public function setRegion(array $region = null)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status that is authorised e.g. approved. Intermediate states and actions can be tracked with cases and applications.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status that is authorised e.g. approved. Intermediate states and actions can be tracked with cases and applications.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * The date at which the current status was assigned.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * The date at which the current status was assigned.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $statusDate
     * @return self
     */
    public function setStatusDate(?\TKusy\Hl7Fhir\R5\DateTimeType $statusDate = null)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * The time period in which the regulatory approval, clearance or licencing is in effect. As an example, a Marketing Authorization includes the date of authorization and/or an expiration date.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * The time period in which the regulatory approval, clearance or licencing is in effect. As an example, a Marketing Authorization includes the date of authorization and/or an expiration date.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as indication
     *
     * Condition for which the use of the regulated product applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $indication
     */
    public function addToIndication(\TKusy\Hl7Fhir\R5\CodeableReferenceType $indication)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * isset indication
     *
     * Condition for which the use of the regulated product applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndication($index)
    {
        return isset($this->indication[$index]);
    }

    /**
     * unset indication
     *
     * Condition for which the use of the regulated product applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndication($index)
    {
        unset($this->indication[$index]);
    }

    /**
     * Gets as indication
     *
     * Condition for which the use of the regulated product applies.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Sets a new indication
     *
     * Condition for which the use of the regulated product applies.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $indication
     * @return self
     */
    public function setIndication(array $indication = null)
    {
        $this->indication = $indication;
        return $this;
    }

    /**
     * Gets as intendedUse
     *
     * The intended use of the product, e.g. prevention, treatment, diagnosis.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getIntendedUse()
    {
        return $this->intendedUse;
    }

    /**
     * Sets a new intendedUse
     *
     * The intended use of the product, e.g. prevention, treatment, diagnosis.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $intendedUse
     * @return self
     */
    public function setIntendedUse(?\TKusy\Hl7Fhir\R5\CodeableConceptType $intendedUse = null)
    {
        $this->intendedUse = $intendedUse;
        return $this;
    }

    /**
     * Adds as basis
     *
     * The legal or regulatory framework against which this authorization is granted, or other reasons for it.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $basis
     */
    public function addToBasis(\TKusy\Hl7Fhir\R5\CodeableConceptType $basis)
    {
        $this->basis[] = $basis;
        return $this;
    }

    /**
     * isset basis
     *
     * The legal or regulatory framework against which this authorization is granted, or other reasons for it.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasis($index)
    {
        return isset($this->basis[$index]);
    }

    /**
     * unset basis
     *
     * The legal or regulatory framework against which this authorization is granted, or other reasons for it.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasis($index)
    {
        unset($this->basis[$index]);
    }

    /**
     * Gets as basis
     *
     * The legal or regulatory framework against which this authorization is granted, or other reasons for it.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Sets a new basis
     *
     * The legal or regulatory framework against which this authorization is granted, or other reasons for it.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $basis
     * @return self
     */
    public function setBasis(array $basis = null)
    {
        $this->basis = $basis;
        return $this;
    }

    /**
     * Gets as holder
     *
     * The organization that has been granted this authorization, by some authoritative body (the 'regulator').
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * Sets a new holder
     *
     * The organization that has been granted this authorization, by some authoritative body (the 'regulator').
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $holder
     * @return self
     */
    public function setHolder(?\TKusy\Hl7Fhir\R5\ReferenceType $holder = null)
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * Gets as regulator
     *
     * The regulatory authority or authorizing body granting the authorization. For example, European Medicines Agency (EMA), Food and Drug Administration (FDA), Health Canada (HC), etc.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRegulator()
    {
        return $this->regulator;
    }

    /**
     * Sets a new regulator
     *
     * The regulatory authority or authorizing body granting the authorization. For example, European Medicines Agency (EMA), Food and Drug Administration (FDA), Health Canada (HC), etc.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $regulator
     * @return self
     */
    public function setRegulator(?\TKusy\Hl7Fhir\R5\ReferenceType $regulator = null)
    {
        $this->regulator = $regulator;
        return $this;
    }

    /**
     * Adds as attachedDocument
     *
     * Additional information or supporting documentation about the authorization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $attachedDocument
     */
    public function addToAttachedDocument(\TKusy\Hl7Fhir\R5\ReferenceType $attachedDocument)
    {
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * isset attachedDocument
     *
     * Additional information or supporting documentation about the authorization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttachedDocument($index)
    {
        return isset($this->attachedDocument[$index]);
    }

    /**
     * unset attachedDocument
     *
     * Additional information or supporting documentation about the authorization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttachedDocument($index)
    {
        unset($this->attachedDocument[$index]);
    }

    /**
     * Gets as attachedDocument
     *
     * Additional information or supporting documentation about the authorization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }

    /**
     * Sets a new attachedDocument
     *
     * Additional information or supporting documentation about the authorization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $attachedDocument
     * @return self
     */
    public function setAttachedDocument(array $attachedDocument = null)
    {
        $this->attachedDocument = $attachedDocument;
        return $this;
    }

    /**
     * Gets as case
     *
     * The case or regulatory procedure for granting or amending a regulated authorization. An authorization is granted in response to submissions/applications by those seeking authorization. A case is the administrative process that deals with the application(s) that relate to this and assesses them. Note: This area is subject to ongoing review and the workgroup is seeking implementer feedback on its use (see link at bottom of page).
     *
     * @return \TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * Sets a new case
     *
     * The case or regulatory procedure for granting or amending a regulated authorization. An authorization is granted in response to submissions/applications by those seeking authorization. A case is the administrative process that deals with the application(s) that relate to this and assesses them. Note: This area is subject to ongoing review and the workgroup is seeking implementer feedback on its use (see link at bottom of page).
     *
     * @param \TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType $case
     * @return self
     */
    public function setCase(?\TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType $case = null)
    {
        $this->case = $case;
        return $this;
    }


}

