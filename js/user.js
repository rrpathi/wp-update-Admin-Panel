$(document).ready(function(){
   var start =  $("#dt1").datepicker({
        minDate:0,

        numberOfMonths: 2,
        dateFormat: "dd-m-yy",
        onSelect: function(selected) {
        $("#dt2").datepicker("option","minDate", selected)
        }
    });
    var end = $("#dt2").datepicker({ 
        numberOfMonths: 2,
        dateFormat: "dd-m-yy",
        onSelect: function(selected) {
        $("#dt1").datepicker("option","maxDate", selected)
        }
    });  

    $("#phone_number").keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });
});

