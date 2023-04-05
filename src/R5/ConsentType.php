<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConsentType
 *
 * A record of a healthcare consumer’s choices or choices made on their behalf by a third party, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Consent
 */
class ConsentType extends DomainResourceType
{

    /**
     * Unique identifier for this copy of the Consent Statement.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the current state of this Consent resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentStateType $status
     */
    private $status = null;

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * The patient/healthcare practitioner or group of persons to whom this consent applies.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Date the consent instance was agreed to.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $date
     */
    private $date = null;

    /**
     * Effective period for this Consent Resource and all provisions unless specified in that provision.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $grantor
     */
    private $grantor = null;

    /**
     * The entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $grantee
     */
    private $grantee = null;

    /**
     * The actor that manages the consent through its lifecycle.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $manager
     */
    private $manager = null;

    /**
     * The actor that controls/enforces the access according to the consent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $controller
     */
    private $controller = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType[] $sourceAttachment
     */
    private $sourceAttachment = null;

    /**
     * A reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $sourceReference
     */
    private $sourceReference = null;

    /**
     * A set of codes that indicate the regulatory basis (if any) that this consent supports.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $regulatoryBasis
     */
    private $regulatoryBasis = null;

    /**
     * A Reference or URL used to uniquely identify the policy the organization will enforce for this Consent. This Reference or URL should be specific to the version of the policy and should be dereferencable to a computable policy of some form.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentPolicyBasisType $policyBasis
     */
    private $policyBasis = null;

    /**
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $policyText
     */
    private $policyText = null;

    /**
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentVerificationType[] $verification
     */
    private $verification = null;

    /**
     * Action to take - permit or deny - as default.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentProvisionTypeType $decision
     */
    private $decision = null;

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentProvisionType[] $provision
     */
    private $provision = null;

    /**
     * Adds as identifier
     *
     * Unique identifier for this copy of the Consent Statement.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the current state of this Consent resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentStateType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the current state of this Consent resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentStateType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ConsentStateType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient/healthcare practitioner or group of persons to whom this consent applies.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The patient/healthcare practitioner or group of persons to whom this consent applies.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as date
     *
     * Date the consent instance was agreed to.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date the consent instance was agreed to.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as period
     *
     * Effective period for this Consent Resource and all provisions unless specified in that provision.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Effective period for this Consent Resource and all provisions unless specified in that provision.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as grantor
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $grantor
     */
    public function addToGrantor(\TKusy\Hl7Fhir\R5\ReferenceType $grantor)
    {
        $this->grantor[] = $grantor;
        return $this;
    }

    /**
     * isset grantor
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGrantor($index)
    {
        return isset($this->grantor[$index]);
    }

    /**
     * unset grantor
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGrantor($index)
    {
        unset($this->grantor[$index]);
    }

    /**
     * Gets as grantor
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getGrantor()
    {
        return $this->grantor;
    }

    /**
     * Sets a new grantor
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $grantor
     * @return self
     */
    public function setGrantor(array $grantor = null)
    {
        $this->grantor = $grantor;
        return $this;
    }

    /**
     * Adds as grantee
     *
     * The entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $grantee
     */
    public function addToGrantee(\TKusy\Hl7Fhir\R5\ReferenceType $grantee)
    {
        $this->grantee[] = $grantee;
        return $this;
    }

    /**
     * isset grantee
     *
     * The entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGrantee($index)
    {
        return isset($this->grantee[$index]);
    }

    /**
     * unset grantee
     *
     * The entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGrantee($index)
    {
        unset($this->grantee[$index]);
    }

    /**
     * Gets as grantee
     *
     * The entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * Sets a new grantee
     *
     * The entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $grantee
     * @return self
     */
    public function setGrantee(array $grantee = null)
    {
        $this->grantee = $grantee;
        return $this;
    }

    /**
     * Adds as manager
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manager
     */
    public function addToManager(\TKusy\Hl7Fhir\R5\ReferenceType $manager)
    {
        $this->manager[] = $manager;
        return $this;
    }

    /**
     * isset manager
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManager($index)
    {
        return isset($this->manager[$index]);
    }

    /**
     * unset manager
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManager($index)
    {
        unset($this->manager[$index]);
    }

    /**
     * Gets as manager
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Sets a new manager
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $manager
     * @return self
     */
    public function setManager(array $manager = null)
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * Adds as controller
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $controller
     */
    public function addToController(\TKusy\Hl7Fhir\R5\ReferenceType $controller)
    {
        $this->controller[] = $controller;
        return $this;
    }

    /**
     * isset controller
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetController($index)
    {
        return isset($this->controller[$index]);
    }

    /**
     * unset controller
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetController($index)
    {
        unset($this->controller[$index]);
    }

    /**
     * Gets as controller
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Sets a new controller
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $controller
     * @return self
     */
    public function setController(array $controller = null)
    {
        $this->controller = $controller;
        return $this;
    }

    /**
     * Adds as sourceAttachment
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $sourceAttachment
     */
    public function addToSourceAttachment(\TKusy\Hl7Fhir\R5\AttachmentType $sourceAttachment)
    {
        $this->sourceAttachment[] = $sourceAttachment;
        return $this;
    }

    /**
     * isset sourceAttachment
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceAttachment($index)
    {
        return isset($this->sourceAttachment[$index]);
    }

    /**
     * unset sourceAttachment
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceAttachment($index)
    {
        unset($this->sourceAttachment[$index]);
    }

    /**
     * Gets as sourceAttachment
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType[]
     */
    public function getSourceAttachment()
    {
        return $this->sourceAttachment;
    }

