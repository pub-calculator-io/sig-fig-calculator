<?php
/*
Plugin Name: Sig Fig Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/sig-fig-calculator/
Description: Master significant figures with our easy-to-use Sig Fig Calculator. Quickly determine precision, apply rounding rules, and solve math or science equations.
Version: 1.0.0
Author: www.calculator.io / Sig Fig Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_sig_fig_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Sig Fig Calculator by www.calculator.io";

function calcio_sig_fig_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Sig Fig Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_sig_fig_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_sig_fig_calculator', 'calcio_sig_fig_calculator_shortcode' );