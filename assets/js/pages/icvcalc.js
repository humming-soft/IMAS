var ICVCalc = function () {
    var _icvCalcDirect = function() {
        $(document).on("change","#nonMlcItem",function(){
            $('#nonMlcitemDesDiv').removeAttr('hidden');
            var mulId=$(this).val();
            var csrfName = _getcsrfname(),
                csrfHash = _getcsrfcontent();
            $.post(base_url+'icvcalculation/get_multiplier_items',{"imas_csrf_token":csrfHash,"mulId":mulId}, function(d) {
                _setcsrfcontent(d.token);
                $('#icv_cal_l').find("[name='imas_csrf_token']").val(d.token);
                if(d.status == 1) {
                    $('#nonMlcItemDes').find('option').not(':first').remove();
                    $.each(d.multiplier,function(key,val){
                        var opt = $('<option />');
                        opt.val(key);
                        opt.text(val);
                        $('#nonMlcItemDes').append(opt);
                    });
                }else{
                    _hideLoader();
                }
            }, 'json');

        });
        $(document).on("change","#MlcItem",function(){
            $('#mlcitemDesDiv').removeAttr('hidden');
            var mulId=$(this).val();
            var csrfName = _getcsrfname(),
                csrfHash = _getcsrfcontent();
            $.post(base_url+'icvcalculation/get_multiplier_items',{"imas_csrf_token":csrfHash,"mulId":mulId}, function(d) {
                _setcsrfcontent(d.token);
                $('#icv_cal_l').find("[name='imas_csrf_token']").val(d.token);
                if(d.status == 1) {
                    $('#MlcItemDes').find('option').not(':first').remove();
                    $.each(d.multiplier,function(key,val){
                        var opt = $('<option />');
                        opt.val(key);
                        opt.text(val);
                        $('#MlcItemDes').append(opt);
                    });
                }else{
                    _hideLoader();
                }
            }, 'json');
        });
        $(document).on("click",".muValue",function(){
            $('#modelMu').modal('show');
            $Mutitle = $(this).closest("tr").find('.mileName');
            $muContaineData = $(this).closest("tr").find('#nonMLCMU');
            if($muContaineData.attr("data-nkea") !== "-1" || $muContaineData.attr("data-offset") !== "-1"  || $muContaineData.attr("data-focus") !== "-1" ){
                 $( "#nkea" ).val($muContaineData.attr("data-nkea"));
                 $( "#focus" ).val($muContaineData.attr("data-focus"));
                 $( "#offset" ).val($muContaineData.attr("data-offset"));
             }
        });
       $(document).on("click",".muValueMlc",function(){
            $('#modelMu').modal('show');
            $Mutitle = $(this).closest("tr").find('.mileName');
            $muContaineData= $(this).closest("tr").find('#MLCMU');
            if($muContaineData.attr("data-nkea") !== "-1" || $muContaineData.attr("data-offset") !== "-1"  || $muContaineData.attr("data-focus") !== "-1" ){
                $( "#nkea" ).val($muContaineData.attr("data-nkea"));
                $( "#focus" ).val($muContaineData.attr("data-focus"));
                $( "#offset" ).val($muContaineData.attr("data-offset"));
            }
        });
        $('#modelMu').on('hidden.bs.modal', function () {
            var nkea =$( "#nkea option:selected" ).val();
            var focus =$( "#focus option:selected" ).val();
            var offset =$( "#offset option:selected" ).val();
            $muContaineData.attr("data-nkea",nkea);
            $muContaineData.attr("data-offset",offset);
            $muContaineData.attr("data-focus",focus);
            /*       var nkeaV =$( "#nkea option:selected" ).val();
                     var focusV =$( "#focus option:selected" ).val();
                     var offsetV =$( "#offset option:selected" ).val();
                     var activityId=$mileID.val();*/
          /*  var csrfName = _getcsrfname(),
                csrfHash = _getcsrfcontent();
            _showLoader();
            $.post(base_url+'icvcalculation/add_mu',{"imas_csrf_token":csrfHash,"id":$mileID.val(),"nkeaID":nkeaV,"focusID":focusV,"offfsetID":offsetV}, function(d) {
                _hideLoader();
                _setcsrfcontent(d.token);
                if(d.status == 1) {
                    _hideLoader();
                    gantt.clearAll();
                    gantt.parse(d.milestone);
                }else{
                    _hideLoader();
                }
            }, 'json');*/
         /*   $('.nonmlcTab'+activityId).append(' <tr><th>'+$mlcornon+'</th></tr><tr><td>'+nkea+'</td></tr><tr><td>'+focus+'</td></tr><tr><td>'+offset+'</td></tr>');*/
        });
     
        $(document).on("keyup",".nonMLC",function(){
            var sum = 0;
            var sumTotal=0;
            $nonMul = $(this).closest("tr").find('.nonMLCMultiplier');
            $activitySum = $(this).closest("tr").find("#milestoneSID");
            if($nonMul.val() == 0 || isNaN($nonMul.val())){
            }else{
                $(".nonMLC").each(function(){
                    var sumrow = 0;
                    sum += +$(this).val() * $(this).closest("tr").find('.nonMLCMultiplier').val();
                    sumrow = ($(this).val() * $(this).closest("tr").find('.nonMLCMultiplier').val()) + ( $(this).closest("tr").find('.MLCMultiplier').val() * $(this).closest("tr").find('.MLC').val()) ;
                    $(this).closest("tr").find('.TotalRow').val(sumrow);
                });
                $(".TotalRow").each(function(){
                    sumTotal += +$(this).val();
                });
                var activitysum = 0;
                $(".rowtotal"+$activitySum.val()).each(function(){
                    activitysum += +$(this).val();
                });
                if(!isNaN(activitysum)){
                    $(".icv"+$activitySum.val()).text(activitysum);
                }
                $("#sumNonMLC").val(sum);
                $("#totalICV").val(sumTotal);
            }
        });
        $(document).on("keyup",".MLC",function(){
            var sum = 0;
            var sumTotal=0;
            $nonMul = $(this).closest("tr").find('.MLCMultiplier');
            $activitySum = $(this).closest("tr").find("#milestoneSID");
            if($nonMul.val() == 0 || isNaN($nonMul.val())){
            }else{
                $(".MLC").each(function(){
                    var sumrow = 0;
                    sum += +$(this).val() * $(this).closest("tr").find('.MLCMultiplier').val();
                    sumrow = ($(this).val() * $(this).closest("tr").find('.MLCMultiplier').val()) + ( $(this).closest("tr").find('.nonMLCMultiplier').val() * $(this).closest("tr").find('.nonMLC').val()) ;
                    $(this).closest("tr").find('.TotalRow').val(sumrow);
                });
                $(".TotalRow").each(function(){
                    sumTotal += +$(this).val();
                });
                var activitysum = 0;
                $(".rowtotal"+$activitySum.val()).each(function(){
                    activitysum += +$(this).val();
                });
                if(!isNaN(activitysum)){
                    $(".icv"+$activitySum.val()).text(activitysum);
                }
                $("#sumMLC").val(sum);
                $("#totalICV").val(sumTotal);
            }
        });
        $(document).on("click",".nonMLCMultiplierChoose",function(){
            $('#multipilerModelNonMLC').modal('show');
            $nonMLCM = $(this).closest("tr").find('.nonMLCMultiplier');
            $nonNV = $(this).closest("tr").find('.nonMLC');
            $MLCM = $(this).closest("tr").find('.MLCMultiplier');
            $NV = $(this).closest("tr").find('.MLC');
            $rowSum = $(this).closest("tr").find('.TotalRow');
            $activitySum = $(this).closest("tr").find("#milestoneSID");
        });
        $('#multipilerModelNonMLC').on('hidden.bs.modal', function () {
            $nonMLCM.val($('#nonMlcItemDes').val());
             if(!isNaN($nonMLCM.val())){
                 if($nonNV.val() == "" || isNaN($nonNV.val())){
                     alert("Please Enter Nominal Value");
                     $nonMLCM.val("");
                 }else{
                     if($MLCM.val()== "" || $MLCM.val()== "N/A"){
                         curruntMLCM = 0 ;
                     }else{
                         curruntMLCM = $MLCM.val();
                     }
                     if($NV.val()== "" || isNaN($NV.val())){
                         curruntMLCNV = 0 ;
                     }else{
                         curruntMLCNV = $NV.val();
                     }
                     $rowSum.val(((parseInt($nonNV.val()) * parseInt( $nonMLCM.val())) + (parseInt(curruntMLCNV) * parseInt(curruntMLCM))));
                     if(!isNaN($rowSum.val()))
                     {
                         var sumRow = 0;
                         sumRow += + parseInt($("#sumNonMLC").val()) + parseInt($rowSum.val()) ;
                         if(!isNaN(sumRow)){
                             $("#sumNonMLC").val(sumRow);
                         }
                     }
                 }
                 var sum = 0;
                 $(".TotalRow").each(function(){
                     sum += +$(this).val();
                 });
                 var activitysum = 0;
                 $(".rowtotal"+$activitySum.val()).each(function(){
                     activitysum += +$(this).val();
                 });
                 if(!isNaN(sum)){
                     $("#totalICV").val(sum);
                 }
                 if(!isNaN(activitysum)){
                     $(".icv"+$activitySum.val()).text(activitysum);
                 }
             }
        });

        $(document).on("click",".muShow",function(){
            $mileID = $(this).closest("tr").find('.mileID');
            var activityId=$mileID.val();
            if ( $('.muEntitlementShow'+activityId).css('display') == 'none'){
                $('.muEntitlementShow'+activityId).attr('hidden',false);
            }else{
                $('.muEntitlementShow'+activityId).attr('hidden',true);
            }

        });
        $(document).on("click",".MLCMultiplierChoose",function(){
            $('#multipilerModelMLC').modal('show');
            $MLCM = $(this).closest("tr").find('.MLCMultiplier');
            $NV = $(this).closest("tr").find('.MLC');
            $nonMLCM = $(this).closest("tr").find('.nonMLCMultiplier');
            $nonNV = $(this).closest("tr").find('.nonMLC');
            $rowSum = $(this).closest("tr").find('.TotalRow');
            $activitySum = $(this).closest("tr").find("#milestoneSID");
        });
        $('#multipilerModelMLC').on('hidden.bs.modal', function () {
            $MLCM.val($('#MlcItemDes').val());
            if(!isNaN($MLCM.val())){
                if($NV.val() == "" || isNaN($NV.val())){
                    alert("Please Enter Nominal Value for MLC");
                    $MLCM.val("");
                }else{
                    if($nonMLCM.val()== "" || $nonMLCM.val()== "N/A"){
                        curruntnonMLCM = 0 ;
                    }else{
                        curruntnonMLCM = $nonMLCM.val();
                    }
                    if($nonNV.val()== "" || isNaN($nonNV.val())){
                        curruntMLCnonNV = 0 ;
                    }else{
                        curruntMLCnonNV = $nonNV.val();
                    }
                    $rowSum.val(((parseInt($NV.val()) * parseInt( $MLCM.val())) + (parseInt(curruntMLCnonNV) * parseInt(curruntnonMLCM))));
                    var sumRowMLCVal = (parseInt($NV.val()) * parseInt( $MLCM.val()));
                    if(!isNaN(sumRowMLCVal)){
                        var sumRowMLC = 0;
                        sumRowMLC += + parseInt($("#sumMLC").val()) + parseInt(sumRowMLCVal) ;
                        if(!isNaN(sumRowMLC)){
                            $("#sumMLC").val(sumRowMLC);
                        }
                    }
                }
                var sum = 0;
                $(".TotalRow").each(function(){
                    sum += +$(this).val();
                });
                var activitysum = 0;
                $(".rowtotal"+$activitySum.val()).each(function(){
                    activitysum += +$(this).val();
                });
                if(!isNaN(sum)){
                    $("#totalICV").val(sum);
                }
                if(!isNaN(activitysum)){
                    $(".icv"+$activitySum.val()).text(activitysum);
                }
            }
        });
    };
    return {
        init: function(){
            _icvCalcDirect();
        }
    }
}();
document.addEventListener('DOMContentLoaded', function() {
    ICVCalc.init();
  });