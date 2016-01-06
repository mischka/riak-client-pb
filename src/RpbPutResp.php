<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : riak.proto
 */


namespace Riak\Client\ProtoBuf;

/**
 * Protobuf message : RpbPutResp
 */
class RpbPutResp extends \Protobuf\AbstractMessage
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
     * content repeated message = 1
     *
     * @var \Protobuf\Collection<\Riak\Client\ProtoBuf\RpbContent>
     */
    protected $content = null;

    /**
     * vclock optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $vclock = null;

    /**
     * key optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $key = null;

    /**
     * Check if 'content' has a value
     *
     * @return bool
     */
    public function hasContentList()
    {
        return $this->content !== null;
    }

    /**
     * Get 'content' value
     *
     * @return \Protobuf\Collection<\Riak\Client\ProtoBuf\RpbContent>
     */
    public function getContentList()
    {
        return $this->content;
    }

    /**
     * Set 'content' value
     *
     * @param \Protobuf\Collection<\Riak\Client\ProtoBuf\RpbContent> $value
     */
    public function setContentList(\Protobuf\Collection $value = null)
    {
        $this->content = $value;
    }

    /**
     * Add a new element to 'content'
     *
     * @param \Riak\Client\ProtoBuf\RpbContent $value
     */
    public function addContent(\Riak\Client\ProtoBuf\RpbContent $value)
    {
        if ($this->content === null) {
            $this->content = new \Protobuf\MessageCollection();
        }

        $this->content->add($value);
    }

    /**
     * Check if 'vclock' has a value
     *
     * @return bool
     */
    public function hasVclock()
    {
        return $this->vclock !== null;
    }

    /**
     * Get 'vclock' value
     *
     * @return \Protobuf\Stream
     */
    public function getVclock()
    {
        return $this->vclock;
    }

    /**
     * Set 'vclock' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setVclock($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->vclock = $value;
    }

    /**
     * Check if 'key' has a value
     *
     * @return bool
     */
    public function hasKey()
    {
        return $this->key !== null;
    }

    /**
     * Get 'key' value
     *
     * @return \Protobuf\Stream
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set 'key' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setKey($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->key = $value;
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
        $message = new self();
        $values  = array_merge([
            'content' => [],
            'vclock' => null,
            'key' => null
        ], $values);

        $message->setVclock($values['vclock']);
        $message->setKey($values['key']);

        foreach ($values['content'] as $item) {
            $message->addContent($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RpbPutResp',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'content',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.RpbContent'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'vclock',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'key',
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

        if ($this->content !== null) {
            foreach ($this->content as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->vclock !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->vclock);
        }

        if ($this->key !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->key);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Riak\Client\ProtoBuf\RpbContent();

                if ($this->content === null) {
                    $this->content = new \Protobuf\MessageCollection();
                }

                $this->content->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->vclock = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->key = $reader->readByteStream($stream);

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

        if ($this->content !== null) {
            foreach ($this->content as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->vclock !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->vclock);
        }

        if ($this->key !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->key);
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
        $this->content = null;
        $this->vclock = null;
        $this->key = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Riak\Client\ProtoBuf\RpbPutResp) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->content = ($message->content !== null) ? $message->content : $this->content;
        $this->vclock = ($message->vclock !== null) ? $message->vclock : $this->vclock;
        $this->key = ($message->key !== null) ? $message->key : $this->key;
    }


}

