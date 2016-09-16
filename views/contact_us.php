<div class="landing-wide nop">
        <div class="container">
            <div id="newsletter" class="wide-newsletter gray opacity-none">
                <form id="contact_form" class="row-fluid special" action="../assets/scripts/process.php" method="POST">
                    <div class="span12">
                    
                        <div class="row-fluid">
                          <div class="span12">    
                            <h3 >Contact Us</h3>
       
                            <p>Please tell us what you are looking for and we will get back to you as soon as possible</p>
                          </div>
                        </div>
                        

                       <div class="input row-fluid" id="name-group">
                           <input type="text" name="fname"  placeholder="First Name" class="span6" />
                           <input type="text" name="lname"  placeholder="Last Name" class="span6" />
                       </div>
   
                       <div class="input row-fluid" id="email-group">
                           <input type="email" name="email" value=""  placeholder="Email" class="span6" />
                           <input type="text" name="phone" value=""  placeholder="Phone" class="span6" />
                       </div>
   
                        <div class="row-fluid">
                         <div class="span12">
                            <h3>What kind of service are you looking for?</h3>
                           
                            <p>How many square feet is the property?</p>
                         </div>
                        </div>
                        
                        <div class="row-fluid">
                         <div class="span12">
                           <select name="sqft">
                               <option value="Less 1000sqft">Less than 1000sqft</option>
                               <option value="1000-5000sqt">1000sqft - 5000sqft</option>
                               <option value="5000+ sqft">5000+sqft</option>
                           </select>
                         </div>
                        </div>
                        
                        <div class="row-fluid">
                           <div class="checks span6">
                                <p class="checks_header">Check which services you are interested in:</p><br>
                               
                              <input type="checkbox" name="services[]" value="Janitorial"/><p>Janitorial</p><br>
                               <input type="checkbox" name="services[]" value="Window Cleaning"/><p>Window cleaning</p><br>
                               <input type="checkbox" name="services[]" value="Carpet Cleaning"/><p>Carpet service</p><br>
                               <input type="checkbox" name="services[]" value="Restroom Service"/><p>Restroom sanitation</p><br>
                               <input type="checkbox" name="services[]" value="Facility Maintenance"/><p>Facility Maintenance</p><br>
                               <input type="checkbox" name="services[]" value="Floor Service"/><p>Floor stripping &amp; re-waxing</p><br>
                               <input type="checkbox" name="services[]" value="Moving Cleanup"/><p>Move in or move out</p><br>
                               <input type="checkbox" name="services[]" value="Other"/><p>Other</p><br>
                           </div>
                        
                        
                           <div class="checks span6">
                           <p class="checks_header">How often will you need service?</p><br>
                           
                               <input type="checkbox" name="time[]" value="Dail"><p>Daily</p><br>
                               <input type="checkbox" name="time[]" value="Weekly"><p>Weekly</p><br>
                               <input type="checkbox" name="time[]" value="Bi-Monthly"><p>Bi-weekly</p><br>
                               <input type="checkbox" name="time[]" value="Monthly"><p>Monthly</p><br>
                               <input type="checkbox" name="time[]" value="One-time"><p>One time</p><br>
                           </div>
                           <br>
                           
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                               <h3>Comments</h3>
                               <textarea id="textarea" class="text" name="comments"></textarea>
                           </div>
       
                           <div class="pull-left">
                               <button type="submit" id="contact_sbt" class="btn btn-success btn-large">Submit</button>
                           </div>
                        </div>

                    </div>
                
                </form>
            
            <!-- End Wide-newsletter -->
        </div>
    </div>
</div>