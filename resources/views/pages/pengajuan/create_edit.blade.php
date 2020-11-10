@extends('layouts.master')
@section('title', 'Form Pengajuan')

@section('content')
@component('layouts.component.header')
@slot('tools')

@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> / Pengajuan /
    {{isset($data) ? 'Edit Pengajuan' : 'Tambah Pengajuan'}}</h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endslot
@slot('breadcumbs2')
<a href="{{url('/pages/dashboard')}}" class="breadcrumb-item"> Home</a>
<a href="{{route('pengajuan.index')}}" class="breadcrumb-item">Pengajuan</a>
<span class="breadcrumb-item active">{{isset($data) ? 'Edit Pengajuan' : 'Tambah Pengajuan'}}</span>
@endslot
@endcomponent
<!-- Main content -->
<div class="content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">{{isset($data) ? 'Edit Pengajuan' : 'Tambah Pengajuan'}}</h5>
                </div>
					<div class="card-header bg-white header-elements-inline">
						<h6 class="card-title">Basic example</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

                	<form class="wizard-form steps-basic wizard clearfix" action="#" data-fouc="" role="application" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0" class=""><span class="number">1</span> Personal data</a></li><li role="tab" class="current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1" class=""><span class="current-info audible">current step: </span><span class="number">2</span> Your education</a></li><li role="tab" class="done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2" class=""><span class="number">3</span> Your experience</a></li><li role="tab" class="last done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3" class=""><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
						<h6 id="steps-uid-0-h-0" tabindex="-1" class="title">Personal data</h6>
						<fieldset id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body" aria-hidden="true" style="display: none;">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Select location:</label>
										<select name="location" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="239">
											<option data-select2-id="241"></option>
											<optgroup label="North America">
												<option value="1">United States</option>
												<option value="2">Canada</option>
											</optgroup>
											<optgroup label="Latin America">
												<option value="3">Chile</option>
												<option value="4">Argentina</option>
												<option value="5">Colombia</option>
												<option value="6">Peru</option>
											</optgroup>
											<optgroup label="Europe">
												<option value="8">Croatia</option>
												<option value="9">Hungary</option>
												<option value="10">Ukraine</option>
												<option value="11">Greece</option>
											</optgroup>
										</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="240" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-location-z2-container"><span class="select2-selection__rendered" id="select2-location-z2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Select position:</label>
										<select name="position" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="257">
											<option data-select2-id="259"></option>
											<optgroup label="Developer Relations">
												<option value="1">Sales Engineer</option>
												<option value="2">Ads Solutions Consultant</option>
												<option value="3">Technical Solutions Consultant</option>
												<option value="4">Business Intern</option>
											</optgroup>

											<optgroup label="Engineering &amp; Design">
												<option value="5">Interaction Designer</option>
												<option value="6">Technical Program Manager</option>
												<option value="7">Software Engineer</option>
												<option value="8">Information Security Engineer</option>
											</optgroup>

											<optgroup label="Marketing &amp; Communications">
												<option value="13">Media Outreach Manager</option>
												<option value="14">Research Manager</option>
												<option value="15">Marketing Intern</option>
												<option value="16">Business Intern</option>
											</optgroup>
										</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="258" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-position-lp-container"><span class="select2-selection__rendered" id="select2-position-lp-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Applicant name:</label>
										<input type="text" name="name" class="form-control" placeholder="John Doe">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Email address:</label>
										<input type="email" name="email" class="form-control" placeholder="your@email.com">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone #:</label>
										<input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
									</div>
								</div>

								<div class="col-md-6">
									<label>Date of birth:</label>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<select name="birth-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="272">
													<option data-select2-id="274"></option>
													<option value="1">January</option>
													<option value="2">February</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="273" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-month-48-container"><span class="select2-selection__rendered" id="select2-birth-month-48-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<select name="birth-day" data-placeholder="Day" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="286">
													<option data-select2-id="288"></option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="...">...</option>
													<option value="31">31</option>
												</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="287" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-day-ox-container"><span class="select2-selection__rendered" id="select2-birth-day-ox-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Day</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<select name="birth-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="300">
													<option data-select2-id="302"></option>
													<option value="1">1980</option>
													<option value="2">1981</option>
													<option value="3">1982</option>
													<option value="4">1983</option>
													<option value="5">1984</option>
													<option value="6">1985</option>
													<option value="7">1986</option>
													<option value="8">1987</option>
													<option value="9">1988</option>
													<option value="10">1989</option>
													<option value="11">1990</option>
												</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="301" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-year-ye-container"><span class="select2-selection__rendered" id="select2-birth-year-ye-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</fieldset>

						<h6 id="steps-uid-0-h-1" tabindex="-1" class="title current">Your education</h6>
						<fieldset id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body current" aria-hidden="false" style="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>University:</label>
		                                <input type="text" name="university" placeholder="University name" class="form-control">
	                                </div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Country:</label>
	                                    <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="307">
	                                        <option data-select2-id="309"></option> 
	                                        <option value="1">United States</option> 
	                                        <option value="2">France</option> 
	                                        <option value="3">Germany</option> 
	                                        <option value="4">Spain</option> 
	                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="308" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-university-country-t9-container"><span class="select2-selection__rendered" id="select2-university-country-t9-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Degree level:</label>
		                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
	                                </div>

									<div class="form-group">
										<label>Specialization:</label>
		                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
	                                </div>
								</div>

								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6">
											<label>From:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="313">
					                                    	<option data-select2-id="315"></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="314" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-v3-container"><span class="select2-selection__rendered" id="select2-education-from-month-v3-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="319">
					                                        <option data-select2-id="321"></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="320" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-49-container"><span class="select2-selection__rendered" id="select2-education-from-year-49-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<label>To:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="325">
					                                    	<option data-select2-id="327"></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="326" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-i2-container"><span class="select2-selection__rendered" id="select2-education-to-month-i2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="331">
					                                        <option data-select2-id="333"></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="332" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-x3-container"><span class="select2-selection__rendered" id="select2-education-to-year-x3-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Language of education:</label>
		                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
	                                </div>
								</div>
							</div>
						</fieldset>

						<h6 id="steps-uid-0-h-2" tabindex="-1" class="title">Your experience</h6>
						<fieldset id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Company:</label>
		                                <input type="text" name="experience-company" placeholder="Company name" class="form-control">
	                                </div>

									<div class="form-group">
										<label>Position:</label>
		                                <input type="text" name="experience-position" placeholder="Company name" class="form-control">
	                                </div>

									<div class="row">
										<div class="col-md-6">
											<label>From:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="337">
					                                    	<option data-select2-id="339"></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="338" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-d1-container"><span class="select2-selection__rendered" id="select2-education-from-month-d1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="343">
					                                        <option data-select2-id="345"></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="344" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-0i-container"><span class="select2-selection__rendered" id="select2-education-from-year-0i-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<label>To:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="349">
					                                    	<option data-select2-id="351"></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="350" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-yd-container"><span class="select2-selection__rendered" id="select2-education-to-month-yd-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="355">
					                                        <option data-select2-id="357"></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="356" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-pw-container"><span class="select2-selection__rendered" id="select2-education-to-year-pw-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
				                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
	                                <div class="form-group">
										<label>Brief description:</label>
	                                    <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
	                                </div>

									<div class="form-group">
										<label class="d-block">Recommendations:</label>
	                                    <div class="uniform-uploader"><input name="recommendations" type="file" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
	                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
	                                </div>
								</div>
							</div>
						</fieldset>

						<h6 id="steps-uid-0-h-3" tabindex="-1" class="title">Additional info</h6>
						<fieldset id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="d-block">Applicant resume:</label>
	                                    <div class="uniform-uploader"><input type="file" name="resume" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
	                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Where did you find us?</label>
	                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" data-select2-id="363">
	                                        <option data-select2-id="365"></option> 
	                                        <option value="monster">Monster.com</option> 
	                                        <option value="linkedin">LinkedIn</option> 
	                                        <option value="google">Google</option> 
	                                        <option value="adwords">Google AdWords</option> 
	                                        <option value="other">Other source</option>
	                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="364" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-source-ar-container"><span class="select2-selection__rendered" id="select2-source-ar-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose an option...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Availability:</label>
										<div class="form-check">
											<label class="form-check-label">
												<div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
												Immediately
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
												1 - 2 weeks
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
												3 - 4 weeks
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
												More than 1 month
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Additional information:</label>
	                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                    </div>
								</div>
							</div>
						</fieldset>
					</div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="" aria-disabled="false"><a href="#previous" class="btn btn-light" role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false" class="" style=""><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="icon-arrow-right14 ml-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li></ul></div></form>
	            
                <div class="card-body">
                    <form id="form-pengajuan" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama</label>
                                <input type="text" class="form-control" readonly=""
                                value="{{ auth('customer')->check() ? auth('customer')->user()->name : Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">No. KTP</label>
                            <input type="no_ktp" name="no_ktp" class="form-control" id=""
                                value="{{isset($data) ? $data->no_ktp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Foto KTP</label>
                            <input type="file" name="image_ktp" class="form-control" id=""
                                value="{{isset($data) ? $data->image_ktp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">No. NPWP</label>
                            <input type="no_npwp" name="no_npwp" class="form-control" id=""
                                value="{{isset($data) ? $data->no_npwp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Foto NPWP</label>
                            <input type="file" name="image_npwp" class="form-control" id=""
                                value="{{isset($data) ? $data->image_npwp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="address" name="address" class="form-control" id=""
                                value="{{isset($data) ? $data->address : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Brand</label>
                            <input type="brand_name" name="brand_name" class="form-control" id=""
                                value="{{isset($data) ? $data->brand_name : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tipe Pengajuan</label>
                            {!! Form::select('type', $options['layanan'], null, ['class' => 'form-control']) !!}
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="button" id="save" class="btn btn-md btn-primary pull-right">Submit</button>
                        <a href="{{route('pengajuan.index')}}" class="btn btn-md btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('javascript')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
@if(isset($data))
{!! JsValidator::formRequest('App\Http\Requests\Pengajuan\PengajuanUpdateRequest') !!}
@else
{!! JsValidator::formRequest('App\Http\Requests\Pengajuan\PengajuanRequest') !!}
@endif
<script>
    $('#save').on("click",function(){
    let btn = $(this);
    let form = $('#form-pengajuan');
    let url = "{{ route('pengajuan.store') }}"
    let data = document.forms.namedItem('form-pengajuan');
    let formData = new FormData(data);
    let index =  "{{ route('pengajuan.index') }}"
    let mode = "POST"
    if(form.valid()) {
        createWithImage(url, formData, btn, index);
    }
});
</script>
@endpush
