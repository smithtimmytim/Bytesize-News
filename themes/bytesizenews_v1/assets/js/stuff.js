$('a').each(function() {
   var a = new RegExp('/' + window.location.host + '/');
   if(!a.test(this.href)) {
       $(this).click(function(event) {
           event.preventDefault();
           event.stopPropagation();
           window.open(this.href, '_blank');
       });
   }
});

$('audio').mediaelementplayer();


// Something happens
  $(".open-newsletter").on("click", function() {

    // State changes
    $(".newsletter__wrapper").toggleClass("newsletterIsOpen");

  });

  $(".close-newsletter").on("click", function() {

		// State changes
		$(".newsletter__wrapper").removeClass("newsletterIsOpen");

	});


$(function () {
    $('#subForm').submit(function (e) {
        e.preventDefault();
        $.getJSON(
        this.action + "?callback=?",
        $(this).serialize(),
        function (data) {
            if (data.Status === 400) {
                alert("Error: " + data.Message);
            } else { // 200
                $("form").remove("#subForm");
                $(".newsletter").append("<p>Thanks for subscribing. You’ll be receiving a confirmation email.</p>");
            }
        });
    });
});
