<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbCounterGetReq extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbCounterGetReq');

            // required bytes bucket = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "bucket";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // required bytes key = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "key";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional uint32 r = 3
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "r";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_UINT32;

            $descriptor->addField($f);

            // optional uint32 pr = 4
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 4;
            $f->name   = "pr";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_UINT32;

            $descriptor->addField($f);

            // optional bool basic_quorum = 5
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 5;
            $f->name   = "basic_quorum";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            // optional bool notfound_ok = 6
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 6;
            $f->name   = "notfound_ok";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "bucket" has a value
         *
         * @return boolean
         */
        public function hasBucket()
        {
            return isset($this->bucket);
        }

        /**
         * Clear "bucket" value
         */
        public function clearBucket()
        {
            unset($this->bucket);
        }

        /**
         * Get "bucket" value
         * @return string                  *
         *
         */
        public function getBucket()
        {
            return $this->bucket;
        }

        /**
         * Set "bucket" value
         *
         * @param string $value
         */
        public function setBucket($value)
        {
            return $this->bucket = $value;
        }

        /**
         * Check if "key" has a value
         *
         * @return boolean
         */
        public function hasKey()
        {
            return isset($this->key);
        }

        /**
         * Clear "key" value
         */
        public function clearKey()
        {
            unset($this->key);
        }

        /**
         * Get "key" value
         * @return string                  *
         *
         */
        public function getKey()
        {
            return $this->key;
        }

        /**
         * Set "key" value
         *
         * @param string $value
         */
        public function setKey($value)
        {
            return $this->key = $value;
        }

        /**
         * Check if "r" has a value
         *
         * @return boolean
         */
        public function hasR()
        {
            return isset($this->r);
        }

        /**
         * Clear "r" value
         */
        public function clearR()
        {
            unset($this->r);
        }

        /**
         * Get "r" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getR()
        {
            return \PhpOption\Option::fromValue($this->r);
        }

        /**
         * Set "r" value
         *
         * @param int $value
         */
        public function setR($value)
        {
            return $this->r = $value;
        }

        /**
         * Check if "pr" has a value
         *
         * @return boolean
         */
        public function hasPr()
        {
            return isset($this->pr);
        }

        /**
         * Clear "pr" value
         */
        public function clearPr()
        {
            unset($this->pr);
        }

        /**
         * Get "pr" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getPr()
        {
            return \PhpOption\Option::fromValue($this->pr);
        }

        /**
         * Set "pr" value
         *
         * @param int $value
         */
        public function setPr($value)
        {
            return $this->pr = $value;
        }

        /**
         * Check if "basic_quorum" has a value
         *
         * @return boolean
         */
        public function hasBasicQuorum()
        {
            return isset($this->basic_quorum);
        }

        /**
         * Clear "basic_quorum" value
         */
        public function clearBasicQuorum()
        {
            unset($this->basic_quorum);
        }

        /**
         * Get "basic_quorum" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getBasicQuorum()
        {
            return \PhpOption\Option::fromValue($this->basic_quorum);
        }

        /**
         * Set "basic_quorum" value
         *
         * @param boolean $value
         */
        public function setBasicQuorum($value)
        {
            return $this->basic_quorum = $value;
        }

        /**
         * Check if "notfound_ok" has a value
         *
         * @return boolean
         */
        public function hasNotfoundOk()
        {
            return isset($this->notfound_ok);
        }

        /**
         * Clear "notfound_ok" value
         */
        public function clearNotfoundOk()
        {
            unset($this->notfound_ok);
        }

        /**
         * Get "notfound_ok" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getNotfoundOk()
        {
            return \PhpOption\Option::fromValue($this->notfound_ok);
        }

        /**
         * Set "notfound_ok" value
         *
         * @param boolean $value
         */
        public function setNotfoundOk($value)
        {
            return $this->notfound_ok = $value;
        }
    }
}
