<?php
/**
 * @file
 * The Wkt plugin.
 */

namespace Drupal\geocoder\Plugin\GeocoderDumper;

use Drupal\geocoder\GeocoderDumper;
use Drupal\geocoder\GeocoderDumperInterface;
use Geocoder\Model\Address;

/**
 * Class Wkt.
 *
 * @GeocoderDumperPlugin(
 *  id = "wkt",
 * )
 */
class Wkt extends GeocoderDumper implements GeocoderDumperInterface {
  /**
   * @inheritdoc
   */
  public function dump(Address $address) {
    $handler = new \Geocoder\Dumper\Wkt();
    return $handler->dump($address);
  }

}
