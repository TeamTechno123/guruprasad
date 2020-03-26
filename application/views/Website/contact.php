<section class="page-top-img d-none d-sm-block">
  <div class="container-fluid">

  </div>
</section>


<section class="address-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h4 class="page-heading"> <strong>Get in touch</strong>  with us</h4>
        <hr class="web">
      </div>
      <div class="col-md-12 mt-3 mb-5">
        <h4  class="text-center mb-3">FCB system and Management Services</h4>
        <p class="text-center mb-1"></p>
        <p  class="text-center mb-1">Plot No. 10, Wale House, Pratibha Nagar,  Kolhapur Maharashtra - 416008 </p>
        <p  class="text-center mb-1">Email : info@fcbsms.com</p>
        <p  class="text-center mb-1">Mobile No. 9588617281</p>
      </div>
      <div class="col-md-12">
        <div class="col-md-12">
          <div class="alert alert-success " role="alert" style="display:none">
            Email Send Successfully
          </div>
          <div class="alert alert-danger" role="alert" style="display:none">
            Email Not Send please Try Again
          </div>
        </div>

      <div class="bt-blue">
        <form action="<?php echo base_url();?>Website/send_mail" method="post"  enctype="multipart/form-data" role="form" class="">
      <div class="row">
          <div class="col-md-4 pt-20">
          <h4 class="pb-4">Your Contact Information</h4>
          <div class="input-group mb-3">
              <label class="w-100" >First Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="First Name " aria-label="First Name " aria-describedby="basic-addon1" required>
            </div>

          <div class="input-group mb-3">
              <label class="w-100">Last Name</label>
              <input type="text" class="form-control" name="last_name" placeholder="Last Name " aria-label="Last Name " aria-describedby="basic-addon1">
            </div>

          <div class="input-group mb-3">
              <label class="w-100">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email " aria-label="Email " aria-describedby="basic-addon1" required>
            </div>

        <div class="input-group mb-3">
            <label class="w-100">Contact No.</label>
            <input type="text" class="form-control" name="mobile" placeholder="Contact"  aria-describedby="basic-addon1">
          </div>

      <div class="input-group mb-3">
          <label class="w-100">Designation</label>
          <input type="text" class="form-control" name="designation" placeholder="Designation"  aria-describedby="basic-addon1">
        </div>

      <div class="input-group mb-3">
          <label class="w-100">Organization</label>
          <input type="text" class="form-control" name="organization" placeholder="Organization" aria-label="Contact" aria-describedby="basic-addon1">
        </div>
      </div>


      <div class="col-md-4 pt-20">
          <h4 class="">Select Country & put your Comments</h4>



          <div class="input-group mb-3">
            <label class="w-100">Country </label>
            <div class="row w-100 ">
              <div class="col-md-12">
                <select class="form-control select2" name="country" id="country" data-placeholder="Select Country">
                  <option value="">Select Country</option>
                  <option value="India">India</option>
                  <option value="USA">USA</option>
                  <option value="China">China</option>
                  <option value="Japan">Japan</option>
                  <option value="Germany">Germany</option>
                </select>
              </div>

            </div>
          </div>

          <div class="input-group mb-3">
            <label class="w-100">Comments </label>
            <textarea class="form-control" name="message" rows="3" cols="80"></textarea>
            </div>
      </div>

      <div class="col-md-4 pt-20">
          <h4 class="text-center pb-5">Submit</h4>
          <button  type="submit" class="btn btn-outline-success mt-2 w-100">Submit</button>
      </div>
    </div>
    </form>
     </div>
  </div>

    </div>
  </div>
</section>
