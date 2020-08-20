// JavaScript Document
jQuery(document).ready(function() { 
jQuery(".navbar-toggle").click(function(e) {
jQuery(".collapse").toggle();
 });


 jQuery("#openEnquiryForm").click(function(e) {
	jQuery('#eventsEnquiryForm').modal({
        'backdrop' : 'static'
      });
	});


jQuery("#openVideoPopUp").click(function(e) {
	jQuery('#eventsVideoForm').modal({
        'backdrop' : 'static'
      });
	});

})