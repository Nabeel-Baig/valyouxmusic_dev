
jQuery(document).ready(function(){


//////INPUT FIELDS





$("#plus").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If is not undefined
if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
// Increment
$(field).val(currentVal + 1);
}
});

// This button will decrement the value till 0
$("#minus").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If it isn't undefined or its greater than 0
if ( !isNaN(currentVal) && currentVal > 1 ) {
// Decrement one
$(field).val(currentVal - 1);
}
});




$("#plus2").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If is not undefined
if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
// Increment
$(field).val(currentVal + 1);
}
});

// This button will decrement the value till 0
$("#minus2").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If it isn't undefined or its greater than 0
if ( !isNaN(currentVal) && currentVal > 1 ) {
// Decrement one
$(field).val(currentVal - 1);
}
});

$("#plus3").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If is not undefined
if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
// Increment
$(field).val(currentVal + 1);
}
});

});


