    /**
     * Sets a new sourceAttachment
     *
     * The source on which this consent statement is based. The source might be a scanned original paper form.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType[] $sourceAttachment
     * @return self
     */
    public function setSourceAttachment(array $sourceAttachment = null)
    {
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * Adds as sourceReference
     *
     * A reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $sourceReference
     */
    public function addToSourceReference(\TKusy\Hl7Fhir\R5\ReferenceType $sourceReference)
    {
        $this->sourceReference[] = $sourceReference;
        return $this;
    }

    /**
     * isset sourceReference
     *
     * A reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceReference($index)
    {
        return isset($this->sourceReference[$index]);
    }

    /**
     * unset sourceReference
     *
     * A reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceReference($index)
    {
        unset($this->sourceReference[$index]);
    }

    /**
     * Gets as sourceReference
     *
     * A reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * Sets a new sourceReference
     *
     * A reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $sourceReference
     * @return self
     */
    public function setSourceReference(array $sourceReference = null)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * Adds as regulatoryBasis
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent supports.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $regulatoryBasis
     */
    public function addToRegulatoryBasis(\TKusy\Hl7Fhir\R5\CodeableConceptType $regulatoryBasis)
    {
        $this->regulatoryBasis[] = $regulatoryBasis;
        return $this;
    }

    /**
     * isset regulatoryBasis
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent supports.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegulatoryBasis($index)
    {
        return isset($this->regulatoryBasis[$index]);
    }

    /**
     * unset regulatoryBasis
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent supports.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegulatoryBasis($index)
    {
        unset($this->regulatoryBasis[$index]);
    }

    /**
     * Gets as regulatoryBasis
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent supports.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getRegulatoryBasis()
    {
        return $this->regulatoryBasis;
    }

    /**
     * Sets a new regulatoryBasis
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent supports.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $regulatoryBasis
     * @return self
     */
    public function setRegulatoryBasis(array $regulatoryBasis = null)
    {
        $this->regulatoryBasis = $regulatoryBasis;
        return $this;
    }

    /**
     * Gets as policyBasis
     *
     * A Reference or URL used to uniquely identify the policy the organization will enforce for this Consent. This Reference or URL should be specific to the version of the policy and should be dereferencable to a computable policy of some form.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentPolicyBasisType
     */
    public function getPolicyBasis()
    {
        return $this->policyBasis;
    }

    /**
     * Sets a new policyBasis
     *
     * A Reference or URL used to uniquely identify the policy the organization will enforce for this Consent. This Reference or URL should be specific to the version of the policy and should be dereferencable to a computable policy of some form.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentPolicyBasisType $policyBasis
     * @return self
     */
    public function setPolicyBasis(?\TKusy\Hl7Fhir\R5\ConsentPolicyBasisType $policyBasis = null)
    {
        $this->policyBasis = $policyBasis;
        return $this;
    }

    /**
     * Adds as policyText
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $policyText
     */
    public function addToPolicyText(\TKusy\Hl7Fhir\R5\ReferenceType $policyText)
    {
        $this->policyText[] = $policyText;
        return $this;
    }

    /**
     * isset policyText
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicyText($index)
    {
        return isset($this->policyText[$index]);
    }

    /**
     * unset policyText
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicyText($index)
    {
        unset($this->policyText[$index]);
    }

    /**
     * Gets as policyText
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPolicyText()
    {
        return $this->policyText;
    }

    /**
     * Sets a new policyText
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $policyText
     * @return self
     */
    public function setPolicyText(array $policyText = null)
    {
        $this->policyText = $policyText;
        return $this;
    }

    /**
     * Adds as verification
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConsentVerificationType $verification
     */
    public function addToVerification(\TKusy\Hl7Fhir\R5\ConsentVerificationType $verification)
    {
        $this->verification[] = $verification;
        return $this;
    }

    /**
     * isset verification
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was verified with the patient, his/her family or another authorized person.
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
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was verified with the patient, his/her family or another authorized person.
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
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentVerificationType[]
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was verified with the patient, his/her family or another authorized person.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentVerificationType[] $verification
     * @return self
     */
    public function setVerification(array $verification = null)
    {
        $this->verification = $verification;
        return $this;
    }

    /**
     * Gets as decision
     *
     * Action to take - permit or deny - as default.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentProvisionTypeType
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Sets a new decision
     *
     * Action to take - permit or deny - as default.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentProvisionTypeType $decision
     * @return self
     */
    public function setDecision(?\TKusy\Hl7Fhir\R5\ConsentProvisionTypeType $decision = null)
    {
        $this->decision = $decision;
        return $this;
    }

    /**
     * Adds as provision
     *
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConsentProvisionType $provision
     */
    public function addToProvision(\TKusy\Hl7Fhir\R5\ConsentProvisionType $provision)
    {
        $this->provision[] = $provision;
        return $this;
    }

    /**
     * isset provision
     *
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProvision($index)
    {
        return isset($this->provision[$index]);
    }

    /**
     * unset provision
     *
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProvision($index)
    {
        unset($this->provision[$index]);
    }

    /**
     * Gets as provision
     *
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentProvisionType[]
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
     * @param \TKusy\Hl7Fhir\R5\ConsentProvisionType[] $provision
     * @return self
     */
    public function setProvision(array $provision = null)
    {
        $this->provision = $provision;
        return $this;
    }


}

