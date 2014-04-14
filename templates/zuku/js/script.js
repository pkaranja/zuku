
$(document).ready(function() {
    $('#mobileMenu').sidr({
      name: 'sidr',
      side: 'right'
    });

    $("#popular,#kids,#series").owlCarousel({
      items : 4,
      lazyLoad : true,
      pagination:  false,
      responsiveRefreshRate: 10,
      navigationText:["<i class='glyphicon glyphicon-chevron-left'></i>","<i class='glyphicon glyphicon-chevron-right'></i>"],
      navigation : true
    });

    $('.popup').magnificPopup({
      type: 'ajax',
      overflowY: 'scroll'
    });

    $('#callme #supportme').click(function(){
      $('#spinner').show();
    });

    $.validate({
      form : '#callme',
      validateOnBlur : false, 
      errorMessagePosition : 'top',
      scrollToTopOnError : false, 
      onSuccess : function() {
          var recepient="pkaranja@aimgroup.co.tz";
          var sender = $('#email').val();
          var subject = "Zuku Customer Feedback Request";
          var name = $('#name').val();
          var number = $('#number').val();
          var message=name+number;

          $.post("index.php?option=com_mailto&task=sendEmail&format=RAW&tmpl=component", {recepient:recepient, sender:sender, subject:subject, message:message}, function(response){
              $('#spinner').hide();
              $('.response').show();
          });

        return false;
      }
    });

    $.validate({
      form : '#support',
      validateOnBlur : false, 
      errorMessagePosition : 'top',
      scrollToTopOnError : false, 
      onSuccess : function() {
          var recepient="pkaranja@aimgroup.co.tz";
          var sender = $('#email').val();
          var subject = "Zuku Support Request";
          var name = $('#firstname').val() + " " + $('#lastname').val();
          var number = $('#number').val();
          var message=$('#message').val();

          $.post("index.php?option=com_mailto&task=sendEmail&format=RAW&tmpl=component", {recepient:recepient, sender:sender, subject:subject, message:message}, function(response){
              $('#spinner').hide();
              $('.response').show();
          });

        return false;
      }
    });

    $.validate({
      form : '#login-form',
      validateOnBlur : false, 
      errorMessagePosition : 'top',
      scrollToTopOnError : false, 
    });
});