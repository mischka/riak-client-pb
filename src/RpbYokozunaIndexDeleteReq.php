<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbYokozunaIndexDeleteReq extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbYokozunaIndexDeleteReq');

            // required bytes name = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "name";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "name" has a value
         *
         * @return boolean
         */
        public function hasName()
        {
            return isset($this->name);
        }

        /**
         * Clear "name" value
         */
        public function clearName()
        {
            unset($this->name);
        }

        /**
         * Get "name" value
         * @return string                  *
         *
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * Set "name" value
         *
         * @param string $value
         */
        public function setName($value)
        {
            return $this->name = $value;
        }
    }
}
