<?php
/**
 * @file
 * The Wkb plugin.
 */

namespace Drupal\geocoder\Plugin\GeocoderDumper;

use Drupal\geocoder\GeocoderDumper;
use Drupal\geocoder\GeocoderDumperInterface;
use Geocoder\Model\Address;

/**
 * Class Wkb.
 *
 * @GeocoderDumperPlugin(
 *  id = "wkb",
 * )
 */
class Wkb extends GeocoderDumper implements GeocoderDumperInterface {
  /**
   * @inheritdoc
   */
  public function dump(Address $address) {
    $handler = new \Geocoder\Dumper\Wkb();
    return $handler->dump($address);
  }

}
