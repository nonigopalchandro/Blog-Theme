jQuery(function($) {
return jQuery(".main_left").stick_in_parent({
  parent: ".main"
});
});

jQuery(window).on("resize", (function(_this) {
return function(e) {
  return jQuery(document.body).trigger("sticky_kit:recalc");
};
})(this)); 