
        $('#marque-selector1').change(function() {
        $('#model-selector1>option[name="'+this.value+'"]').show();
        $('#model-selector1>option[name!="'+this.value+'"]').hide();
        $('#model-selector1').val('--');
        $('#version-selector1').val('--');
        $('#annee-selector1').val('--');
    });

        $('#model-selector1').change(function() {
        $('#version-selector1>option[name="'+this.value+'"]').show();
        $('#version-selector1>option[name!="'+this.value+'"]').hide();
        $('#version-selector1').val('--');
        $('#annee-selector1').val('--');
    });

        $('#version-selector1').change(function() {
        $('#annee-selector1>option[name="'+$('#model-selector1').val()+this.value+'"]').show();
        $('#annee-selector1>option[name!="'+$('#model-selector1').val()+this.value+'"]').hide();
        $('#annee-selector1').val('--');
    });

    $('#marque-selector2').change(function() {
        $('#model-selector2>option[name="'+this.value+'"]').show();
        $('#model-selector2>option[name!="'+this.value+'"]').hide();
        $('#model-selector2').val('--');
        $('#version-selector2').val('--');
        $('#annee-selector2').val('--');
    });

    $('#model-selector2').change(function() {
        $('#version-selector2>option[name="'+this.value+'"]').show();
        $('#version-selector2>option[name!="'+this.value+'"]').hide();
        $('#version-selector2').val('--');
        $('#annee-selector2').val('--');
    });

    $('#version-selector2').change(function() {
        $('#annee-selector2>option[name="'+$('#model-selector2').val()+this.value+'"]').show();
        $('#annee-selector2>option[name!="'+$('#model-selector2').val()+this.value+'"]').hide();
        $('#annee-selector2').val('--');
    });

    $('#marque-selector3').change(function() {
        $('#model-selector3>option[name="'+this.value+'"]').show();
        $('#model-selector3>option[name!="'+this.value+'"]').hide();
        $('#model-selector3').val('--');
        $('#version-selector3').val('--');
        $('#annee-selector3').val('--');
    });

    $('#model-selector3').change(function() {
        $('#version-selector3>option[name="'+this.value+'"]').show();
        $('#version-selector3>option[name!="'+this.value+'"]').hide();
        $('#version-selector3').val('--');
        $('#annee-selector3').val('--');
    });

    $('#version-selector3').change(function() {
        $('#annee-selector3>option[name="'+$('#model-selector3').val()+this.value+'"]').show();
        $('#annee-selector3>option[name!="'+$('#model-selector3').val()+this.value+'"]').hide();
        $('#annee-selector3').val('--');
    });


    $('#marque-selector4').change(function() {
        $('#model-selector4>option[name="'+this.value+'"]').show();
        $('#model-selector4>option[name!="'+this.value+'"]').hide();
        $('#model-selector4').val('--');
        $('#version-selector4').val('--');
        $('#annee-selector4').val('--');
    });

    $('#model-selector4').change(function() {
        $('#version-selector4>option[name="'+this.value+'"]').show();
        $('#version-selector4>option[name!="'+this.value+'"]').hide();
        $('#version-selector4').val('--');
        $('#annee-selector4').val('--');
    });

    $('#version-selector4').change(function() {
        $('#annee-selector4>option[name="'+$('#model-selector4').val()+this.value+'"]').show();
        $('#annee-selector4>option[name!="'+$('#model-selector4').val()+this.value+'"]').hide();
        $('#annee-selector4').val('--');
    });

