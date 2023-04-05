<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContractType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Contract
 */
class ContractType extends DomainResourceType
{

    /**
     * Unique identifier for this Contract or a derivative that references a Source Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Canonical identifier for this contract, represented as a URI (globally unique).
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * An edition identifier used for business purposes to label business significant variants.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $legalState
     */
    private $legalState = null;

    /**
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $contentDerivative
     */
    private $contentDerivative = null;

    /**
     * When this Contract was issued.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $issued
     */
    private $issued = null;

    /**
     * Relevant time or time-period when this Contract is applicable.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $applies
     */
    private $applies = null;

    /**
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $expirationType
     */
    private $expirationType = null;

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $authority
     */
    private $authority = null;

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $domain
     */
    private $domain = null;

    /**
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $site
     */
    private $site = null;

    /**
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A more detailed or qualifying explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $subtitle
     */
    private $subtitle = null;

    /**
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $alias
     */
    private $alias = null;

    /**
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $scope
     */
    private $scope = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $topicCodeableConcept
     */
    private $topicCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $topicReference
     */
    private $topicReference = null;

    /**
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state. Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subType
     */
    private $subType = null;

    /**
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractContentDefinitionType $contentDefinition
     */
    private $contentDefinition = null;

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractTermType[] $term
     */
    private $term = null;

    /**
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract. The Provenance.entity indicates the target that was changed in the update (see [Provenance.entity](provenance-definitions.html#Provenance.entity)).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     */
    private $relevantHistory = null;

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractSignerType[] $signer
     */
    private $signer = null;

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractFriendlyType[] $friendly
     */
    private $friendly = null;

    /**
     * List of Legal expressions or representations of this Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractLegalType[] $legal
     */
    private $legal = null;

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractRuleType[] $rule
     */
    private $rule = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $legallyBindingAttachment
     */
    private $legallyBindingAttachment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $legallyBindingReference
     */
    private $legallyBindingReference = null;

