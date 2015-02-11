<?php

/**
 * @file
 * API documentation for Persistent Update API.
 */

/**
 * Allows modules to execute persistent update hooks; think hook_update_N() that
 * always runs.
 */
function hook_persistent_update() {
  drupal_flush_all_caches();
  features_revert();
}
