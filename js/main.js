function Init() {
    var $ = jQuery || $;
    var _this = this;

    // Lazy load functionality for images
    function lazyLoadImages(index, element ) {
        var $imagePlaceholder = jQuery(element);

        var imageSrc = $imagePlaceholder.data("jbImageUrl");
        var imageAlt = $imagePlaceholder.data("jbImageAlt");

        var _image = new Image;
        _image.onload = function() {
            $image = jQuery(this).addClass("img-responsive");
            $imagePlaceholder.after(jQuery(this)).remove();
        }

        _image.src = imageSrc;
        _image.alt = imageAlt;
    }

    jQuery('[data-jb-image-url]').each(lazyLoadImages);
}

jQuery(document).ready(function() { new Init(); });