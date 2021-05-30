
var z= 1;
$('#price').click(function(){
    if(z == 0 ){
        $("#price").attr('value', 'Market Valyou');
        $("#price").text('Market Valyou');
        z++;
    }else if(z == 1){
        $("#price").attr('value', 'Monthly Dividends');
        $("#price").text('Monthly Dividends');
        z++;
    } else if (z == 2){
        $("#price").attr('value', 'Stock Price');
        $("#price").text('Stock Price');
        z = 0;
    }
    
});
