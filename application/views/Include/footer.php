<footer>
<div class="container">

</div>
</footer>

<section class="bottom-footer">
  <div class="container">
    <div class="row">
      
    </div>
  </div>
</section>

<script type="text/javascript">
      $(document).ready(function(){

        <?php if($this->session->flashdata('send_email_sucess')){ ?>
            $('.alert-success').show().delay(5000).fadeOut();
      <?php  }
      elseif ($this->session->flashdata('send_email_error')) {?>
        $('.alert-danger').show().delay(5000).fadeOut();
      <?php } ?>

      <?php if($this->session->flashdata('send_email_sucess1')){ ?>
          $('.alert-success').show().delay(5000).fadeOut();
    <?php  }
    elseif ($this->session->flashdata('send_email_error1')) {?>
      $('.alert-danger').show().delay(5000).fadeOut();
    <?php } ?>

    <?php if($this->session->flashdata('send_email_sucess2')){ ?>
        $('.alert-success').show().delay(5000).fadeOut();
  <?php  }
  elseif ($this->session->flashdata('send_email_error2')) {?>
    $('.alert-danger').show().delay(5000).fadeOut();
  <?php } ?>
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        var url = window.location.href;
        var activePage = url;
        $('.nav-link').removeClass('active');
        // alert(activePage);
        $('.nav-link').each(function () {
          var linkPage = this.href;
          if (activePage == linkPage) {
              $(this).closest(".nav-link").addClass("active");
          }
        });
      });
    </script>

  </body>
</html>
