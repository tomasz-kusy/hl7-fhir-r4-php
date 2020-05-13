<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MolecularSequenceType
 *
 * Raw data describing a biological sequence.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MolecularSequence
 */
class MolecularSequenceType extends DomainResourceType
{

    /**
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @var \TKusy\Hl7Fhir\R4\SequenceTypeType $type
     */
    private $type = null;

    /**
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $coordinateSystem
     */
    private $coordinateSystem = null;

    /**
     * The patient whose sequencing results are described by this resource.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * Specimen used for sequencing.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $specimen
     */
    private $specimen = null;

    /**
     * The method for sequencing, for example, chip information.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $device
     */
    private $device = null;

    /**
     * The organization or lab that should be responsible for this result.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $performer
     */
    private $performer = null;

    /**
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     *
     * @var \TKusy\Hl7Fhir\R4\MolecularSequenceReferenceSeqType $referenceSeq
     */
    private $referenceSeq = null;

    /**
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.) It can represent some complex mutation or segment variation with the assist of CIGAR string.
     *
     * @var \TKusy\Hl7Fhir\R4\MolecularSequenceVariantType[] $variant
     */
    private $variant = null;

    /**
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall start from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $observedSeq
     */
    private $observedSeq = null;

    /**
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @var \TKusy\Hl7Fhir\R4\MolecularSequenceQualityType[] $quality
     */
    private $quality = null;

    /**
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $readCoverage
     */
    private $readCoverage = null;

    /**
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     *
     * @var \TKusy\Hl7Fhir\R4\MolecularSequenceRepositoryType[] $repository
     */
    private $repository = null;

    /**
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $pointer
     */
    private $pointer = null;

    /**
     * Information about chromosome structure variation.
     *
     * @var \TKusy\Hl7Fhir\R4\MolecularSequenceStructureVariantType[] $structureVariant
     */
    private $structureVariant = null;

