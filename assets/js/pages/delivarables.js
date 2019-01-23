var Delivarables = function () {

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