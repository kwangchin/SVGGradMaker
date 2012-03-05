$(document).ready(
  function() {
    $('.picker').jPicker();
    
    window.prettyPrint && prettyPrint();
    
    $('.direction > img').click(
      function() {
        if ($(this).data('value')) {
          $(this).parent().parent().find('img').show();
          $(this).parent().parent().find('img').show();
          $(this).parent().parent().find('img:first-child').hide();
          $(this).parent().parent().find('div').removeClass('selected');
          $(this).parent().addClass('selected');
          $(this).hide();
          $(this).prev().show();
          $('#direction').val($(this).data('value'));
          generateCss();
        }
      }
    );
    
    $('input').change(
      function() {
        generateCss();
      }
    );
    
    $('.export input').click(
      function() {
        $(this).select();
      }
    );
  }
);

function generateCss() {
  $.ajax({
    type: 'POST',
    url: 'gen.php',
    data: $('form').serialize(),
    success: function(data) {
      $('#preview').addClass('focus');
      $('#export').addClass('focus');
      $('#preview').attr('src', 'data:image/svg+xml;base64,' + data);
      $('#export').val('background-image: url(\'data:image/svg+xml;base64,' + data + '\');');
      setTimeout('$(\'#preview\').removeClass(\'focus\');', '500');
      setTimeout('$(\'#export\').removeClass(\'focus\');', '500');
    }
  });
}