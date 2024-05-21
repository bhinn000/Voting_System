var hello;

$(document).ready(function () {
  $('.radio-images img').click(function () {
    var value = $(this).data('value');
    var input = $('input[name="option"][value="' + value + '"]');
    if (input.length) {
      input.prop('checked', true);
      $('.radio-images img').removeClass('selected');
      $(this).addClass('selected');
    }
  });
});

$('input[name="mayor"]').on('change', function () {
  $('#mayor').text("");
  let selectedOption = $('input[name="mayor"]:checked').attr('value');
  $('#mayor').append(selectedOption + "=1 ");

  $('input[name="mayor"]').not(':checked').each(function () {
    var unselectedOption = $(this).val();
    $('#mayor').append(unselectedOption + "=0 ");
  });

  console.log("Mayor => " , $('#mayor').text());
  $hello=("Mayor => " , $('#mayor').text());
});


// $('input[name="mayor"]').on('change', function () {
//   $('#mayor').text("");
//   let selectedOption = $('input[name="mayor"]:checked').attr('value');
//   $('#mayor').append(selectedOption + "=1 ");

//   $('input[name="mayor"]').not(':checked').each(function () {
//     var unselectedOption = $(this).val();
//     $('#mayor').append(unselectedOption + "=0 ");
//   });

//   console.log("Mayor => " , $('#mayor').text());
//   let hello = "Mayor => " + $('#mayor').text();
  
//   $.ajax({
//     type: 'POST',
//     url: 'example.php',
//     data: {hello: hello},
//     success: function(response) {
//       console.log(response);
//     },
//     error: function() {
//       console.log('Error occurred');
//     }
//   });
// });




$('input[name="deputy"]').on('change', function () {
  $('#deputy').text("");
  let selectedOption = $('input[name="deputy"]:checked').attr('value');
  $('#deputy').append(selectedOption + "=1 ");

  $('input[name="deputy"]').not(':checked').each(function () {
    var unselectedOption = $(this).val();
    $('#deputy').append(unselectedOption + "=0 ");
  });
  console.log("Deputy Mayor => " ,$('#deputy').text());
});

$('input[name="president"]').on('change', function () {
  $('#president').text("");
  let selectedOption = $('input[name="president"]:checked').attr('value');
  $('#president').append(selectedOption + "=1 ");

  $('input[name="president"]').not(':checked').each(function () {
    var unselectedOption = $(this).val();
    $('#president').append(unselectedOption + "=0 ");
  });
  console.log("President => " ,$('#president').text());
});

$('input[name="vice"]').on('change', function () {
  $('#vice').text("");
  let selectedOption = $('input[name="vice"]:checked').attr('value');
  $('#vice').append(selectedOption + "=1 ");

  $('input[name="vice"]').not(':checked').each(function () {
    var unselectedOption = $(this).val();
    $('#vice').append(unselectedOption + "=0 ");
  });
  console.log("Vice President => " , $('#vice').text());
});


function updateForm() {
            // Retrieve console output
            const consoleOutput = "apple=2 motorola=100000 samsung=0 mi=0 oppo=0 nokia=0";

            // Extract device counts
            const counts = consoleOutput.match(/([a-z]+)=\d+/g).map(item => parseInt(item.split("=")[1]));

            // Update form values
            document.getElementById("apple").value = counts[0];
            document.getElementById("motorola").value = counts[1];
            document.getElementById("samsung").value = counts[2];
            document.getElementById("mi").value = counts[3];
            document.getElementById("oppo").value = counts[4];
            document.getElementById("nokia").value = counts[5];
        }

        // Update form with console output
        updateForm();