    /**
     * Adds as identifier
     *
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
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
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
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
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @return \TKusy\Hl7Fhir\R4\SequenceTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @param \TKusy\Hl7Fhir\R4\SequenceTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\SequenceTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as coordinateSystem
     *
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getCoordinateSystem()
    {
        return $this->coordinateSystem;
    }

    /**
     * Sets a new coordinateSystem
     *
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $coordinateSystem
     * @return self
     */
    public function setCoordinateSystem(\TKusy\Hl7Fhir\R4\IntegerType $coordinateSystem)
    {
        $this->coordinateSystem = $coordinateSystem;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as specimen
     *
     * Specimen used for sequencing.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * Specimen used for sequencing.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $specimen
     * @return self
     */
    public function setSpecimen(\TKusy\Hl7Fhir\R4\ReferenceType $specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Gets as device
     *
     * The method for sequencing, for example, chip information.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The method for sequencing, for example, chip information.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7Fhir\R4\ReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as performer
     *
     * The organization or lab that should be responsible for this result.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The organization or lab that should be responsible for this result.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $performer
     * @return self
     */
    public function setPerformer(\TKusy\Hl7Fhir\R4\ReferenceType $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as referenceSeq
     *
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     *
     * @return \TKusy\Hl7Fhir\R4\MolecularSequenceReferenceSeqType
     */
    public function getReferenceSeq()
    {
        return $this->referenceSeq;
    }

    /**
     * Sets a new referenceSeq
     *
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     *
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceReferenceSeqType $referenceSeq
     * @return self
     */
    public function setReferenceSeq(\TKusy\Hl7Fhir\R4\MolecularSequenceReferenceSeqType $referenceSeq)
    {
        $this->referenceSeq = $referenceSeq;
        return $this;
    }

    /**
     * Adds as variant
     *
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.) It can represent some complex mutation or segment variation with the assist of CIGAR string.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceVariantType $variant
     */
    public function addToVariant(\TKusy\Hl7Fhir\R4\MolecularSequenceVariantType $variant)
    {
        $this->variant[] = $variant;
        return $this;
    }

    /**
     * isset variant
     *
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.) It can represent some complex mutation or segment variation with the assist of CIGAR string.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariant($index)
    {
        return isset($this->variant[$index]);
    }

    /**
     * unset variant
     *
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.) It can represent some complex mutation or segment variation with the assist of CIGAR string.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariant($index)
    {
        unset($this->variant[$index]);
    }

    /**
     * Gets as variant
     *
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.) It can represent some complex mutation or segment variation with the assist of CIGAR string.
     *
     * @return \TKusy\Hl7Fhir\R4\MolecularSequenceVariantType[]
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Sets a new variant
     *
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.) It can represent some complex mutation or segment variation with the assist of CIGAR string.
     *
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceVariantType[] $variant
     * @return self
     */
    public function setVariant(array $variant)
    {
        $this->variant = $variant;
        return $this;
    }

    /**
     * Gets as observedSeq
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall start from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getObservedSeq()
    {
        return $this->observedSeq;
    }

    /**
     * Sets a new observedSeq
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall start from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $observedSeq
     * @return self
     */
    public function setObservedSeq(\TKusy\Hl7Fhir\R4\StringType $observedSeq)
    {
        $this->observedSeq = $observedSeq;
        return $this;
    }

    /**
     * Adds as quality
     *
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceQualityType $quality
     */
    public function addToQuality(\TKusy\Hl7Fhir\R4\MolecularSequenceQualityType $quality)
    {
        $this->quality[] = $quality;
        return $this;
    }

    /**
     * isset quality
     *
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuality($index)
    {
        return isset($this->quality[$index]);
    }

    /**
     * unset quality
     *
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuality($index)
    {
        unset($this->quality[$index]);
    }

    /**
     * Gets as quality
     *
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @return \TKusy\Hl7Fhir\R4\MolecularSequenceQualityType[]
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Sets a new quality
     *
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceQualityType[] $quality
     * @return self
     */
    public function setQuality(array $quality)
    {
        $this->quality = $quality;
        return $this;
    }

    /**
     * Gets as readCoverage
     *
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getReadCoverage()
    {
        return $this->readCoverage;
    }

    /**
     * Sets a new readCoverage
     *
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $readCoverage
     * @return self
     */
    public function setReadCoverage(\TKusy\Hl7Fhir\R4\IntegerType $readCoverage)
    {
        $this->readCoverage = $readCoverage;
        return $this;
    }

    /**
     * Adds as repository
     *
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceRepositoryType $repository
     */
    public function addToRepository(\TKusy\Hl7Fhir\R4\MolecularSequenceRepositoryType $repository)
    {
        $this->repository[] = $repository;
        return $this;
    }

    /**
     * isset repository
     *
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRepository($index)
    {
        return isset($this->repository[$index]);
    }

    /**
     * unset repository
     *
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRepository($index)
    {
        unset($this->repository[$index]);
    }

    /**
     * Gets as repository
     *
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     *
     * @return \TKusy\Hl7Fhir\R4\MolecularSequenceRepositoryType[]
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Sets a new repository
     *
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     *
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceRepositoryType[] $repository
     * @return self
     */
    public function setRepository(array $repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * Adds as pointer
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $pointer
     */
    public function addToPointer(\TKusy\Hl7Fhir\R4\ReferenceType $pointer)
    {
        $this->pointer[] = $pointer;
        return $this;
    }

    /**
     * isset pointer
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPointer($index)
    {
        return isset($this->pointer[$index]);
    }

    /**
     * unset pointer
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPointer($index)
    {
        unset($this->pointer[$index]);
    }

    /**
     * Gets as pointer
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * Sets a new pointer
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $pointer
     * @return self
     */
    public function setPointer(array $pointer)
    {
        $this->pointer = $pointer;
        return $this;
    }

    /**
     * Adds as structureVariant
     *
     * Information about chromosome structure variation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceStructureVariantType $structureVariant
     */
    public function addToStructureVariant(\TKusy\Hl7Fhir\R4\MolecularSequenceStructureVariantType $structureVariant)
    {
        $this->structureVariant[] = $structureVariant;
        return $this;
    }

    /**
     * isset structureVariant
     *
     * Information about chromosome structure variation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStructureVariant($index)
    {
        return isset($this->structureVariant[$index]);
    }

    /**
     * unset structureVariant
     *
     * Information about chromosome structure variation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStructureVariant($index)
    {
        unset($this->structureVariant[$index]);
    }

    /**
     * Gets as structureVariant
     *
     * Information about chromosome structure variation.
     *
     * @return \TKusy\Hl7Fhir\R4\MolecularSequenceStructureVariantType[]
     */
    public function getStructureVariant()
    {
        return $this->structureVariant;
    }

    /**
     * Sets a new structureVariant
     *
     * Information about chromosome structure variation.
     *
     * @param \TKusy\Hl7Fhir\R4\MolecularSequenceStructureVariantType[] $structureVariant
     * @return self
     */
    public function setStructureVariant(array $structureVariant)
    {
        $this->structureVariant = $structureVariant;
        return $this;
    }


}

