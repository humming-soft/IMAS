var Benefits = function () {
    var _addNew = function() {
        $( "#addrowNew" ).click(function() {
            $("#tabBenefits").each(function () {
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
    var _deleteNew = function() {
        $(document).on("click",".deleteRow",function(){
            if (($('#tabBenefits tr').length) > 2) {
                $(this).parents("tr").remove();
            }
        });
    };
    var _menuSelected = function(menu){
        menu.addClass("selected");
    };
    return {
        init: function(){
            _addNew();
            _deleteNew();
            _menuSelected($("#m_benefits"));

        }
    }
}();
document.addEventListener('DOMContentLoaded', function() {
    Benefits.init();
});
