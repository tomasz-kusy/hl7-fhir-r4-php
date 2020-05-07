<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConsentType
 *
 * A record of a healthcare consumer’s choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Consent
 */
class ConsentType extends DomainResourceType
{

    /**
     * Unique identifier for this copy of the Consent Statement.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Indicates the current state of this consent.
     *
     * @var \TKusy\Hl7FhirR4\ConsentStateType $status
     */
    private $status = null;

    /**
     * A selector of the type of consent being presented: ADR, Privacy, Treatment, Research. This list is now extensible.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $scope
     */
    private $scope = null;

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * When this Consent was issued / created / indexed.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $dateTime
     */
    private $dateTime = null;

    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $performer
     */
    private $performer = [
        
    ];

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $organization
     */
    private $organization = [
        
    ];

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $sourceAttachment
     */
    private $sourceAttachment = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $sourceReference
     */
    private $sourceReference = null;

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @var \TKusy\Hl7FhirR4\ConsentPolicyType[] $policy
     */
    private $policy = [
        
    ];

    /**
     * A reference to the specific base computable regulation or policy.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $policyRule
     */
    private $policyRule = null;

    /**
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @var \TKusy\Hl7FhirR4\ConsentVerificationType[] $verification
     */
    private $verification = [
        
    ];

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @var \TKusy\Hl7FhirR4\ConsentProvisionType $provision
     */
    private $provision = null;

    /**
     * Adds as identifier
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Unique identifier for this copy of the Consent Statement.
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
     * Unique identifier for this copy of the Consent Statement.
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
     * Unique identifier for this copy of the Consent Statement.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the current state of this consent.
     *
     * @return \TKusy\Hl7FhirR4\ConsentStateType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the current state of this consent.
     *
     * @param \TKusy\Hl7FhirR4\ConsentStateType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ConsentStateType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as scope
     *
     * A selector of the type of consent being presented: ADR, Privacy, Treatment, Research. This list is now extensible.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * A selector of the type of consent being presented: ADR, Privacy, Treatment, Research. This list is now extensible.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $scope
     * @return self
     */
    public function setScope(\TKusy\Hl7FhirR4\CodeableConceptType $scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Adds as category
     *
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * When this Consent was issued / created / indexed.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * When this Consent was issued / created / indexed.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $dateTime
     * @return self
     */
    public function setDateTime(\TKusy\Hl7FhirR4\DateTimeType $dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    public function addToPerformer(\TKusy\Hl7FhirR4\ReferenceType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformer($index)
    {
        return isset($this->performer[$index]);
    }

    /**
     * unset performer
     *
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformer($index)
    {
        unset($this->performer[$index]);
    }

    /**
     * Gets as performer
     *
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as organization
     *
     * The organization that manages the consent, and the framework within which it is executed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $organization
     */
    public function addToOrganization(\TKusy\Hl7FhirR4\ReferenceType $organization)
    {
        $this->organization[] = $organization;
        return $this;
    }

    /**
     * isset organization
     *
     * The organization that manages the consent, and the framework within which it is executed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganization($index)
    {
        return isset($this->organization[$index]);
    }

    /**
     * unset organization
     *
     * The organization that manages the consent, and the framework within which it is executed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganization($index)
    {
        unset($this->organization[$index]);
    }

    /**
     * Gets as organization
     *
     * The organization that manages the consent, and the framework within which it is executed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * The organization that manages the consent, and the framework within which it is executed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $organization
     * @return self
     */
    public function setOrganization(array $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as sourceAttachment
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getSourceAttachment()
    {
        return $this->sourceAttachment;
    }

    /**
     * Sets a new sourceAttachment
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $sourceAttachment
     * @return self
     */
    public function setSourceAttachment(\TKusy\Hl7FhirR4\AttachmentType $sourceAttachment)
    {
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * Gets as sourceReference
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * Sets a new sourceReference
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $sourceReference
     * @return self
     */
    public function setSourceReference(\TKusy\Hl7FhirR4\ReferenceType $sourceReference)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * Adds as policy
     *
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ConsentPolicyType $policy
     */
    public function addToPolicy(\TKusy\Hl7FhirR4\ConsentPolicyType $policy)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * isset policy
     *
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @return \TKusy\Hl7FhirR4\ConsentPolicyType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param \TKusy\Hl7FhirR4\ConsentPolicyType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Gets as policyRule
     *
     * A reference to the specific base computable regulation or policy.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPolicyRule()
    {
        return $this->policyRule;
    }

    /**
     * Sets a new policyRule
     *
     * A reference to the specific base computable regulation or policy.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $policyRule
     * @return self
     */
    public function setPolicyRule(\TKusy\Hl7FhirR4\CodeableConceptType $policyRule)
    {
        $this->policyRule = $policyRule;
        return $this;
    }

    /**
     * Adds as verification
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ConsentVerificationType $verification
     */
    public function addToVerification(\TKusy\Hl7FhirR4\ConsentVerificationType $verification)
    {
        $this->verification[] = $verification;
        return $this;
    }

    /**
     * isset verification
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerification($index)
    {
        return isset($this->verification[$index]);
    }

    /**
     * unset verification
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerification($index)
    {
        unset($this->verification[$index]);
    }

    /**
     * Gets as verification
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @return \TKusy\Hl7FhirR4\ConsentVerificationType[]
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @param \TKusy\Hl7FhirR4\ConsentVerificationType[] $verification
     * @return self
     */
    public function setVerification(array $verification)
    {
        $this->verification = $verification;
        return $this;
    }

    /**
     * Gets as provision
     *
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @return \TKusy\Hl7FhirR4\ConsentProvisionType
     */
    public function getProvision()
    {
        return $this->provision;
    }

    /**
     * Sets a new provision
     *
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @param \TKusy\Hl7FhirR4\ConsentProvisionType $provision
     * @return self
     */
    public function setProvision(\TKusy\Hl7FhirR4\ConsentProvisionType $provision)
    {
        $this->provision = $provision;
        return $this;
    }


}

