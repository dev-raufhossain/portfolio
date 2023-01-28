window.addEventListener("load", function () {
  jQuery("body").on(
    "click",
    ".wpm-6310-custom-field-mail-link-class",
    function (event) {
      var customField = jQuery(this).attr("wpm-data-custom-field");
      if (customField != undefined) {
        window.open(customField, "_blank").focus();
        event.preventDefault();
        return false;
      }
    }
  );
  var modalId = "";
  jQuery("body").on("click", ".wpm_6310_team_member_info", function (event) {
    let allModal = jQuery(".wpm_6310_modal");
    allModal.each(function () {
      jQuery(this).remove();
    });

    modalId = parseInt(jQuery(this).attr("team-id"));
    var linkId = parseInt(jQuery(this).attr("link-id"));

    if (linkId > 0) {
      event.preventDefault();
      if (jQuery(this).attr("target") == "1") {
        window.open(jQuery(this).attr("link-url"), "_blank").focus();
      } else {
        window.open(jQuery(this).attr("link-url"), "_parent").focus();
      }
      return false;
    } else if (modalId > 0) {
      var mId = Number(
        jQuery(this)
          .closest(".wpm_main_template")
          .attr("wpm-6310-modal-template")
      );
      var tId = Number(
        jQuery(this).closest(".wpm_main_template").attr("wpm-6310-carousel-id")
      );

      var html =
        '<div id="mywpm_6310_modal" class="wpm_6310_modal wpm_6310_mmt_' +
        tId +
        '"><div class="wpm_6310_modal-content"><span class="wpm-6310-close">&times;</span> <div class="wpm_6310_modal_template wpm_6310_modal_template_1"><div class="wpm_6310_modal_template_before"></div><div class="wpm_6310_modal_template_after"></div><div class="wpm_6310_modal_body_picture"><img src="" class="wpm_6310_modal_img"/></div><div class="wpm_6310_modal_body_content"><div class="wpm_6310_modal_designation"></div><div class="wpm_6310_modal_name"></div><div class="wpm_6310_modal_details"></div><br><br><div class="wpm_6310_modal_contact"></div><div class="wpm_6310_member_skills_wrapper"></div><div class="wpm_6310_modal_social"></div></div><br class="wpm_6310_clear"/></div><br class="wpm_6310_clear"/></div><br class="wpm_6310_clear" /</div>';
      jQuery("body").prepend(html);

      jQuery(".wpm_6310_loading").show();
      jQuery("body").css({
        overflow: "hidden",
      });

      let dataList = {
        action: "wpm_6310_team_member_details",
        ids: modalId,
        styleId: jQuery(this)
          .closest(".wpm_main_template")
          .attr("wpm-6310-carousel-id"),
        clicked: "",
        progress_bar_animation: jQuery(this)
          .closest(".wpm_main_template")
          .attr("wpm_6310_progress_bar_animation"),
        progress_bar_border_radius: jQuery(this)
          .closest(".wpm_main_template")
          .attr("wpm_6310_progress_bar_border_radius"),
      };
      wpm_6310_load_modal(dataList);
    }
  });

  jQuery("body").on("click", ".wpm_6310_modal_template_before", function () {
    var datas = {
      action: "wpm_6310_team_member_details",
      ids: jQuery(".wpm_6310_modal").attr("wpm-6310-member-id"),
      styleId: jQuery(this)
        .closest(".wpm_6310_modal")
        .attr("wpm-6310-carousel-id"),
      clicked: "prev",
      progress_bar_animation: jQuery(this)
        .closest(".wpm_6310_modal")
        .attr("wpm_6310_progress_bar_animation"),
      progress_bar_border_radius: jQuery(this)
        .closest(".wpm_6310_modal")
        .attr("wpm_6310_progress_bar_border_radius"),
    };
    jQuery(".wpm_6310_loading").show();
    jQuery(".wpm_6310_modal").hide();
    wpm_6310_load_modal(datas);
  });

  jQuery("body").on("click", ".wpm_6310_modal_template_after", function () {
    var datas = {
      action: "wpm_6310_team_member_details",
      ids: jQuery(".wpm_6310_modal").attr("wpm-6310-member-id"),
      styleId: jQuery(this)
        .closest(".wpm_6310_modal")
        .attr("wpm-6310-carousel-id"),
      clicked: "next",
      progress_bar_animation: jQuery(this)
        .closest(".wpm_6310_modal")
        .attr("wpm_6310_progress_bar_animation"),
      progress_bar_border_radius: jQuery(this)
        .closest(".wpm_6310_modal")
        .attr("wpm_6310_progress_bar_border_radius"),
    };
    jQuery(".wpm_6310_loading").show();
    jQuery(".wpm_6310_modal").hide();
    wpm_6310_load_modal(datas);
  });
});

function wpm_6310_load_modal(dataList) {
  jQuery.ajax({
    type: "GET",
    dataType: "json",
    url: my_ajax_object.ajax_url,
    data: dataList,
    success: function (data) {
      jQuery(".wpm_6310_loading").hide();
      jQuery(".wpm_6310_modal-content").css({
        "animation-name": "wpm-animate" + data["styledata"]["effect"],
      });
      jQuery(".wpm_6310_modal").show();
      jQuery(".wpm_6310_modal").attr(
        "wpm-6310-member-id",
        data["styledata"]["id"]
      );
      jQuery(".wpm_6310_modal").attr(
        "wpm-6310-carousel-id",
        dataList["styleId"]
      );
      jQuery(".wpm_6310_modal_img").attr("src", data["styledata"]["image"]);
      jQuery(".wpm_6310_modal_designation").text(
        data["styledata"]["designation"]
      );
      jQuery(".wpm_6310_modal").attr(
        "wpm_6310_progress_bar_animation",
        dataList["progress_bar_animation"]
      );
      jQuery(".wpm_6310_modal").attr(
        "wpm_6310_progress_bar_border_radius",
        dataList["progress_bar_border_radius"]
      );
      jQuery(".wpm_6310_modal_name").text(data["styledata"]["name"]);
      jQuery(".wpm_6310_modal_social").html("");
      jQuery(".wpm_6310_modal_social").append(data["link"]);
      jQuery(".wpm_6310_modal_details").html(
        data["styledata"]["profile_details"].replace(/\n/g, "<br>")
      );
      jQuery(".wpm_6310_member_skills_wrapper").html("");
      jQuery(".wpm_6310_member_skills_wrapper").append(data["skills"]);
    },
  });
}
