/*
 * Copyright (c) 2023 junaidbinjaman.com
 * Author: Junaid Bin Jaman
 *
 * This file contains reusable functions for Sofi JS. Include this file in
 * your JS code to use these template tags.
 */

class Sofi_template_tags {
  // Class constructor
  constructor() {}

  /**
   * Handle form input character limit realtime errors.
   *
   * @param {string} input - Input field CSS selector.
   * @param {string} message - Error message to display.
   * @param {number} limit - Max allowed number of characters.
   * @param {number} error_class - Error element class
   */
  handle_input_char_limit_error = function (input, message, limit, error_text_class) {
    // Declare variables
    input = jQuery(input);
    var error_class = 'sofi-error-input-border';
    var error_text = jQuery(error_text_class);
    var hide_error_message = 'sofi-admin-hide';
    var is_class_applied = input.hasClass(error_class);
    var total_char = input.val().length;

    // Set the error message
    error_text.text(message);
    error_text.css('color', 'red');

    // Handle error message
    if (total_char < limit + 1) {
      if (is_class_applied) {
        input.removeClass(error_class);
        error_text.addClass(hide_error_message);
      }
    } else {
      if (!is_class_applied) {
        input.addClass(error_class);
        input.css('box-shadow', 'none');
        error_text.removeClass(hide_error_message);
      }
    }
  };
}

var sofi_template_tags = new Sofi_template_tags();

export default sofi_template_tags;
