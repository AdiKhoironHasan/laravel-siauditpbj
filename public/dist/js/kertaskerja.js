(function ($) {
    $(document).on("change", "#A", function () {
        if ($(this).prop("checked")) {
            $("#B").attr("disabled", false);
        } else {
            $("#B").attr("disabled", true);
        }
    });
});
