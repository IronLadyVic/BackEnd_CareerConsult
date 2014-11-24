@extends('includes.master')
@section("content")


<!-- Career Profile Client add info. -->
<div id="sectionCareerProfile">
<section id="career-profile">
    <h1 id="header">CAREER PROFILE</h1>
    
    <p id="description">By updating your Career Profile, this will help your career consultant provide the correct service and help you launch your career, faster and easier.</p>
    
    {{ Form::model($user, array('url' => 'users/'.$user->id, 'method'=>'put', 'id'=>'careerProfile-form')) }} 
    
        <div class="profileAuto">
        <img id="profileImage" src="img/careerprofile-BLK.png" alt="profile picture">
        </div>

        <p>
        <span class="border"><i class="fa fa-camera"></i></span>
        <label for="avatar"></label>
        <input type="file" name="imageType" id="avatar" class="border"  >
        </p>

        <p>
        <span class="border"><i class="fa fa-user"></i></span>
        {{Form::label('username', '');}}
        {{Form::text('username', array('id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'));}}
        {{$errors->first('username','<p class="error">:message</p>')}}
        
        </p>

        <p>
        <span class="border"><i class="fa fa-envelope"></i></span>
        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="Email" class="border">
        </p>

        <p>
        <span class="border"><i  class="fa fa-user"></i></span>
        <label for="firstName"></label>
        <input type="text" name="firstName" id="firstName" placeholder="First Name" class="border">
        </p>

        <p>
        <span class="border"><i class="fa fa-user"></i></span>
        <label for="lastName"></label>
        <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="border">
        </p>

        <p>
        <span class="border"><i  class="fa fa-phone-square"></i></span>
        <label for="contact"></label>
        <input type="text" name="phone" id="contact" placeholder="Contact Number" class="border">
        </p>
      
        <p>
        <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
        <label for="personalGoals"></label>
        <textarea name="comment" id="personalGoals" placeholder="Personal Goals" class="border"></textarea>
        </p>

        <p>
        <span class="border"><i  class="fa fa-pencil-square-o"></i></span> 
        <label for="experience"></label>
        <textarea name="comment" id="experience" placeholder="Experience" class="border"></textarea>
        </p>
        
        <p>
        <span class="border"><i class="fa fa-university"></i></span>
        <label for="education"></label>
        <textarea name="comment" id="education" placeholder="Education" class="border"></textarea>
        </p>

        <p>
        <span class="border"><i  class="fa fa-trophy"></i></span> 
        <label for="acheivements"></label>
        <textarea name="comment" id="acheivements" placeholder="Acheivements" class="border"></textarea>
        </p>

        <p>
        <span class="border"><i class="fa fa-history"></i></span>
        <label for="careerHistory"></label>
        <textarea name="comment" id="careerHistory" placeholder="Career History" class="border"></textarea>
        </p>

        <p>
        <span class="border"><i class="fa fa-thumbs-o-up"></i></span>
        <label for="careerClass"></label>      
        <select id="careerClass" class="border">
            <option value="0">Choose your Career Class</option>
            <option value="1">Accounting</option>
            <option value="2">Administration & Office Support</option>
            <option value="4">Advertising, Arts & Media</option>
            <option value="5">Banking  Financial Services</option>
            <option value="6">Call Centre & Customer Service</option>
            <option value="7">CEO & General Management</option>
            <option value="8">Community Services & Development</option>
            <option value="9">Construction</option>
            <option value="10">Consulting & Strategy</option>
            <option value="11">Community Services & Development</option>
            <option value="12">Design &amp; Architecture</option>
            <option value="13">Education &amp; Training</option>
            <option value="14">Engineering</option>
            <option value="15">Farming, Animals &amp; Conservation</option>
            <option value="16">Government &amp; Defence</option>
            <option value="17">Healthcare &amp; Medical</option>
            <option value="18">Hospitality &amp; Tourism</option>
            <option value="19">Human Resources &amp; Recruitment</option> 
            <option value="20">Information &amp; Communication Technology</option>
            <option value="21">Insurance &amp; Superannuation</option>
            <option value="22">Legal</option>
            <option value="23">Manufacturing, Transport &amp; Logistics</option>
            <option value="24">Marketing &amp; Communications</option>
            <option value="25">Mining, Resources &amp; Energy</option>
            <option value="26">Real Estate &amp; Property</option>
            <option value="27">Retail &amp; Consumer Products</option>
            <option value="28">Sales</option>
            <option value="29">Science &amp; Technology</option>
            <option value="30">Self Employment</option>
            <option value="31">Sport &amp; Recreation</option>
            <option value="32">Trades &amp; Services</option>
        </select>
        </p>
       <p>
        <span class="border"><i  class="fa fa-hand-o-right"></i></span>
        <label for="servicesSel"></label>
        <select id="servicesSel" class="border">
            <option value="0">Services I'm Interested In...</option>
            <option value="1">CV Writing & Cover Letters</option>
            <option value="2">Interview Preparation</option>
            <option value="4">New to NZ</option>
            <option value="5">Employment Contracts</option>
            <option value="6">General Job Seeking Advice</option>
            <option value="7">General Employment Advice</option>
        </select>
        </p>
        

        <p>
        <p id="agreementStatement" class="border">In order to keep you informed and help you with your future career, we will retain your career profile for future career consult meetings & career planning. I consent by ticking this box.
        
        {{Form::checkbox('check', 'consent given', false, array('id' => 'checkboxCareerProfile'));}}
        {{$errors->first('checkbox','<p class="border">:message</p>')}}   
        

        <label for="updateProfile"></label>
        <input type="submit" name="button" id="updateProfile" class="button" value="UPDATE MY PROFILE">
    {{ Form::close() }}
</section>
</div>



@stop