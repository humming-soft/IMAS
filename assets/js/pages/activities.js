var Activities = function () {

    var _menuSelected = function(menu){
        menu.addClass("selected");
    }; 

    return {
        init: function(){
            _menuSelected($("#m_activity"));
        }
    }
}();
document.addEventListener('DOMContentLoaded', function() {
    Activities.init();
  });