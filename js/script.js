
// for SPECIAL ATTRIBUTE with helpfull info. AJAX
function fetch_select (val){
    $.ajax({
        type: 'post',
        url: 'create.php',
        datatype:'json',
        data: { option:val },
        success: function (response) {
        $('#print-ajax').html(response);
        }
    });
}

// for SPECIAL ATTRIBUTE with helpfull info. JS
$('#inputGroupSelect01').on('change', function(){
    if($(this).val() === 'Please, provide DVD Memory Size in MB format. Example: 120MB') {
    $("#weight, #height, #width, #length").prop('disabled', true); 
    }
    else if($(this).val() === 'Please, provide Book weight in KG format. Example: 5 KG') {
    $("#size, #height, #width, #length").prop('disabled', true);
    }
    else if($(this).val() === 'Please, provide furniture dimensions in HxWxL format. Example: 120x100x70 CM') {
    $("#size, #weight").prop('disabled', true);
    }
});
  