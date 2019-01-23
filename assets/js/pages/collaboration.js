var Collaboration = function () {
    var _sentMessage = function() {
        $( "#snt-message" ).click(function() {
            var txt_msg = $('#txt-message').val();
            var mdg_body = '<div class="chat-message self">'+
            '<div class="chat-message-content-w"><div class="chat-message-content">'+txt_msg+'</div></div>'+
            '<div class="chat-message-date">'+getTime()+'</div><div class="chat-message-avatar"><img alt="" src="'+base_url+'assets/img/avatar1.png"></div></div>';
            if(txt_msg.length > 0){
                if($('.chat-content .chat-date-separator span:last').text() !="Today"){
                    $(".chat-content").append('<div class="chat-date-separator"><span>Today</span></div>');
                }
                $(".chat-content").append(mdg_body);
                $('#txt-message').val('');
            }

        });
    };

    var getTime = function() {
        var date = new Date();
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'pm' : 'am';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0'+minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;
        return strTime;
      };

    var _menuSelected = function(menu){
        menu.addClass("selected");
    }; 

    return {
        init: function(){
            _sentMessage();
            _menuSelected($("#m_collaboration"));
        }
    }
}();
document.addEventListener('DOMContentLoaded', function() {
    Collaboration.init();
  });