/**
 * UTM Code Generator - Admin JavaScript
 */
(function($) {
    'use strict';
    
    /**
     * Initialize when ACF is ready
     */
    if (typeof acf !== 'undefined') {
        acf.addAction('ready', function() {
            UTMCodeGenerator.init();
        });
    }
    
    /**
     * UTM Code Generator Object
     */
    var UTMCodeGenerator = {

        $formatSelect: null,
        $codeInput: null,
        isGenerating: false,
        generatedCodes: {},
        initialCode: '',
        initialFormat: '',

        /**
         * Initialize
         */
        init: function() {
            this.cacheDom();

            if (!this.$formatSelect.length || !this.$codeInput.length) {
                return;
            }

            this.saveInitialState();
            this.setupCodeField();
            this.bindEvents();
        },
        
        /**
         * Cache DOM elements
         */
        cacheDom: function() {
            this.$formatSelect = $('[data-name="code_format"] select');
            this.$codeInput = $('[data-name="utm_code"] input');
        },

        /**
         * Save initial state
         */
        saveInitialState: function() {
            this.initialCode = this.$codeInput.val() || '';
            this.initialFormat = this.$formatSelect.val() || '';

            // If existing initial code, save it in the cache
            if (this.initialCode && this.initialFormat) {
                this.generatedCodes[this.initialFormat] = this.initialCode;
            }
        },

        /**
         * Setup code field as read-only
         */
        setupCodeField: function() {
            this.$codeInput.prop('readonly', true).addClass('utm-code-readonly');
        },
        
        /**
         * Bind events
         */
        bindEvents: function() {
            var self = this;
            
            this.$formatSelect.on('change', function() {
                self.handleFormatChange($(this).val());
            });
        },
        
        /**
         * Handle format selection change
         */
        handleFormatChange: function(format) {
            if (!format) {
                this.$codeInput.val('');
                return;
            }

            // If we already have a generated code for this format, use it
            if (this.generatedCodes[format]) {
                this.$codeInput.val(this.generatedCodes[format]);
                this.$codeInput.trigger('change');
                return;
            }

            // Generate new code
            this.generateCode(format);
        },
        
        /**
         * Generate code via AJAX
         */
        generateCode: function(format) {
            if (this.isGenerating) {
                return;
            }
            
            var self = this;
            this.isGenerating = true;
            
            // Show loading state
            this.$codeInput
                .val(utmAdminData.messages.generating)
                .prop('disabled', true)
                .addClass('utm-code-generating');
            
            $.ajax({
                url: utmAdminData.ajaxUrl,
                type: 'POST',
                data: {
                    action: 'generate_utm_code',
                    format: format,
                    nonce: utmAdminData.nonce
                },
                success: function(response) {
                    self.handleSuccess(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    self.handleError(textStatus);
                },
                complete: function() {
                    self.isGenerating = false;
                    self.$codeInput.removeClass('utm-code-generating');
                }
            });
        },
        
        /**
         * Handle successful code generation
         */
        handleSuccess: function(response) {
            if (response.success && response.data.code) {
                var generatedCode = response.data.code;
                var currentFormat = this.$formatSelect.val();

                // Save the generated code in the cache
                this.generatedCodes[currentFormat] = generatedCode;

                this.$codeInput
                    .val(generatedCode)
                    .prop('disabled', false)
                    .addClass('utm-code-generated');

                // Trigger ACF update
                this.$codeInput.trigger('change');

                // Show success notification
                this.showNotification('success', response.data.message);
            } else {
                this.handleError(response.data.message || utmAdminData.messages.error);
            }
        },
        
        /**
         * Handle error
         */
        handleError: function(message) {
            this.$codeInput
                .val('')
                .prop('disabled', false);
            
            this.showNotification('error', message || utmAdminData.messages.connectionError);
        },
        
        /**
         * Show notification
         */
        showNotification: function(type, message) {
            // You can integrate with WordPress admin notices or a custom notification system
            if (type === 'error') {
                console.error('UTM Code Generator:', message);
                alert(message);
            } else {
                console.log('UTM Code Generator:', message);
            }
        }
    };
    
})(jQuery);