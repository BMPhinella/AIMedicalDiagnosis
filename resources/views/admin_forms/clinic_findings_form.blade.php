@extends('admin_layouts.main')
@section('page_css')
@endsection
@section('main_content')  
@include('admin_layouts.message')
<h5 style="text-align: center" class="lg-title">{{request()->route()->getName()}}</h5>
<div class="row">
    <div class="col-md-12 panel">
        <!-- BASIC WIZARD -->
        <form method="get" action="/create-clinicFindings" id="valWizard" class="panel-wizard">

        </ul>
            <ul class="nav nav-justified nav-wizard nav-disabled-click">
                <li><a href="#tab1-4" class="active" data-toggle="tab"><strong>Symptoms</strong></a></li>
                <li ><a href="#tab2-4" data-toggle="tab"><strong >Observations</strong></a></li>
                <li><a href="#tab3-4" data-toggle="tab"><strong>Clinical Examinations</strong></a></li>
            </ul>

            <div class="tab-content active">
                    


                <div class="tab-pane" id="tab1-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Select Patient</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <select name="patient_id" class="form-control" required>
                                        <option value=""> select patient</option>
                                    @foreach($patients as $patient)
                                    <option value="{{$patient->id}}"> {{$patient->name}}</option>
                                    
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="col-sm-4 control-label">Symptoms</label>
                        <div class="col-sm-8">
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Coma" id="checkboxDefault"/>
                                <label for="checkboxDefault">unconscious</label>
                            </div>
                                
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Absence of menstruation" id="checkboxNause"/>
                                <label for="checkboxNause">Absence of menstruation</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Hypertension" id="checkboxHyper"/>
                                <label for="checkboxHyper">Hypertension</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Sexual Problems" id="checkboxBlur"  />
                                <label for="checkboxBlur">Sexual Problems</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Bed wetting" id="checkboxBlur1"  />
                                <label for="checkboxBlur1">Poluria</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Abdominal pain" id="checkboxBlur2"  />
                                <label for="checkboxBlur2">Abdominal pain</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Irritability" id="checkboxWei"/>
                                <label for="checkboxWei">Irritability</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Vaginal dryness" id="checkboxMo"/>
                                <label for="checkboxMo">Vaginal Dryness</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Muscle weakness" id="checkboxNo"/>
                                <label for="checkboxNo">Muscle weakness</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Malaise" id="checkboxGe"/>
                                <label for="checkboxGe">Malaise</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Premature menopause" id="checkboxHead"/>
                                <label for="checkboxHead">Premature menopause</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Muscle aches" id="checkboxPo"/>
                                <label for="checkboxPo">Muscle aches</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Poor healing" id="checkboxS1"/>
                                <label for="checkboxS1">Prolonged wound healing</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Tiredness" id="checkboxS21"/>
                                <label for="checkboxS21">Tiredness</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Flaky skin" id="checkboxS2"/>
                                <label for="checkboxS2">Skin peeling</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Weight loss" id="checkboxS2"/>
                                <label for="checkboxS2">Weight loss</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Blurred vision" id="checkboxS3"/>
                                <label for="checkboxS3">Blurred vision</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Sweet-smelling fruity acetone breath" id="checkboxS4"/>
                                <label for="checkboxS4">Sweet smelling fruity acetone breath</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Thirst" id="checkboxS4"/>
                                <label for="checkboxS4">Thirst</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Short statures" id="checkboxS5"/>
                                <label for="checkboxS5">Short statures</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Excessive hunger" id="checkboxS6"/>
                                <label for="checkboxS6">Excessive hunger</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Nausea" id="checkboxS7"/>
                                <label for="checkboxS7">Nausea</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Delayed puberty" id="checkboxS8"/>
                                <label for="checkboxS8">Delayed puberty</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Hand tingling" id="checkboxS9"/>
                                <label for="checkboxS9">Hand tingling</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Premature fusion of sagittal skull bones" id="checkboxS11"/>
                                <label for="checkboxS11">Premature fusion of sagittal skull bones</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Underdeveloped external genitalia" id="checkboxS12"/>
                                <label for="checkboxS12">Under developed external genitals</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Mental retardation" id="checkboxS13"/>
                                <label for="checkboxS13">Mental retardation</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" value="Brain wasting" id="checkboxS14"/>
                                <label for="checkboxS14">Brain wasting</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Tinea" id="checkboxS15"/>
                                <label for="checkboxS15">Tinea</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" value="Psychomotor regression" id="checkboxS16"/>
                                <label for="checkboxS16">Psychomotor regression</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Foot tingling" id="checkboxS17"/>
                                <label for="checkboxS17">Tingling sensation</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Vitamin k deficiency" id="checkboxS18"/>
                                <label for="checkboxS18">Vitamin k deficiency</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Headches" id="checkboxS19"/>
                                <label for="checkboxS19">Headache</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Pale stool" id="checkboxS21"/>
                                <label for="checkboxS21">Pale stool</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Depression" id="checkboxS22"/>
                                <label for="checkboxS22">Depression</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Retarded growth" id="checkboxS23"/>
                                <label for="checkboxS23">Stunted growth</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Diarrhoea" id="checkboxS24"/>
                                <label for="checkboxS24">Diarrhoea</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Loss of tooth enamel" id="checkboxS25"/>
                                <label for="checkboxS25">Enamel erosion</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Abscesses" id="checkboxS26"/>
                                <label for="checkboxS26">Abscesses</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Sexual problems" id="checkboxS27"/>
                                <label for="checkboxS27">Sexual problems</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="hyperglycemic hyperosmolar nonketotic syndrome (hhns)" id="checkboxS28"/>
                                <label for="checkboxS28">Hyperglycemia</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="tab2-4">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Observations</label>
                        <div class="col-sm-8">
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Death" id="checkboxDe"  />
                                <label for="checkboxDe">minimal brain function</label>
                            </div>
                                
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Paresthesia" id="checkboxAi" />
                                <label for="checkboxAi">Paresthesia</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Poor skin healing" id="checkboxMus" />
                                <label for="checkboxMus">Poor skin healing</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Dry itchy skin" id="checkboxO1"/>
                                <label for="checkboxO1">Dry itchy skin</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Thrush" id="checkboxO2"/>
                                <label for="checkboxO2">Thrush</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Skin rashes" id="checkboxO4"/>
                                <label for="checkboxO3">Ring worms</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Skin infections" id="checkboxO5"/>
                                <label for="checkboxO5">Skin infection</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Breathing difficulties" id="checkboxO6"/>
                                <label for="checkboxO6">Breathing difficulty</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Numbness in feet" id="checkboxO8"/>
                                <label for="checkboxO7">Numbness in the feet</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Numbness in hands" id="checkboxO8"/>
                                <label for="checkboxO7">Numbness in hands</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Persistent fungal skin infections" id="checkboxO9"/>
                                <label for="checkboxO9">Persistent fungal skin infections</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Skin ulcers" id="checkboxO11"/>
                                <label for="checkboxO11">Skin ulcer</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="dry mouth" id="checkboxO22"/>
                                <label for="checkboxO22">Ataxia</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Retarded fetal growth" id="checkboxO33"/>
                                <label for="checkboxO33">Retarded fetal growth</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="gonadal insufficiency" id="checkboxO44"/>
                                <label for="checkboxO44">Primary gonadal insufficiency</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Stroke like episodes" id="checkboxO5"/>
                                <label for="checkboxO55">Stroke like episodes</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="tab3-4">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Clinical Examinations</label>
                        <div class="col-sm-8">
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Diabetic Ketoacidisis (dka)" id="checkboxM"  />
                                <label for="checkboxM">Diabetic Ketoacidisis</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="Peripheral neuropathies" id="checkboxN"  />
                                <label for="checkboxN">Peripheral neuropathies</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="hhns" id="checkboxL"  />
                                <label for="checkboxL">HHNS</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="sclerodatyly" id="checkboxK"  />
                                <label for="checkboxK">Insulin resistant diabetes</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="wasting of testicles" id="checkboxJ"  />
                                <label for="checkboxJ">Undescended testicles</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="bullae" id="checkboxH"  />
                                <label for="checkboxH">Pancytopenia</label>
                            </div>
                                
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="pigmentation" id="checkboxG"  />
                                <label for="checkboxG">Primar gonadal insufficiency</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="granuloma annulare" id="checkboxS"  />
                                <label for="checkboxS">Increased hormone levels</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="vitiligo" id="checkboxPA"  />
                                <label for="checkboxPA">Goiters</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="carotid pulse" id="checkboxR"  />
                                <label for="checkboxR">Hallucinations</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" name="symptoms[]" value="bruits" id="checkboxE"  />
                                <label for="checkboxE">Diabetes inspidus</label>
                            </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="thyroid enlargement" id="checkboxW"  />
                                    <label for="checkboxW">Megaloblastic anemia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="xanthelasma" id="checkboxT"  />
                                    <label for="checkboxT">Hydroureter</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Thrombocytopenia" id="checkboxY"  />
                                    <label for="checkboxY">Thrombocytopenia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="cataract" id="checkboxX"  />
                                    <label for="checkboxX">Optic atrophy</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Hydronephrosis" id="checkboxV"  />
                                    <label for="checkboxV">Hydronephrosis</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Siderooblastic anemia" id="checkboxB"  />
                                    <label for="checkboxB">Siderooblastic anemia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Neurodenic bladder" id="checkboxC"  />
                                    <label for="checkboxC">Neurodenic bladder</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Hypothyroidism" id="checkboxZ"  />
                                    <label for="checkboxZ">Hypothyroidism</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Cardiomyopathy" id="checkboxTT"  />
                                    <label for="checkboxTT">Cardiomyopathy</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Diabetes mellitus  " id="checkboxDD"  />
                                    <label for="checkboxDD">Diabetes mellitus </label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Enlarged liver" id="checkboxSS"  />
                                    <label for="checkboxSS">Enlarged liver</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Osteoporosis" id="checkboxHH"  />
                                    <label for="checkboxHH">Osteoporosis</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Batter's Syndrome" id="checkboxLL"  />
                                    <label for="checkboxLL">Batter's Syndrome</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Hyponatremia" id="checkboxNN"  />
                                    <label for="checkboxNN">Hyponatremia</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Etiology" id="checkboxXX"  />
                                    <label for="checkboxXX">Etiology</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Hyperchloremia" id="checkboxWW"  />
                                    <label for="checkboxWW">Hyperchloremia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Blurred vision" id="checkboxNM"  />
                                    <label for="checkboxNM">Weak eye muscles</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Proximal renal tubulopathy" id="checkboxCV"  />
                                    <label for="checkboxCV">Proximal renal tubulopathy</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Type one dibetes" id="checkboxSN"  />
                                    <label for="checkboxSN">Type one dibetes</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Cerebellar ataxia" id="checkboxMNM"  />
                                    <label for="checkboxMNM">Cerebellar ataxia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Dermatitis herpetiformis" id="checkboxCL1"  />
                                    <label for="checkboxCL1">Dermatitis herpetiformis</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" name="symptoms[]" value="Bone loss" id="checkboxCL2"  />
                                    <label for="checkboxCL2">Bone loss</label>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="Predict" class="btn btn-primary" value="Submit"/> 
                                </div>


                            </div><!-- tab-pane -->
                    </div>
                </div><!-- tab-content -->
            </div>
            <ul class="list-unstyled wizard">
                <!-- <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li> -->
                <!-- <li class="pull-right next"><a href="#tab2-4" data-toggle="tab" class="btn btn-primary">Next</a></li> -->
                <!-- <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">Finish</button></li> -->
            </ul>
        </form>
    </div>
