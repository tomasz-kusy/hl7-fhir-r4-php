<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CompositionType
 *
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Composition
 */
class CompositionType extends DomainResourceType
{

    /**
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     *
     * @var \TKusy\Hl7FhirR4\CompositionStatusType $status
     */
    private $status = null;

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $author
     */
    private $author = [
        
    ];

    /**
     * Official human-readable label for the composition.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * The code specifying the level of confidentiality of the Composition.
     *
     * @var \TKusy\Hl7FhirR4\VConfidentialityClassificationType $confidentiality
     */
    private $confidentiality = null;

    /**
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @var \TKusy\Hl7FhirR4\CompositionAttesterType[] $attester
     */
    private $attester = [
        
    ];

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $custodian
     */
    private $custodian = null;

    /**
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @var \TKusy\Hl7FhirR4\CompositionRelatesToType[] $relatesTo
     */
    private $relatesTo = [
        
    ];

    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @var \TKusy\Hl7FhirR4\CompositionEventType[] $event
     */
    private $event = [
        
    ];

    /**
     * The root of the sections that make up the composition.
     *
     * @var \TKusy\Hl7FhirR4\CompositionSectionType[] $section
     */
    private $section = [
        
    ];

    /**
     * Gets as identifier
     *
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     *
     * @return \TKusy\Hl7FhirR4\CompositionStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     *
     * @param \TKusy\Hl7FhirR4\CompositionStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CompositionStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as category
     *
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * Gets as subject
     *
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * Describes the clinical encounter or type of care this documentation is associated with.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * Describes the clinical encounter or type of care this documentation is associated with.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as date
     *
     * The composition editing time, when the composition was last logically changed by the author.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The composition editing time, when the composition was last logically changed by the author.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as author
     *
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     */
    public function addToAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $author
     * @return self
     */
    public function setAuthor(array $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as title
     *
     * Official human-readable label for the composition.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Official human-readable label for the composition.
     *
     * @param \TKusy\Hl7FhirR4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7FhirR4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as confidentiality
     *
     * The code specifying the level of confidentiality of the Composition.
     *
     * @return \TKusy\Hl7FhirR4\VConfidentialityClassificationType
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * Sets a new confidentiality
     *
     * The code specifying the level of confidentiality of the Composition.
     *
     * @param \TKusy\Hl7FhirR4\VConfidentialityClassificationType $confidentiality
     * @return self
     */
    public function setConfidentiality(\TKusy\Hl7FhirR4\VConfidentialityClassificationType $confidentiality)
    {
        $this->confidentiality = $confidentiality;
        return $this;
    }

    /**
     * Adds as attester
     *
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CompositionAttesterType $attester
     */
    public function addToAttester(\TKusy\Hl7FhirR4\CompositionAttesterType $attester)
    {
        $this->attester[] = $attester;
        return $this;
    }

    /**
     * isset attester
     *
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttester($index)
    {
        return isset($this->attester[$index]);
    }

    /**
     * unset attester
     *
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttester($index)
    {
        unset($this->attester[$index]);
    }

    /**
     * Gets as attester
     *
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @return \TKusy\Hl7FhirR4\CompositionAttesterType[]
     */
    public function getAttester()
    {
        return $this->attester;
    }

    /**
     * Sets a new attester
     *
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @param \TKusy\Hl7FhirR4\CompositionAttesterType[] $attester
     * @return self
     */
    public function setAttester(array $attester)
    {
        $this->attester = $attester;
        return $this;
    }

    /**
     * Gets as custodian
     *
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Sets a new custodian
     *
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $custodian
     * @return self
     */
    public function setCustodian(\TKusy\Hl7FhirR4\ReferenceType $custodian)
    {
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * Adds as relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CompositionRelatesToType $relatesTo
     */
    public function addToRelatesTo(\TKusy\Hl7FhirR4\CompositionRelatesToType $relatesTo)
    {
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * isset relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatesTo($index)
    {
        return isset($this->relatesTo[$index]);
    }

    /**
     * unset relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatesTo($index)
    {
        unset($this->relatesTo[$index]);
    }

    /**
     * Gets as relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @return \TKusy\Hl7FhirR4\CompositionRelatesToType[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * Sets a new relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @param \TKusy\Hl7FhirR4\CompositionRelatesToType[] $relatesTo
     * @return self
     */
    public function setRelatesTo(array $relatesTo)
    {
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Adds as event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CompositionEventType $event
     */
    public function addToEvent(\TKusy\Hl7FhirR4\CompositionEventType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @return \TKusy\Hl7FhirR4\CompositionEventType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @param \TKusy\Hl7FhirR4\CompositionEventType[] $event
     * @return self
     */
    public function setEvent(array $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as section
     *
     * The root of the sections that make up the composition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CompositionSectionType $section
     */
    public function addToSection(\TKusy\Hl7FhirR4\CompositionSectionType $section)
    {
        $this->section[] = $section;
        return $this;
    }

    /**
     * isset section
     *
     * The root of the sections that make up the composition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSection($index)
    {
        return isset($this->section[$index]);
    }

    /**
     * unset section
     *
     * The root of the sections that make up the composition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSection($index)
    {
        unset($this->section[$index]);
    }

    /**
     * Gets as section
     *
     * The root of the sections that make up the composition.
     *
     * @return \TKusy\Hl7FhirR4\CompositionSectionType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * The root of the sections that make up the composition.
     *
     * @param \TKusy\Hl7FhirR4\CompositionSectionType[] $section
     * @return self
     */
    public function setSection(array $section)
    {
        $this->section = $section;
        return $this;
    }


}

