<?php
/*
Plugin Name: Sig Fig Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/sig-fig-calculator/
Description: Significant figures are essential in various situations. Here, we determine the rules of sig figs and how we can apply them in the real world.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_sig_fig_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Sig Fig Calculator by Calculator.iO";

function display_ci_sig_fig_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/sig-fig-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Sig Fig Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_sig_fig_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_sig_fig_calculator', 'display_ci_sig_fig_calculator' );