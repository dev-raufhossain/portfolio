window.addEventListener("load", function () {
  let wpm_6310_loading = jQuery(".wpm_6310_loading");
  let loadingCounter = 0;
  setTimeout(function () {
    wpm_6310_loading.each(function () {
      if (loadingCounter == 1) {
        jQuery(this).remove();
      }
      loadingCounter = 1;
    });
  }, 1000);

  jQuery("body").on("click", "a.open_in_new_tab_class", function (event) {
    event.preventDefault();
    if (jQuery(this).attr("target") == "_blank") {
      window.open(jQuery(this).attr("href"), "_blank").focus();
    } else if (jQuery(this).attr("wpm-6310-tooltip") == "yes") {
      let totalWidth = parseInt(jQuery(this).parent().parent().width()) + 20;
      let pos = parseInt(jQuery(this).position().left);

      if (pos - 70 < 0) {
        jQuery("head").append(
          "<style>.wpm-6310-tooltip:after{left: " +
            0 +
            "px !important; right: initial !important;}</style>"
        );
      } else if (totalWidth > 170 && pos + 90 < totalWidth) {
        jQuery("head").append(
          "<style>.wpm-6310-tooltip:after{left: " +
            (pos - 60) +
            "px !important; right: initial !important;}</style>"
        );
      } else {
        jQuery("head").append(
          "<style>.wpm-6310-tooltip:after{left: initial !important; right: " +
            0 +
            "px !important;}</style>"
        );
      }
    } else {
      window.open(jQuery(this).attr("href"), "_parent").focus();
    }
    return false;
  });

  jQuery("body").on("mouseenter", "a.open_in_new_tab_class", function (event) {
    var attr = jQuery(this).attr("data-social-modal");
    if (typeof attr !== typeof undefined && attr !== false) {
      jQuery("head").append(
        "<style>.wpm-6310-tooltip:after{left: initial !important; right: initial !important;}</style>"
      );
    } else {
      if (jQuery(this).attr("wpm-6310-tooltip") == "yes") {
        let totalWidth = parseInt(jQuery(this).parent().parent().width()) + 20;
        let pos = parseInt(jQuery(this).position().left);

        if (pos - 70 < 0) {
          jQuery("head").append(
            "<style>.wpm-6310-tooltip:after{left: " +
              0 +
              "px !important; right: initial !important;}</style>"
          );
        } else if (totalWidth > 170 && pos + 90 < totalWidth) {
          jQuery("head").append(
            "<style>.wpm-6310-tooltip:after{left: " +
              (pos - 60) +
              "px !important; right: initial !important;}</style>"
          );
        } else {
          jQuery("head").append(
            "<style>.wpm-6310-tooltip:after{left: initial !important; right: " +
              0 +
              "px !important;}</style>"
          );
        }
      }
    }
  });

  //Category Filter
  jQuery("body").on("click", ".wpm_6310_category_list", function () {
    let ids = jQuery(this)
      .closest(".wpm_main_template")
      .attr("wpm-6310-carousel-id");
    let itemPerRow = jQuery(this)
      .closest(".wpm_main_template")
      .attr("wpm-6310-carousel-itemperrow");
    let attr = jQuery(this).attr("wpm-data-filter");
    var searchActive = jQuery(this)
      .closest(".wpm_main_template")
      .attr("wpm-6310-search-active");
    var value = jQuery(".wpm-6310-search-template-" + ids + " input")
      .val()
      .toLowerCase();

    jQuery(
      ".wpm_main_template_" + ids + " .wpm_6310_category_list_" + ids
    ).removeClass("wpm_6310_category_list_active_" + ids);
    jQuery(this).addClass("wpm_6310_category_list_active_" + ids);
    jQuery(
      ".wpm_main_template_" + ids + " .wpm-6310-row:not(." + attr + ")"
    ).hide(300);

    if (value != "" && value.trim() != "" && searchActive == true) {
      jQuery(
        ".wpm_main_template_" +
          ids +
          " ." +
          attr +
          " .wpm-6310-col-" +
          itemPerRow
      ).filter(function () {
        jQuery("." + attr).show(300);
        var title = jQuery(this)
          .find(".wpm_6310_team_style_" + ids + "_title")
          .text()
          .toLowerCase();
        var designation = jQuery(this)
          .find(".wpm_6310_team_style_" + ids + "_designation")
          .text()
          .toLowerCase();
        let status =
          title.indexOf(value) > -1 || designation.indexOf(value) > -1;
        if (status) {
          jQuery(this).show(300);
        } else {
          jQuery(this).hide(300);
        }
      });
    } else {
      jQuery(".wpm_main_template_" + ids + " ." + attr).show(300);
      jQuery(
        ".wpm_main_template_" +
          ids +
          " ." +
          attr +
          " .wpm-6310-col-" +
          itemPerRow
      ).filter(function () {
        jQuery(this).show(300);
      });
    }
  });

  //Search Filter
  jQuery("body").on("keyup", ".wpm-6310-search-box", function () {
    var ids = jQuery(this)
      .closest(".wpm_main_template")
      .attr("wpm-6310-carousel-id");
    let itemPerRow = jQuery(this)
      .closest(".wpm_main_template")
      .attr("wpm-6310-carousel-itemperrow");
    var value = jQuery(this).val().toLowerCase();
    var category = Number(
      jQuery(this).closest(".wpm_main_template").attr("wpm-6310-search-active")
    );

    let className = "";
    if (category == 1) {
      className = jQuery(
        ".wpm_main_template_" + ids + " .wpm_6310_category_list_active_" + ids
      ).attr("wpm-data-filter");
    } else {
      className = "c-1588100157";
    }

    jQuery(
      ".wpm_main_template_" +
        ids +
        " ." +
        className +
        " .wpm-6310-col-" +
        itemPerRow
    ).filter(function () {
      var title = jQuery(this)
        .find(".wpm_6310_team_style_" + ids + "_title")
        .text()
        .toLowerCase();
      var designation = jQuery(this)
        .find(".wpm_6310_team_style_" + ids + "_designation")
        .text()
        .toLowerCase();
      let status = title.indexOf(value) > -1 || designation.indexOf(value) > -1;
      if (status) {
        jQuery(this).show(300);
      } else {
        jQuery(this).hide(300);
      }
    });
  });

  //Fixed lazyLoad plugin error
  var $allImages = jQuery(".wpm_main_template img");
  $allImages.each(function () {
    var clsName = "wpm-6310-img-responsive";
    var alt = jQuery(this).attr("alt");
    var hoverImage = jQuery(this).attr("data-6310-hover-image");
    var image = jQuery(this).attr("data-wpm-6310-image-attr");
    var attributes = this.attributes;
    var i = attributes.length;
    while (i--) {
      this.removeAttributeNode(attributes[i]);
    }
    jQuery(this).attr({
      src: image,
      class: clsName,
      alt: alt,
      "data-6310-hover-image": hoverImage,
      "data-wpm-6310-image-attr": image,
    });
  });

  setTimeout(() => {
    var $allImages = jQuery(".wpm_main_template img");
    $allImages.each(function () {
      var clsName = "wpm-6310-img-responsive";
      var alt = jQuery(this).attr("alt");
      var hoverImage = jQuery(this).attr("data-6310-hover-image");
      var image = jQuery(this).attr("data-wpm-6310-image-attr");
      var attributes = this.attributes;
      var src = jQuery(this).attr("src");
      var i = attributes.length;

      while (i--) {
        let attrName = attributes[i].name.toLowerCase();
        if (
          attrName != "src" &&
          attrName != "class" &&
          attrName != "alt" &&
          attrName != "data-6310-hover-image" &&
          attrName != "data-wpm-6310-image-attr"
        ) {
          this.removeAttributeNode(attributes[i]);
        }
      }
      if (src != image) {
        jQuery(this).attr({
          src: image,
          class: clsName,
          alt: alt,
          "data-6310-hover-image": hoverImage,
          "data-wpm-6310-image-attr": image,
        });
      } else {
        jQuery(this).attr({ class: clsName });
      }
    });
  }, 1000);

  setTimeout(() => {
    var $allImages = jQuery(".wpm_main_template img");
    $allImages.each(function () {
      var clsName = "wpm-6310-img-responsive";
      var alt = jQuery(this).attr("alt");
      var hoverImage = jQuery(this).attr("data-6310-hover-image");
      var image = jQuery(this).attr("data-wpm-6310-image-attr");
      var attributes = this.attributes;
      var src = jQuery(this).attr("src");
      var i = attributes.length;

      while (i--) {
        let attrName = attributes[i].name.toLowerCase();
        if (
          attrName != "src" &&
          attrName != "class" &&
          attrName != "alt" &&
          attrName != "data-6310-hover-image" &&
          attrName != "data-wpm-6310-image-attr"
        ) {
          this.removeAttributeNode(attributes[i]);
        }
      }
      if (src != image) {
        jQuery(this).attr({
          src: image,
          class: clsName,
          alt: alt,
          "data-6310-hover-image": hoverImage,
          "data-wpm-6310-image-attr": image,
        });
      } else {
        jQuery(this).attr({ class: clsName });
      }
    });
  }, 2500);

  setTimeout(() => {
    var $allImages = jQuery(".wpm_main_template img");
    $allImages.each(function () {
      var clsName = "wpm-6310-img-responsive";
      var alt = jQuery(this).attr("alt");
      var hoverImage = jQuery(this).attr("data-6310-hover-image");
      var image = jQuery(this).attr("data-wpm-6310-image-attr");
      var attributes = this.attributes;
      var src = jQuery(this).attr("src");
      var i = attributes.length;

      while (i--) {
        let attrName = attributes[i].name.toLowerCase();
        if (
          attrName != "src" &&
          attrName != "class" &&
          attrName != "alt" &&
          attrName != "data-6310-hover-image" &&
          attrName != "data-wpm-6310-image-attr"
        ) {
          this.removeAttributeNode(attributes[i]);
        }
      }
      if (src != image) {
        jQuery(this).attr({
          src: image,
          class: clsName,
          alt: alt,
          "data-6310-hover-image": hoverImage,
          "data-wpm-6310-image-attr": image,
        });
      } else {
        jQuery(this).attr({ class: clsName });
      }
    });
  }, 5000);

  setTimeout(() => {
    var $allImages = jQuery(".wpm_main_template img");
    $allImages.each(function () {
      var clsName = "wpm-6310-img-responsive";
      var alt = jQuery(this).attr("alt");
      var hoverImage = jQuery(this).attr("data-6310-hover-image");
      var image = jQuery(this).attr("data-wpm-6310-image-attr");
      var attributes = this.attributes;
      var src = jQuery(this).attr("src");
      var i = attributes.length;

      while (i--) {
        let attrName = attributes[i].name.toLowerCase();
        if (
          attrName != "src" &&
          attrName != "class" &&
          attrName != "alt" &&
          attrName != "data-6310-hover-image" &&
          attrName != "data-wpm-6310-image-attr"
        ) {
          this.removeAttributeNode(attributes[i]);
        }
      }
      if (src != image) {
        jQuery(this).attr({
          src: image,
          class: clsName,
          alt: alt,
          "data-6310-hover-image": hoverImage,
          "data-wpm-6310-image-attr": image,
        });
      } else {
        jQuery(this).attr({ class: clsName });
      }
    });
  }, 10000);
  jQuery(".wpm_main_template").each(function () {
    let ids = jQuery(this).attr("wpm-6310-carousel-id");
    if (
      jQuery(this).attr("wpm-6310-carousel-active") == 1 ||
      jQuery(this).attr("wpm-6310-carousel-active") == "1"
    ) {
      jQuery(
        "#wpm-6310-noslider-" + jQuery(this).attr("wpm-6310-carousel-id")
      ).hide();
      var owlVar = jQuery(
        "#wpm-6310-slider-" + jQuery(this).attr("wpm-6310-carousel-id")
      );
      owlVar.tss6310OwlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: Number(jQuery(this).attr("wpm-6310-item-margin")),
        autoplayTimeout: jQuery(this).attr("wpm-6310-carousel-autoPlay"),
        autoplayHoverPause: true,
        responsiveClass: true,
        autoHeight: true,
        nav:
          jQuery(this).attr("wpm-6310-carousel-nav") == "true" ||
          jQuery(this).attr("wpm-6310-carousel-nav") == true
            ? true
            : false,
        dots:
          jQuery(this).attr("wpm-6310-carousel-dot") == "true" ||
          jQuery(this).attr("wpm-6310-carousel-dot") == true
            ? true
            : false,
        navText: [
          "<i class='" +
            jQuery(this).attr("wpm-6310-carousel-navText") +
            "-left'></i>",
          "<i class='" +
            jQuery(this).attr("wpm-6310-carousel-navText") +
            "-right'></i>",
        ],
        responsive: {
          0: {
            items: jQuery(this).attr("wpm-6310-carousel-itemPerRow-mobile"),
          },
          768: {
            items: jQuery(this).attr("wpm-6310-carousel-itemPerRow-tablet"),
          },
          1024: {
            items: jQuery(this).attr("wpm-6310-carousel-itemPerRow"),
          },
        },
      });
      owlVar.on("mouseleave", function () {
        owlVar.trigger("stop.owl.autoplay"); //this is main line to fix it
        owlVar.trigger("play.owl.autoplay", [
          jQuery(this).attr("wpm-6310-carousel-autoPlay"),
        ]);
      });
      setTimeout(function () {
        let allSlider = jQuery(
          "#wpm-6310-slider-" + ids + " .wpm-6310-owl-item"
        );
        let maxHeight = 0;
        if (allSlider.length) {
          for (let ii = 0; ii < allSlider.length; ii++) {
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if (maxHeight > 0) {
          maxHeight += Number(
            jQuery(".wpm_main_template_" + ids).attr("wpm-6310-padding")
          );
          jQuery("#wpm-6310-slider-" + ids + " .wpm-6310-owl-height").css({
            height: maxHeight,
          });
        }
      }, 500);
      setTimeout(function () {
        let allSlider = jQuery(
          "#wpm-6310-slider-" + ids + " .wpm-6310-owl-item"
        );
        let maxHeight = 0;
        if (allSlider.length) {
          for (let ii = 0; ii < allSlider.length; ii++) {
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if (maxHeight > 0) {
          maxHeight += Number(
            jQuery(".wpm_main_template_" + ids).attr("wpm-6310-padding")
          );
          jQuery("#wpm-6310-slider-" + ids + " .wpm-6310-owl-height").css({
            height: maxHeight,
          });
        }
      }, 1000);
      setTimeout(function () {
        let allSlider = jQuery(
          "#wpm-6310-slider-" + ids + " .wpm-6310-owl-item"
        );
        let maxHeight = 0;
        if (allSlider.length) {
          for (let ii = 0; ii < allSlider.length; ii++) {
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if (maxHeight > 0) {
          maxHeight += Number(
            jQuery(".wpm_main_template_" + ids).attr("wpm-6310-padding")
          );
          jQuery("#wpm-6310-slider-" + ids + " .wpm-6310-owl-height").css({
            height: maxHeight,
          });
        }
      }, 1500);
      setTimeout(function () {
        let allSlider = jQuery(
          "#wpm-6310-slider-" + ids + " .wpm-6310-owl-item"
        );
        let maxHeight = 0;
        if (allSlider.length) {
          for (let ii = 0; ii < allSlider.length; ii++) {
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if (maxHeight > 0) {
          maxHeight += Number(
            jQuery(".wpm_main_template_" + ids).attr("wpm-6310-padding")
          );
          jQuery("#wpm-6310-slider-" + ids + " .wpm-6310-owl-height").css({
            height: maxHeight,
          });
        }
      }, 2000);
      setTimeout(function () {
        let allSlider = jQuery(
          "#wpm-6310-slider-" + ids + " .wpm-6310-owl-item"
        );
        let maxHeight = 0;
        if (allSlider.length) {
          for (let ii = 0; ii < allSlider.length; ii++) {
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if (maxHeight > 0) {
          maxHeight += Number(
            jQuery(".wpm_main_template_" + ids).attr("wpm-6310-padding")
          );
          jQuery("#wpm-6310-slider-" + ids + " .wpm-6310-owl-height").css({
            height: maxHeight,
          });
        }
      }, 3000);
    } else {
      jQuery(
        "#wpm-6310-slider-" + jQuery(this).attr("wpm-6310-carousel-id")
      ).hide();
      //Remove unnecessary p tag
      let htmlCode = jQuery(this).html();
      htmlCode = htmlCode.replace(/<p>/gi, "");
      htmlCode = htmlCode.replace(/<\/p>/gi, "");
      jQuery(this).html(htmlCode);
    }
  });

  //Remove visual composer class
  let noBorder = jQuery(".boxed-no-space");
  if (noBorder && noBorder.length) {
    noBorder.each(function () {
      jQuery(this).removeAttr("class");
    });
  }
});

window.addEventListener("load", function () {
  jQuery("body").on("click", ".wpm-6310-close", function () {
    jQuery("#mywpm_6310_modal").remove();
    jQuery("#mywpm_6310_modal").fadeOut(500);
    jQuery("body").css({
      overflow: "auto",
    });
  });

  jQuery(window).click(function (event) {
    if (event.target == document.getElementById("mywpm_6310_modal")) {
      jQuery("#mywpm_6310_modal").remove();
      jQuery("#mywpm_6310_modal").fadeOut(500);
      jQuery("body").css({
        overflow: "auto",
      });
    }
  });
});
