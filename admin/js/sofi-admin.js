/*
 * Copyright (c) 2023 junaidbinjaman.com
 * Author: Junaid Bin Jaman
 * This file is made for CURRENT TEMPLATE
 */

import sofi_template_tags from './sofi-template-tags.js';

/**
 * Add input meta bellow to populate errors
 * on over char limit
 * 
 * PLEASE NOTE: Do not forget to add "." before starting the class and HTML tag after the class name at "input" property
 * PLEASE NOTE: Do not forget to add "." before starting the class at "error_message_class" property
 */
const sofi_input_char_limit_meta = [
  {
    // Hero area heading
    char_limit: 30,
    input: '.sofi_hero_heading_input input',
    error_message: 'Max char limit is 30...',
    error_message_class: '.sofi-hero-heading-error',
  },
  {
    // Hero area description
    char_limit: 100,
    input: '.sofi_hero_description textarea',
    error_message: 'Max char limit is 100...',
    error_message_class: '.sofi-hero-desc-error',
  },
  {
    // Hero area knowledge section title
    char_limit: 70,
    input: '.sofi_hero_knowledge_section_title textarea',
    error_message: 'Max char limit is 70...',
    error_message_class: '.sofi-hero-knowledge-title-error',
  },
  {
    // About section title
    char_limit: 70,
    input: '.sofi_about_section_title input',
    error_message: 'Max char limit is 70...',
    error_message_class: '.sofi_about_section_title_error',
  },
  {
    // About section description
    char_limit: 225,
    input: '.sofi_about_section_description textarea',
    error_message: 'Max char limit is 170...',
    error_message_class: '.sofi_about_section_desc_error',
  },
];

/**
 * jQuery code block starts here
 */
(function ($) {
  $(document).ready(function () {
    // Loop through input boxes tp run handle_char_limit_error on them
    for (let i = 0; i < sofi_input_char_limit_meta.length; i++) {
      // Initializing all variables
      const element = sofi_input_char_limit_meta[i];
      const char_limit = element.char_limit;
      const input = element.input;
      const error_message = element.error_message;
      const error_message_class = element.error_message_class;

      // Pass jQuery ($) as a parameter to the function
      sofi_handle_char_limit_error($, char_limit, input, error_message, error_message_class);
    }
  });
})(jQuery);

/**
 * Over character limit handler function
 *
 * @param string $ jQuery custom handle
 * @param number char_limit Character limit for the input
 * @param mixed input CSS selector for the input box
 * @param mixed error_message Error message to display if character limit is over
 * @param string error_message_class HTML element class in where the error message will be printed
 */
function sofi_handle_char_limit_error($, char_limit, input, error_message, error_message_class) {
  // Display the error when they visit the page
  sofi_template_tags.handle_input_char_limit_error(
    input,
    error_message,
    char_limit,
    error_message_class,
  );

  // display the realtime error on each key press
  $(input).on('keyup', function () {
    sofi_template_tags.handle_input_char_limit_error(
      input,
      error_message,
      char_limit,
      error_message_class,
    );
  });
}
