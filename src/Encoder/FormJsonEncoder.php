<?php

namespace Drupal\no_auth\Encoder;

use Drupal\serialization\Encoder\JsonEncoder as SerializationJsonEncoder;

/**
 * Class FormJsonEncoder.
 *
 * @package Drupal\no_auth\Encoder
 */
class FormJsonEncoder extends SerializationJsonEncoder {

  /**
   * {@inheritdoc}
   */
  protected static $format = ['form'];

  /**
   * {@inheritdoc}
   */
  public function decode($data, $format, array $context = []) {
    parse_str($data, $result);
    return $result;
  }

}
