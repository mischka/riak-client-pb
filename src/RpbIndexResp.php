<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbIndexResp extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbIndexResp');

            // repeated bytes keys = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "keys";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // repeated message results = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "results";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\RpbPair';

            $descriptor->addField($f);

            // optional bytes continuation = 3
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "continuation";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional bool done = 4
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 4;
            $f->name   = "done";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "keys" has a value
         *
         * @return boolean
         */
        public function hasKeys()
        {
            return isset($this->keys);
        }

        /**
         * Clear "keys" value
         */
        public function clearKeys()
        {
            unset($this->keys);
        }

        /**
         * Get "keys" value
         *
         * @return \PhpOption\Option of type string[]
         */
        public function getKeys($idx = null)
        {
            if (null == $idx || !array_key_exists($idx, $this->keys)) {
                return  \PhpOption\None::create();
            }

            return new \PhpOption\Some($this->keys[$idx]);
        }

        /**
         * Get "keys" list of values
         *
         * @return string[]
         */
        public function getKeysList()
        {
            return $this->keys;
        }

        /**
         * Set "keys" value
         *
         * @param string[] $value
         */
        public function setKeys($value)
        {
            return $this->keys = $value;
        }

        /**
         * Add a new element to "keys"
         *
         * @param string $value
         */
        public function addKeys($value)
        {
            $this->keys[] = $value;
        }

        /**
         * Check if "results" has a value
         *
         * @return boolean
         */
        public function hasResults()
        {
            return isset($this->results);
        }

        /**
         * Clear "results" value
         */
        public function clearResults()
        {
            unset($this->results);
        }

        /**
         * Get "results" value
         *
         * @return \PhpOption\Option of type RpbPair[]
         */
        public function getResults($idx = null)
        {
            if (null == $idx || !array_key_exists($idx, $this->results)) {
                return  \PhpOption\None::create();
            }

            return new \PhpOption\Some($this->results[$idx]);
        }

        /**
         * Get "results" list of values
         *
         * @return RpbPair[]
         */
        public function getResultsList()
        {
            return $this->results;
        }

        /**
         * Set "results" value
         *
         * @param RpbPair[] $value
         */
        public function setResults($value)
        {
            return $this->results = $value;
        }

        /**
         * Add a new element to "results"
         *
         * @param RpbPair $value
         */
        public function addResults($value)
        {
            $this->results[] = $value;
        }

        /**
         * Check if "continuation" has a value
         *
         * @return boolean
         */
        public function hasContinuation()
        {
            return isset($this->continuation);
        }

        /**
         * Clear "continuation" value
         */
        public function clearContinuation()
        {
            unset($this->continuation);
        }

        /**
         * Get "continuation" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getContinuation()
        {
            return \PhpOption\Option::fromValue($this->continuation);
        }

        /**
         * Set "continuation" value
         *
         * @param string $value
         */
        public function setContinuation($value)
        {
            return $this->continuation = $value;
        }

        /**
         * Check if "done" has a value
         *
         * @return boolean
         */
        public function hasDone()
        {
            return isset($this->done);
        }

        /**
         * Clear "done" value
         */
        public function clearDone()
        {
            unset($this->done);
        }

        /**
         * Get "done" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getDone()
        {
            return \PhpOption\Option::fromValue($this->done);
        }

        /**
         * Set "done" value
         *
         * @param boolean $value
         */
        public function setDone($value)
        {
            return $this->done = $value;
        }
    }
}
