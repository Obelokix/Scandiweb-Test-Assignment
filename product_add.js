$(document).ready(function() {
 
    let data = [];
    let returnedData = [];
    console.log( "window loaded" );
    // Fetch SKUs from database
    $.ajax({    
        method: "POST",
        url: "sku_data.php", 
        dataType: 'json',                 
        success: function(response){ 
            returnedData = response; 
            for (var i = 0, len = returnedData.length; i < len; i++) {
                data[i] = returnedData[i].sku;
            }
        }

        
    });
    
    // Dynamic product form
    $("#productType").change(function(){
        // DVD-disc chosen
        if($("#productType option:selected").text() == "DVD-disc") {
            $("#size").attr("required", "true");
            $("#size_option").removeClass("d-none");
            
            // Hide other product type fields
            $("#height, #width, #length, #weight").removeAttr("required");
            $("#height, #width, #length, #weight").val("");
            $("#dimensions_option, #weight_option").addClass("d-none");
        }
        // Furniture chosen
        else if($("#productType option:selected").text() == "Furniture") {
            $("#height, #width, #length").attr("required", "true");
            $("#dimensions_option").removeClass("d-none");

            // Hide other product type fields
            $("#size, #weight_option").removeAttr("required");
            $("#size, #weight").val("");
            $("#size_option, #weight_option").addClass("d-none");
        }
        // Book chosen
        else if($("#productType option:selected").text() == "Book") {
            $("#weight").attr("required", "true");
            $("#weight_option").removeClass("d-none");

            // Hide other product type fields
            $("#size, #height, #width, #length").removeAttr("required");
            $("#size, #height, #width, #length").val("");
            $("#size_option, #dimensions_option").addClass("d-none");
        }
        else {
            // Hide all
            $("#size_option, #dimensions_option, #weight_option").addClass("d-none");
        }
    });

    // User's input validation
    $(":input").keyup(function() {
        $(this).parent().addClass("was-validated");
        
        if(this.validity.valueMissing) {
            $(this).next().text("Please, submit required data.");
        }
        else if(this.validity.patternMismatch) {
            $(this).next().text("Please, provide the data of indicated type.");
            console.log(this.validity.patternMismatch);
        }
    });

    // Check if sku provided by the user already exists in database
    $("#sku").keyup(function() {
        let exists = false;
        // Loop through array with fetched SKUs and check if user input matches any of them
        for(let i = 0; i < data.length; i++) {
            if($("#sku").val() == data[i]) {
                exists = true;
            }
        }

        // Show validation messages if SKU exists in database or not
        if(exists) {
            this.setCustomValidity("Invalid field.");
            $(this).next().text("SKU already exists.");
            console.log("SKU already exists!");
        }
        else {
            this.setCustomValidity("");
        }
    });
});
