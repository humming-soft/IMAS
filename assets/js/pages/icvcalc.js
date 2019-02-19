var ICVCalc = function () {
    var _icvCalcDirect = function() {
        $(document).on("change","#nonMlcItem",function(){
          /*  $('#nonMlcitemDesDiv').removeAttr('hidden');
            if($('#nonMlcItem').val() == 1){
                $('#nonMlcItemDes').find('option').not(':first').remove();
                $('#nonMlcItemDes').append('<option value="5">Equity Investment</option><option value="4">Bank Guarantee</option><option value="3">Project Financing</option><option value="3">Principal Guarantee for SBLC</option>');
            }
            if($('#nonMlcItem').val() == 2){
                $('#nonMlcItemDes').find('option').not(':first').remove();
                $('#nonMlcItemDes').append(' <option value="4">IPR transfer and Commercialization through JV/Partnership with local company</option> <option value="4">Technology Commercialization and roll out/Startup company</option> <option value="4">Tools/equipment, laboratory and workshop setup</option> <option value="4">Training and skill development courses</option> <option value="4">IPR development and sharing</option> <option value="3">Technology adaption to local environment and conditions</option> <option value="3">Transfer and resident of ToT project team assignment to OEMs</option> <option value="3">Subject Matter experts to local recipient assignment</option> <option value="3">Drawing, manuals and training documentations for recipient</option>');
            }
            if($('#nonMlcItem').val() == 3){
                $('#nonMlcItemDes').find('option').not(':first').remove();
                $('#nonMlcItemDes').append('<option value="N/A">Captive Market Access</option><option value="N/A">Market Access Assistance</option><option value="N/A">Globel Supply chain participation</option><option value="4">Organization International Certification</option>');
            }
            if($('#nonMlcItem').val() == 4){
                $('#nonMlcItemDes').find('option').not(':first').remove();
                $('#nonMlcItemDes').append('<option value="4">Technical Transfer ,skills and competency development for professional services</option><option value="4">On Job Traing</option><option value="3">Knowledge Transfer and skill development</option><option value="2">Non-Technical transfer and Skill Development</option><option value="2">Training and skills development courses general</option><option value="1">Higher learning placement program</option><option value="1">Higher value job creation</option>');
            }
            if($('#nonMlcItem').val() == 5){
                $('#nonMlcItemDes').find('option').not(':first').remove();
                $('#nonMlcItemDes').append('<option value="1">Incidental</option><option value="1">Others</option>');
            }*/
            $('#nonMlcitemDesDiv').removeAttr('hidden');
            var mulId=$(this).val();
            var csrfName = _getcsrfname(),
                csrfHash = _getcsrfcontent();
            $.post(base_url+'icvcalculation/get_multiplier_items',{"imas_csrf_token":csrfHash,"mulId":mulId}, function(d) {
                _setcsrfcontent(d.token);
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
        $(document).on("click",".nonMLCMultiplier",function(){
            $('#multipilerModelNonMLC').modal('show');
            $nonMLCM = $(this);
            $nonNV = $(this).closest("tr").find('.nonMLC');
            $MLCM = $(this).closest("tr").find('.MLCMultiplier');
            $NV = $(this).closest("tr").find('.MLC');
            $rowSum = $(this).closest("tr").find('.TotalRow');
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
                     if(!isNaN($rowSum.val())){
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
                 if(!isNaN(sum)){
                     $("#totalICV").val(sum);
                 }
             }

        });
        $(document).on("click",".MLCMultiplier",function(){
            $('#multipilerModelMLC').modal('show');
            $MLCM = $(this);
            $NV = $(this).closest("tr").find('.MLC');
            $nonMLCM = $(this).closest("tr").find('.nonMLCMultiplier');
            $nonNV = $(this).closest("tr").find('.nonMLC');
            $rowSum = $(this).closest("tr").find('.TotalRow');

            
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
                if(!isNaN(sum)){
                    $("#totalICV").val(sum);
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