var ICVCalc = function () {
    var _icvCalcDirect = function() {
        $(document).on("change","#item",function(){
            $('#itemDesDiv').removeAttr('hidden');
            if($('#item').val() == 1){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="5">Equity Investment</option><option value="4">Bank Guarantee</option><option value="3">Project Finacing</option><option value="3">Principal Guarantee for SBLC</option>');
            }
            if($('#item').val() == 2){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append(' <option value="4">IPR transfer and Commercialization through JV/Partnership with local company</option> <option value="4">Technology Commercialization and roll out/Start up company</option> <option value="4">Tools/equipment, laboratory and workshop setup</option> <option value="4">Training and skil development cources</option> <option value="4">IPR development and sharing</option> <option value="3">Technology adaption to local environment and conditions</option> <option value="3">Transfer and resident of ToT project team assignment to OEMs</option> <option value="3">Subject Matter experts to local recipient assignment</option> <option value="3">Drawing,manuals and training documentations for recipient</option>');
            }
            if($('#item').val() == 3){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="N/A">Captive Market Access</option><option value="N/A">Market Access Assistance</option><option value="N/A">Globel Supply chain participation</option><option value="4">Organization International Certification</option>');
            }
            if($('#item').val() == 4){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="4">Technical Transfer ,skils and competency development for prefessional services</option><option value="4">On Job Traing</option><option value="3">Knowledge Transfer and skil development</option><option value="2">Non Technical transfer and Skil Development</option><option value="2">Training and skils development courses general</option><option value="1">Higher learning placement programe</option><option value="1">Higher value job creation</option>');
            }
            if($('#item').val() == 5){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="1">Incidental</option><option value="1">Others</option>');
            }
        });
        $(document).on("change","#item1",function(){
            $('#itemDesDiv1').removeAttr('hidden');
            if($('#item1').val() == 1){
                $('#MlcItemDes').find('option').not(':first').remove();
                $('#MlcItemDes').append('<option value="4">Design,systems integration work knowledge and skils development</option><option value="4">Technology upgrading,knowledge/Skils transfer and certification(People,Product & process)</option><option value="2">Installation,Testing,Commissioning and Project Management</option>');
            }
            if($('#item1').val() == 2){
                $('#MlcItemDes').find('option').not(':first').remove();
                $('#MlcItemDes').append('<option value="3">Parts and Component, Main Equipment,Test Equipment - Custom Made</option><option value="1">Parts and Component, Main Equipment,Test Equipment - Off The Shelves</option>');
            }
            if($('#item1').val() == 3){
                $('#MlcItemDes').find('option').not(':first').remove();
                $('#MlcItemDes').append('<option value="3">Plant Equipment and mechinary</option><option value="4">Tools,Jigs and Fixtures</option>');
            }
            if($('#item1').val() == 4){
                $('#MlcItemDes').find('option').not(':first').remove();
                $('#MlcItemDes').append('<option value="1">Integrated logistic support</option><option value="1">Forwarding haulage and transportation,storage and warehouse</option><option value="1">Local Insurance</option>');
            }
        });
        $(document).on("click",".viewDeliver",function(){
            $('#multipilerModel3').modal('show');
        });
        $(document).on("click",".viewAttachments",function(){
            $('#multipilerModel4').modal('show');
        });

        $(document).on("click",".multipilerModel",function(){
            $('#multipilerModel').modal('show');
           /* $source = $(this).find('input[type=text]');*/
            $sourcenon = $(this).closest("tr").find('.nonMLCM');
            $rowSum = $(this).closest("tr").find('.rowSUM');
            $source2 = $(this).closest("tr").find('.nonMLC').val();
            $source = $(this).closest("tr").find('.MLCM').val();
            $source3 = $(this).closest("tr").find('.mlc').val();
        });
        $('#multipilerModel').on('hidden.bs.modal', function () {
            $sourcenon.val($(this).find('#itemdes').val());
            var totalICV= $("#columnSumICV").val();
            var totalMLC = $("#columnSumMLC").val();
            var totalSum = $("#columnSumTotalICV").val();
            if(isNaN($source2)){
                var nonMLC =  0.00;
            }else{
                var nonMLC =  $source2;
            }

            var mult =  $sourcenon.val();
            if(!isNaN( mult)){
                var totalCurrentICV=parseInt(totalICV) + ( parseInt(nonMLC) * parseInt(mult) ) ;
                $("#columnSumICV").val(totalCurrentICV);
                $("#columnSumICV1").val(totalCurrentICV);
                var valueOne= $sourcenon .val();
                var valueTWo= $source2;
                if($source == ""){
                    valueFour = 0;
                }else{
                    var valueFour= $source;
                }
                if($source3 == ""){
                    var valueThree= 0;
                }else{
                    var valueThree= $source3;
                }

                var final= ((parseInt(valueOne) * parseInt(valueTWo)) + (parseInt(valueFour) * parseInt(valueThree)));
                if(!isNaN(final)){
                    $rowSum.val(final);
                }else{
                    $rowSum.val(0.00);
                }


            }
            var sum = 0;
            $(".rowSUM").each(function(){
                sum += +$(this).val();
            });
            if(!isNaN(sum)){
                $("#columnSumTotalICV").val(sum);
                $("#columnSumTotalICV1").val(sum);
            }else{
                alert("Nominal Value NON MLC Value is missing!");
                $("#columnSumTotalICV").val(0.00);
                $("#columnSumTotalICV1").val(0.00);
            }


        });
        $(document).on("click",".multipilerModel1",function(){
            $('#multipilerModel1').modal('show');
            /* $source = $(this).find('input[type=text]');*/
            $source = $(this).closest("tr").find('.MLCM');
            $source3 = $(this).closest("tr").find('.mlc').val();
            $sourcenon = $(this).closest("tr").find('.nonMLCM').val();
            $rowSum = $(this).closest("tr").find('.rowSUM');
            $source2 = $(this).closest("tr").find('.nonMLC');
        });

        $('#multipilerModel1').on('hidden.bs.modal', function () {
            $source.val($(this).find('#itemdes1').val());
            var totalICV= $("#columnSumICV").val();
            var totalMLC = $("#columnSumMLC").val();
            var totalSum = $("#columnSumTotalICV").val();
            if(isNaN($source3)){
                var mlc =  0.00;
            }else{
                var mlc =  $source3;
            }
            var mult =  $source.val();
            if(!isNaN( mult)){

                if($source2.val() == ""){
                    var valueTWo= 0;
                }else{
                    var valueTWo= $source2.val();
                }

                var valueFour= $(this).find('#itemdes1').val();
                var valueThree= $source3;
                if($sourcenon =="" ){
                    var valueOne= 0;
                }else{
                    var valueOne= $sourcenon;
                }
                var totalCurrentMLC=parseInt(totalMLC) + ( parseInt(mlc) * parseInt(mult) ) ;
                if(!isNaN(totalCurrentMLC)){
                    $("#columnSumMLC").val(totalCurrentMLC);
                    $("#columnSumMLC1").val(totalCurrentMLC);
                }else{
                    alert("Nominal Value MLC Value is missing!");
                    $("#columnSumMLC").val(0.00);
                    $("#columnSumMLC1").val(0.00);
                }


                var final= ((parseInt(valueOne) * parseInt(valueTWo)) + (parseInt(valueFour) * parseInt(valueThree)));
                if(!isNaN(final)){
                    $rowSum.val(final);
                }else{
                    $rowSum.val(0.00);
                }


            }
            var sum = 0;
            $(".rowSUM").each(function(){
                sum += +$(this).val();
            });
            if(!isNaN(sum)){
                $("#columnSumTotalICV").val(sum);
                $("#columnSumTotalICV1").val(sum);
            }else{
                $("#columnSumTotalICV").val(0.00);
                $("#columnSumTotalICV1").val(0.00);
            }

            /* var v1 = $("#columnSumTotalICV").val();
             var v2 = $rowSum .val();
             var totalCureentICV =  parseInt(v1) + parseInt(v2);
             $("#columnSumTotalICV").val(totalCureentICV);*/
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