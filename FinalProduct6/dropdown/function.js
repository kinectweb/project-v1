/*
	Dropdown with Multiple checkbox select with jQuery - May 27, 2013
	(c) 2013 @ElmahdiMahmoud
	license: http://www.opensource.org/licenses/mit-license.php
*/


$(window).load(function() {
$(".dropdown dt a").on('click', function () {
          $(".dropdown dd ul").slideToggle('fast');
      });

      var type;
      $("input[type=radio]").click(
        function() {
          if($("#event").is(':checked')){
            type = $(this).val();
            $("#choice").html(type);
            $(".dropdown dd ul").slideToggle('fast');
          }else if($("#video").is(':checked')){
            type = $(this).val();
            $("#choice").html(type);
            $(".dropdown dd ul").slideToggle('fast');
          }
        }
      );

      // $(".dropdown dd ul li a").on('click', function () {
      //     $(".dropdown dd ul").hide();
      // });
      //
      // function getSelectedValue(id) {
      //      return $("#" + id).find("dt a span.value").html();
      // }
      //
      // $(document).bind('click', function (e) {
      //     var $clicked = $(e.target);
      //     if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
      // });


      // $('.mutliSelect input[type="checkbox"]').on('click', function () {
      //
      //     var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
      //         title = $(this).val() + ",";
      //
      //     if ($(this).is(':checked')) {
      //         var html = '<span title="' + title + '">' + title + '</span>';
      //         $('.multiSel').append(html);
      //         $(".hida").hide();
      //     }
      //     else {
      //         $('span[title="' + title + '"]').remove();
      //         var ret = $(".hida");
      //         $('.dropdown dt a').append(ret);
      //
      //     }
      // });




    });