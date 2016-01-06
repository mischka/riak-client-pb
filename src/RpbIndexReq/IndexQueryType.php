<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : riak.proto
 */


namespace Riak\Client\ProtoBuf\RpbIndexReq;

/**
 * Protobuf enum : RpbIndexReq.IndexQueryType
 */
class IndexQueryType extends \Protobuf\Enum
{

    /**
     * eq = 0
     */
    const eq_VALUE = 0;

    /**
     * range = 1
     */
    const range_VALUE = 1;

    /**
     * @var \Riak\Client\ProtoBuf\RpbIndexReq\IndexQueryType
     */
    protected static $eq = null;

    /**
     * @var \Riak\Client\ProtoBuf\RpbIndexReq\IndexQueryType
     */
    protected static $range = null;

    /**
     * @return \Riak\Client\ProtoBuf\RpbIndexReq\IndexQueryType
     */
    public static function eq()
    {
        if (self::$eq !== null) {
            return self::$eq;
        }

        return self::$eq = new self('eq', self::eq_VALUE);
    }

    /**
     * @return \Riak\Client\ProtoBuf\RpbIndexReq\IndexQueryType
     */
    public static function range()
    {
        if (self::$range !== null) {
            return self::$range;
        }

        return self::$range = new self('range', self::range_VALUE);
    }

    /**
     * @param int $value
     * @return \Riak\Client\ProtoBuf\RpbIndexReq\IndexQueryType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::eq();
            case 1: return self::range();
            default: return null;
        }
    }


}

