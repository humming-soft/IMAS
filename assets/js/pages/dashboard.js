var Dashboard = function () {

    var _subSelect = function(s_el,t_el,burl){
        s_el.change(function(){
            var aid = $(this).find(':selected').val();
            $.getJSON(burl+'/'+aid,function(d){
                if(d.status==1){
                    t_el.prop('disabled', false);
                    t_el.find('option').not(':first').remove();
                    $.each(d.sectors,function(key,val){
                        var opt = $('<option />'); 
                        opt.val(key);
                        opt.text(val);
                        t_el.append(opt);
                   });
                }
            })
        });
    }; 

    var _submit = function(f){
        f.submit(function(e){
            e.preventDefault();
            $.post(f.attr('action'), f.serialize(), function(d) {
                if(d.status == 0) {
                    _hideLoader();
                    _updatecsrf(f,d.cname,d.cvalue);
                    f.find('.error-prog_name').html(d.msg_1);
                    f.find('.error-prog_desc').html(d.msg_2);
                    f.find('.error-proc_value').html(d.msg_3);
                    f.find('.error-proc_agency').html(d.msg_4);
                    f.find('.error-proc_sector').html(d.msg_5);
                    f.find('.error-prog_start_date').html(d.msg_6);
                    f.find('.error-prog_end_date').html(d.msg_7);
                }else{
                    location.reload();
                }
            }, 'json');
            return false;
        });
    };

    var _componentPikaday = function (s,e,md) {
        if (typeof Pikaday == 'undefined') {
            console.warn('Warning - Pikaday.js is not loaded.');
            return;
        }
        start_date = new Pikaday({
            field: s,
            minDate: md,
            format: 'DD-MMM-YYYY',
            onSelect: function() {
                end_date.setMinDate(this.getDate());
            }
        });

        end_date = new Pikaday({
            field: e,
            format: 'DD-MMM-YYYY',
            onSelect: function() {
                start_date.setMaxDate(this.getDate());
            }
        });
    };

    return {
        init: function(){
            _subSelect($('#s_agny'),$('#s_sctr'),base_url+'programmes/get_sector');
            _componentPikaday($('.start_date')[0],$('.end_date')[0],moment().toDate());           
            _submit($("#prog_c_f"));
        }
    }
}();