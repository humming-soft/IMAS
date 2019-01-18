var Benefits = function () {
    var _addNew = function(Splash) {
        $( "#addrow5" ).click(function() {
            $("#tabBenefits5").each(function () {
                var tds = '<tr>';
                jQuery.each($('tr:last td', this), function () {
                    tds += '<td>' + $(this).html() + '</td>';
                });
                tds += '</tr>';
                if ($('tbody', this).length > 0) {
                    $('tbody', this).append(tds);
                } else {
                    $(this).append(tds);
                }
            });
        });
    };

    return {
        init: function(Splash){
            _addNew(Splash);
        }
    }
}();
document.addEventListener('DOMContentLoaded', function() {
    Benefits.init();
  });