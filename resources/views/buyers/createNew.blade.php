<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create New Conversation</button><br>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog text-left">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class=" text-center" id="exampleModalLabel">Write Admin</h1>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contactForm">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Subject:</label>
            <input name="subject" type="text" class="form-control" id="subject">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Request Type:</label>
         
            <select id="requestType" name="requestType" class="form-control">
              <option>--select type --</option>
              <option value="delivery">Delivery</option>
              <option value="service">Service</option>
              <option value="fund">Fund</option>
              <option value="request">Request</option>

            </select>
          </div>
          <div class="form-group">
          
            <input name="receiver_id" value="1" type="text" class="form-control" id="receiver_id">
          </div>

          <div class="form-group">
            <label>Message:</label>
            <textarea name="body" class="form-control" id="body"></textarea>
          </div>

          <button id="submit"  class="btn btn-primary">Send message</button>
         
          </form>
      
      </div>
      <div class="modal-footer">
       
        
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

   <script type="text/javascript">

    $('#contactForm').on('submit',function(event){
        event.preventDefault();
        event.stopImmediatePropagation();

      

        subject = $('#subject').val();
        requestType = $('#requestType').val();
        receiver_id = $('#receiver_id').val();
        body = $('#body').val();
       

        $.ajax({
          url: "/sendMessage",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            subject:subject,
            requestType:requestType,
            receiver_id:receiver_id,
            body:body,
            
          },
          success:function(response){

            alert('Message was sent successfully');
            console.log(response);
          },
         });
        });
      </script>