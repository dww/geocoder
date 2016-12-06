<?php

namespace Drupal\geocoder_geolocation\Plugin\Geocoder\Dumper;

use Drupal\geocoder\DumperBase;
use Geocoder\Model\Address;

/**
 * Provides a geocoder dumper plugin that returns an array of coordinates.
 *
 * @GeocoderDumper(
 *   id = "latlngarray",
 *   name = "LatLngArray",
 *   handler = "\Drupal\geocoder_geolocation\Geocoder\Dumper\LatLngArray"
 * )
 */
class LatLngArray extends DumperBase {

  /**
   * {@inheritdoc}
   */
  public function dump(Address $address) {
    $coordinates = $address->getCoordinates();
    return array(
      'lat' => $coordinates->getLatitude(),
      'lng' => $coordinates->getLongitude(),
    );
  }
}
