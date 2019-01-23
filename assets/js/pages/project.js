var Project = function () {

    var _menuSelected = function(menu){
        menu.addClass("selected");
    }; 

    return {
        init: function(){
            _menuSelected($("#m_overview"));
        }
    }
}();
document.addEventListener('DOMContentLoaded', function() {
    Project.init();
  });