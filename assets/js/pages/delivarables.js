var Delivarables = function () {
    $(".icvCheck").change(function() {
        var values =0;
        $(".deliverables").find('input[type="checkbox"]:checked').each(function () {
            values += +$(this).closest("tr").find('.tdIcv').text();
            $(".totalClamed") .text(values);
            $('#totalClamedV').val(values);
            var diff= parseFloat($(".totalIcv").text()) - parseFloat(values);
            $(".balanceClamed") .text(diff);
        });
    });
    var _menuSelected = function(menu){
        menu.addClass("selected");
    }; 

    return {
        init: function(){
            _menuSelected($("#m_delivarables"));
        }
    }
}();
document.addEventListener('DOMContentLoaded', function() {
    Delivarables.init();
  });