$(document).ready(function(){
    // Put checked input checkboxes in array
    let checkedInputs = $('input:checked');
    let checkedIds = [];

    checkedInputs.each(function() {
    checkedIds.push($(this).attr('id'));
});

    $('#delete-product-btn').click(function () { 
      $('input[type=checkbox]:checked').parent().parent().parent().remove();
      $.ajax({ 
          type: "POST", 
          url: "delete_product.php", 
          data: { checkedIds: JSON.stringify(checkedIds) }, 
          success: function(response) {
            console.log(response);
        },
        error: function() {
            console.log("Error");
        }
        }); 
    });

  // Add a change event handler to all checkboxes on the page
  $('input[type="checkbox"]').change(function() {
    // If the checkbox is checked, add its id to the array
    if ($(this).is(':checked')) {
      checkedIds.push($(this).attr('id'));
    }
    // If the checkbox is unchecked, remove its id from the array
    else {
      var index = checkedIds.indexOf($(this).attr('id'));
      if (index > -1) {
        checkedIds.splice(index, 1);
      }
    }
  });
});