</div><!-- col-md-6 -->
@endsection
@section('page_js')
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/bootstrap-wizard.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/select2.min.js"></script>

<script src="js/custom.js"></script>
<script>
    jQuery(document).ready(function() {
        
        // This will empty first option in select to enable placeholder
        jQuery('select option:first-child').text('');
        
        // Select2
        jQuery("select").select2({
            minimumResultsForSearch: -1
        });
        
        // Basic Wizard
        jQuery('#basicWizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                tab.prevAll().addClass('done');
                tab.nextAll().removeClass('done');
                tab.removeClass('done');
                
                var $total = navigation.find('li').length;
                var $current = index + 1;
                
                if($current >= $total) {
                    $('#basicWizard').find('.wizard .next').addClass('hide');
                    $('#basicWizard').find('.wizard .finish').removeClass('hide');
                } else {
                    $('#basicWizard').find('.wizard .next').removeClass('hide');
                    $('#basicWizard').find('.wizard .finish').addClass('hide');
                }
            }
        });
        
        // Progress Wizard
        jQuery('#progressWizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                tab.prevAll().addClass('done');
                tab.nextAll().removeClass('done');
                tab.removeClass('done');
                
                var $total = navigation.find('li').length;
                var $current = index + 1;
                
                if($current >= $total) {
                    $('#progressWizard').find('.wizard .next').addClass('hide');
                    $('#progressWizard').find('.wizard .finish').removeClass('hide');
                } else {
                    $('#progressWizard').find('.wizard .next').removeClass('hide');
                    $('#progressWizard').find('.wizard .finish').addClass('hide');
                }
                
                var $percent = ($current/$total) * 100;
                $('#progressWizard').find('.progress-bar').css('width', $percent+'%');
            }
        });
        
        // Wizard With Disabled Tab Click
        jQuery('#tabWizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                tab.prevAll().addClass('done');
                tab.nextAll().removeClass('done');
                tab.removeClass('done');
                
                var $total = navigation.find('li').length;
                var $current = index + 1;
                
                if($current >= $total) {
                    $('#tabWizard').find('.wizard .next').addClass('hide');
                    $('#tabWizard').find('.wizard .finish').removeClass('hide');
                } else {
                    $('#tabWizard').find('.wizard .next').removeClass('hide');
                    $('#tabWizard').find('.wizard .finish').addClass('hide');
                }
            },
            onTabClick: function(tab, navigation, index) {
                return false;
            }
        });
        
        // Wizard With Form Validation
        jQuery('#valWizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                tab.prevAll().addClass('done');
                tab.nextAll().removeClass('done');
                tab.removeClass('done');
                
                var $total = navigation.find('li').length;
                var $current = index + 1;
                
                if($current >= $total) {
                    $('#valWizard').find('.wizard .next').addClass('hide');
                    $('#valWizard').find('.wizard .finish').removeClass('hide');
                } else {
                    $('#valWizard').find('.wizard .next').removeClass('hide');
                    $('#valWizard').find('.wizard .finish').addClass('hide');
                }
            },
            onTabClick: function(tab, navigation, index) {
                return false;
            },
            onNext: function(tab, navigation, index) {
                var $valid = jQuery('#valWizard').valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            }
        });
        
        // Wizard With Form Validation
        var $validator = jQuery("#valWizard").validate({
            highlight: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-error');
            }
        });
        
        
        // This will submit the basicWizard form
        jQuery('.panel-wizard').submit(function() {    
            alert('This will submit the form wizard');
            return false // remove this to submit to specified action url
        });

    });
</script>

@endsection