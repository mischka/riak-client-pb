<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : riak.proto
 */


namespace Riak\Client\ProtoBuf;

/**
 * Protobuf message : RpbSetBucketReq
 */
class RpbSetBucketReq extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * bucket required bytes = 1
     *
     * @var \Protobuf\Stream
     */
    protected $bucket = null;

    /**
     * props required message = 2
     *
     * @var \Riak\Client\ProtoBuf\RpbBucketProps
     */
    protected $props = null;

    /**
     * type optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $type = null;

    /**
     * Check if 'bucket' has a value
     *
     * @return bool
     */
    public function hasBucket()
    {
        return $this->bucket !== null;
    }

    /**
     * Get 'bucket' value
     *
     * @return \Protobuf\Stream
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Set 'bucket' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setBucket($value)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->bucket = $value;
    }

    /**
     * Check if 'props' has a value
     *
     * @return bool
     */
    public function hasProps()
    {
        return $this->props !== null;
    }

    /**
     * Get 'props' value
     *
     * @return \Riak\Client\ProtoBuf\RpbBucketProps
     */
    public function getProps()
    {
        return $this->props;
    }

    /**
     * Set 'props' value
     *
     * @param \Riak\Client\ProtoBuf\RpbBucketProps $value
     */
    public function setProps(\Riak\Client\ProtoBuf\RpbBucketProps $value)
    {
        $this->props = $value;
    }

    /**
     * Check if 'type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
        return $this->type !== null;
    }

    /**
     * Get 'type' value
     *
     * @return \Protobuf\Stream
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set 'type' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setType($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->type = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['bucket'])) {
            throw new \InvalidArgumentException('Field "bucket" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['props'])) {
            throw new \InvalidArgumentException('Field "props" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'type' => null
        ], $values);

        $message->setBucket($values['bucket']);
        $message->setProps($values['props']);
        $message->setType($values['type']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RpbSetBucketReq',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'bucket',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'props',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.RpbBucketProps'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->bucket === null) {
            throw new \UnexpectedValueException('Field "\\Riak\\Client\\ProtoBuf\\RpbSetBucketReq#bucket" (tag 1) is required but has no value.');
        }

        if ($this->props === null) {
            throw new \UnexpectedValueException('Field "\\Riak\\Client\\ProtoBuf\\RpbSetBucketReq#props" (tag 2) is required but has no value.');
        }

        if ($this->bucket !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeByteStream($stream, $this->bucket);
        }

        if ($this->props !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->props->serializedSize($sizeContext));
            $this->props->writeTo($context);
        }

        if ($this->type !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->type);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->bucket = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Riak\Client\ProtoBuf\RpbBucketProps();

                $this->props = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->type = $reader->readByteStream($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->bucket !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->bucket);
        }

        if ($this->props !== null) {
            $innerSize = $this->props->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->type !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->type);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->bucket = null;
        $this->props = null;
        $this->type = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Riak\Client\ProtoBuf\RpbSetBucketReq) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->bucket = ($message->bucket !== null) ? $message->bucket : $this->bucket;
        $this->props = ($message->props !== null) ? $message->props : $this->props;
        $this->type = ($message->type !== null) ? $message->type : $this->type;
    }


}

