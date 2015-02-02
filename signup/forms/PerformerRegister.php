<!-- Form for registering the Performers -->
<form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Account Setup</li>
		<li>Personal Details</li>
                <li>Personal Profile</li>
                <li>Social Profiles</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Login Credentials</h2>
		<h3 class="fs-subtitle">What you will use to login to your profile with</h3>
		<input type="text" name="email" placeholder="Email" />
		<input type="password" name="pass" placeholder="Password" />
		<input type="password" name="cpass" placeholder="Confirm Password" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
        <fieldset>
		<h2 class="fs-title">Personal Details</h2>
		<h3 class="fs-subtitle">We will never sell it</h3>
		<input type="text" name="fname" placeholder="First Name" />
		<input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="dob" placeholder="Date of Birth" />
                
                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner">
                        <span class="onoffswitch-active"><span class="onoffswitch-switch">&#9792;</span>Female</span>
                        <span class="onoffswitch-inactive">Male<span class="onoffswitch-switch">&#9794;</span></span>
                    </span>
                </label>
		<input type="text" name="country" placeholder="Country" />
                <input type="text" name="city" placeholder="City" />
		<input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
        <fieldset>
		<h2 class="fs-title">Personal Profile</h2>
		<h3 class="fs-subtitle">Get yourself targetted from your characteristics</h3>
		<input type="text" name="height" placeholder="Height" />
		<input type="text" name="weight" placeholder="Weight" />
                <input type="text" name="waist" placeholder="Waist" />
		<input type="text" name="hip" placeholder="Hip" />
                <input type="text" name="shoe" placeholder="Shoe" />
                <input type="text" name="dress" placeholder="Dress" />
                <input type="text" name="eye" placeholder="Eye Colour" />
		<input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Social Profiles</h2>
		<h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="facebook" placeholder="Facebook" />
		<input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="instagram" placeholder="Instagram" />
                <input type="text" name="flickr" placeholder="Flickr" />
		<input type="text" name="gplus" placeholder="Google Plus" />
		<input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
	</fieldset>
</form>