<?php
/**
 * Plugin Name: Custom Collection Statistic
 * Plugin URI: https://github.com/adeism/slims_custom_statistik_koleksi
 * Description: Collection Statistic with filter date popular titles
 * Version: 1.0.0
* Author: original creator by Erwan Setyo Budi & plugin by Ade Ismail
 * Author URI: https://github.com/adeism/
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus or hook
$plugin->registerMenu("reporting", "Custom Collection Statistic", __DIR__ . "/index.php");