    /**
     * Adds as identifier
     *
     * Unique identifier for this Contract or a derivative that references a Source Contract.
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
     * Unique identifier for this Contract or a derivative that references a Source Contract.
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
     * Unique identifier for this Contract or a derivative that references a Source Contract.
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
     * Unique identifier for this Contract or a derivative that references a Source Contract.
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
     * Unique identifier for this Contract or a derivative that references a Source Contract.
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
     * Gets as url
     *
     * Canonical identifier for this contract, represented as a URI (globally unique).
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * Canonical identifier for this contract, represented as a URI (globally unique).
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\UriType $url = null)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as version
     *
     * An edition identifier used for business purposes to label business significant variants.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * An edition identifier used for business purposes to label business significant variants.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the resource instance.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractResourceStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the resource instance.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\ContractResourceStatusCodesType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as legalState
     *
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getLegalState()
    {
        return $this->legalState;
    }

    /**
     * Sets a new legalState
     *
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $legalState
     * @return self
     */
    public function setLegalState(?\TKusy\Hl7Fhir\R5\CodeableConceptType $legalState = null)
    {
        $this->legalState = $legalState;
        return $this;
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(?\TKusy\Hl7Fhir\R5\ReferenceType $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(?\TKusy\Hl7Fhir\R5\UriType $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Gets as contentDerivative
     *
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getContentDerivative()
    {
        return $this->contentDerivative;
    }

    /**
     * Sets a new contentDerivative
     *
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $contentDerivative
     * @return self
     */
    public function setContentDerivative(?\TKusy\Hl7Fhir\R5\CodeableConceptType $contentDerivative = null)
    {
        $this->contentDerivative = $contentDerivative;
        return $this;
    }

    /**
     * Gets as issued
     *
     * When this Contract was issued.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Sets a new issued
     *
     * When this Contract was issued.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $issued
     * @return self
     */
    public function setIssued(?\TKusy\Hl7Fhir\R5\DateTimeType $issued = null)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Gets as applies
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * Sets a new applies
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $applies
     * @return self
     */
    public function setApplies(?\TKusy\Hl7Fhir\R5\PeriodType $applies = null)
    {
        $this->applies = $applies;
        return $this;
    }

    /**
     * Gets as expirationType
     *
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getExpirationType()
    {
        return $this->expirationType;
    }

    /**
     * Sets a new expirationType
     *
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $expirationType
     * @return self
     */
    public function setExpirationType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $expirationType = null)
    {
        $this->expirationType = $expirationType;
        return $this;
    }

    /**
     * Adds as subject
     *
     * The target entity impacted by or of interest to parties to the agreement.
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
     * The target entity impacted by or of interest to parties to the agreement.
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
     * The target entity impacted by or of interest to parties to the agreement.
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
     * The target entity impacted by or of interest to parties to the agreement.
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
     * The target entity impacted by or of interest to parties to the agreement.
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
     * Adds as authority
     *
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $authority
     */
    public function addToAuthority(\TKusy\Hl7Fhir\R5\ReferenceType $authority)
    {
        $this->authority[] = $authority;
        return $this;
    }

    /**
     * isset authority
     *
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthority($index)
    {
        return isset($this->authority[$index]);
    }

    /**
     * unset authority
     *
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthority($index)
    {
        unset($this->authority[$index]);
    }

    /**
     * Gets as authority
     *
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Sets a new authority
     *
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $authority
     * @return self
     */
    public function setAuthority(array $authority = null)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Adds as domain
     *
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $domain
     */
    public function addToDomain(\TKusy\Hl7Fhir\R5\ReferenceType $domain)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * isset domain
     *
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomain($index)
    {
        return isset($this->domain[$index]);
    }

    /**
     * unset domain
     *
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomain($index)
    {
        unset($this->domain[$index]);
    }

    /**
     * Gets as domain
     *
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $domain
     * @return self
     */
    public function setDomain(array $domain = null)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Adds as site
     *
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $site
     */
    public function addToSite(\TKusy\Hl7Fhir\R5\ReferenceType $site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSite($index)
    {
        return isset($this->site[$index]);
    }

    /**
     * unset site
     *
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSite($index)
    {
        unset($this->site[$index]);
    }

    /**
     * Gets as site
     *
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $site
     * @return self
     */
    public function setSite(array $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as subtitle
     *
     * A more detailed or qualifying explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * A more detailed or qualifying explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $subtitle
     * @return self
     */
    public function setSubtitle(?\TKusy\Hl7Fhir\R5\StringType $subtitle = null)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Adds as alias
     *
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $alias
     */
    public function addToAlias(\TKusy\Hl7Fhir\R5\StringType $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * isset alias
     *
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlias($index)
    {
        return isset($this->alias[$index]);
    }

    /**
     * unset alias
     *
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlias($index)
    {
        unset($this->alias[$index]);
    }

    /**
     * Gets as alias
     *
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $alias
     * @return self
     */
    public function setAlias(array $alias = null)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Gets as author
     *
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as scope
     *
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $scope
     * @return self
     */
    public function setScope(?\TKusy\Hl7Fhir\R5\CodeableConceptType $scope = null)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Gets as topicCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTopicCodeableConcept()
    {
        return $this->topicCodeableConcept;
    }

    /**
     * Sets a new topicCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $topicCodeableConcept
     * @return self
     */
    public function setTopicCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $topicCodeableConcept = null)
    {
        $this->topicCodeableConcept = $topicCodeableConcept;
        return $this;
    }

    /**
     * Gets as topicReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getTopicReference()
    {
        return $this->topicReference;
    }

    /**
     * Sets a new topicReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $topicReference
     * @return self
     */
    public function setTopicReference(?\TKusy\Hl7Fhir\R5\ReferenceType $topicReference = null)
    {
        $this->topicReference = $topicReference;
        return $this;
    }

    /**
     * Gets as type
     *
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state. Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
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
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state. Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
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
     * Adds as subType
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subType
     */
    public function addToSubType(\TKusy\Hl7Fhir\R5\CodeableConceptType $subType)
    {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * isset subType
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubType($index)
    {
        return isset($this->subType[$index]);
    }

    /**
     * unset subType
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubType($index)
    {
        unset($this->subType[$index]);
    }

    /**
     * Gets as subType
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sets a new subType
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subType
     * @return self
     */
    public function setSubType(array $subType = null)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * Gets as contentDefinition
     *
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractContentDefinitionType
     */
    public function getContentDefinition()
    {
        return $this->contentDefinition;
    }

    /**
     * Sets a new contentDefinition
     *
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractContentDefinitionType $contentDefinition
     * @return self
     */
    public function setContentDefinition(?\TKusy\Hl7Fhir\R5\ContractContentDefinitionType $contentDefinition = null)
    {
        $this->contentDefinition = $contentDefinition;
        return $this;
    }

    /**
     * Adds as term
     *
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContractTermType $term
     */
    public function addToTerm(\TKusy\Hl7Fhir\R5\ContractTermType $term)
    {
        $this->term[] = $term;
        return $this;
    }

    /**
     * isset term
     *
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerm($index)
    {
        return isset($this->term[$index]);
    }

    /**
     * unset term
     *
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerm($index)
    {
        unset($this->term[$index]);
    }

    /**
     * Gets as term
     *
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractTermType[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractTermType[] $term
     * @return self
     */
    public function setTerm(array $term = null)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInfo($index)
    {
        return isset($this->supportingInfo[$index]);
    }

    /**
     * unset supportingInfo
     *
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInfo($index)
    {
        unset($this->supportingInfo[$index]);
    }

    /**
     * Gets as supportingInfo
     *
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo = null)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as relevantHistory
     *
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract. The Provenance.entity indicates the target that was changed in the update (see [Provenance.entity](provenance-definitions.html#Provenance.entity)).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $relevantHistory
     */
    public function addToRelevantHistory(\TKusy\Hl7Fhir\R5\ReferenceType $relevantHistory)
    {
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * isset relevantHistory
     *
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract. The Provenance.entity indicates the target that was changed in the update (see [Provenance.entity](provenance-definitions.html#Provenance.entity)).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelevantHistory($index)
    {
        return isset($this->relevantHistory[$index]);
    }

    /**
     * unset relevantHistory
     *
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract. The Provenance.entity indicates the target that was changed in the update (see [Provenance.entity](provenance-definitions.html#Provenance.entity)).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelevantHistory($index)
    {
        unset($this->relevantHistory[$index]);
    }

    /**
     * Gets as relevantHistory
     *
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract. The Provenance.entity indicates the target that was changed in the update (see [Provenance.entity](provenance-definitions.html#Provenance.entity)).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * Sets a new relevantHistory
     *
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract. The Provenance.entity indicates the target that was changed in the update (see [Provenance.entity](provenance-definitions.html#Provenance.entity)).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     * @return self
     */
    public function setRelevantHistory(array $relevantHistory = null)
    {
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /**
     * Adds as signer
     *
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContractSignerType $signer
     */
    public function addToSigner(\TKusy\Hl7Fhir\R5\ContractSignerType $signer)
    {
        $this->signer[] = $signer;
        return $this;
    }

    /**
     * isset signer
     *
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigner($index)
    {
        return isset($this->signer[$index]);
    }

    /**
     * unset signer
     *
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigner($index)
    {
        unset($this->signer[$index]);
    }

    /**
     * Gets as signer
     *
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractSignerType[]
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Sets a new signer
     *
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractSignerType[] $signer
     * @return self
     */
    public function setSigner(array $signer = null)
    {
        $this->signer = $signer;
        return $this;
    }

    /**
     * Adds as friendly
     *
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContractFriendlyType $friendly
     */
    public function addToFriendly(\TKusy\Hl7Fhir\R5\ContractFriendlyType $friendly)
    {
        $this->friendly[] = $friendly;
        return $this;
    }

    /**
     * isset friendly
     *
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFriendly($index)
    {
        return isset($this->friendly[$index]);
    }

    /**
     * unset friendly
     *
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFriendly($index)
    {
        unset($this->friendly[$index]);
    }

    /**
     * Gets as friendly
     *
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractFriendlyType[]
     */
    public function getFriendly()
    {
        return $this->friendly;
    }

    /**
     * Sets a new friendly
     *
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractFriendlyType[] $friendly
     * @return self
     */
    public function setFriendly(array $friendly = null)
    {
        $this->friendly = $friendly;
        return $this;
    }

    /**
     * Adds as legal
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContractLegalType $legal
     */
    public function addToLegal(\TKusy\Hl7Fhir\R5\ContractLegalType $legal)
    {
        $this->legal[] = $legal;
        return $this;
    }

    /**
     * isset legal
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegal($index)
    {
        return isset($this->legal[$index]);
    }

    /**
     * unset legal
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegal($index)
    {
        unset($this->legal[$index]);
    }

    /**
     * Gets as legal
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractLegalType[]
     */
    public function getLegal()
    {
        return $this->legal;
    }

    /**
     * Sets a new legal
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractLegalType[] $legal
     * @return self
     */
    public function setLegal(array $legal = null)
    {
        $this->legal = $legal;
        return $this;
    }

    /**
     * Adds as rule
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContractRuleType $rule
     */
    public function addToRule(\TKusy\Hl7Fhir\R5\ContractRuleType $rule)
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * isset rule
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRule($index)
    {
        return isset($this->rule[$index]);
    }

    /**
     * unset rule
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRule($index)
    {
        unset($this->rule[$index]);
    }

    /**
     * Gets as rule
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractRuleType[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractRuleType[] $rule
     * @return self
     */
    public function setRule(array $rule = null)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Gets as legallyBindingAttachment
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getLegallyBindingAttachment()
    {
        return $this->legallyBindingAttachment;
    }

    /**
     * Sets a new legallyBindingAttachment
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $legallyBindingAttachment
     * @return self
     */
    public function setLegallyBindingAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $legallyBindingAttachment = null)
    {
        $this->legallyBindingAttachment = $legallyBindingAttachment;
        return $this;
    }

    /**
     * Gets as legallyBindingReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLegallyBindingReference()
    {
        return $this->legallyBindingReference;
    }

    /**
     * Sets a new legallyBindingReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $legallyBindingReference
     * @return self
     */
    public function setLegallyBindingReference(?\TKusy\Hl7Fhir\R5\ReferenceType $legallyBindingReference = null)
    {
        $this->legallyBindingReference = $legallyBindingReference;
        return $this;
    }


}

